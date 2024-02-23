<?php
namespace app\controllers;

use Yii;
use app\modules\dashboard\models\Catelogies;
use app\modules\dashboard\models\Posts;
use app\modules\dashboard\models\PostPublic;

class SiteController extends BaseController
{
    public $layout = 'index';
    //public $enableCsrfValidation = false;
    
    /**
     * homepage
     */
    public function actionIndex()
    {        
        return $this->render('index');
    }
    
    /**
     * posts
     */
    public function actionPosts($slug=NULL, $page=NULL)
    {
        $this->layout = 'post';
        $this->view->params['showBanner'] = true;
        //all posts
        $this->view->params['image'] = '/ntweb/images/banner/default.jpg';
        $this->view->params['title'] = 'Bài viết mới';
        $this->view->params['breadcrumb'] = [
            [
                'label'=>'Trang chủ',
                'url' => '#',
                'active'=>false
            ],
            [
                'label'=>'Bài viết',
                'url' => '',
                'active'=>true
            ]
        ];
        
        //$listPosts = Posts::getPostByType('POST',10);
        $listPosts = PostPublic::getPostsPublic('POST');
        
        //for one category
        if($slug != NULL){
            $category = Catelogies::find()->where(['slug'=>$slug])->one();
            $this->view->params['image'] = $category->cover;
            $this->view->params['title'] = $category->name;
            $this->view->params['breadcrumb'] = [
                [
                    'label'=>'Trang chủ',
                    'url' => '#',
                    'active'=>false
                ],
                [
                    'label'=>$category->name,
                    'url' => '',
                    'active'=>true
                ]
            ];
            
            //$listPosts = Posts::getPostByType('POST',10,$category->slug);
            $listPosts = PostPublic::getPostsPublic('POST',$category->slug);
            
        }
        $numPost = $listPosts->count();
        if($page == NULL)
            $page = 1;
        $numPerPage = 10;
        $numPage = ceil($numPost/$numPerPage);
        
        $listPosts = $listPosts->offset($page*$numPerPage-$numPerPage)->limit(10)
            ->orderBy(['date_created'=>SORT_DESC])->all();
        
        return $this->render('posts', [
            'listPosts'=>$listPosts,
            'prev' => $page>1 ? ($page-1) : null,
            'next' => $page < $numPage ? ($page+1) : null,
            'current' => $page,
            'total' => $numPage
        ]);
    }
    
    /**
     * post
     */
    public function actionPost($slug)
    {
        $this->layout = 'post';
        $this->view->params['showBanner'] = false;
        $model = PostPublic::find()->where(['slug'=>$slug])->one();
        return $this->render('post', [
            'post'=>$model
        ]);
    }
    
    /**
     * contact
     */
    public function actionContact()
    {
        $this->layout = 'page';
        return $this->render('contact');
    }
    
    /**
     * 404 not found
     */
    public function action404()
    {
        $this->layout = 'page';
        $this->view->params['image'] = '/ntweb/images/bg_fact.png';
        $this->view->params['title'] = '404';
        $this->view->params['breadcrumb'] = [
            [
                'label'=>'Trang chủ',
                'url' => '#',
                'active'=>false
            ],
            [
                'label'=>'Trang 404',
                'url' => '',
                'active'=>true
            ]
        ];
        return $this->render('404');
    }
    
}