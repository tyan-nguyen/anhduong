<?php

namespace app\modules\dashboard\models\base;

use Yii;
use yii\behaviors\SluggableBehavior;
use webvimark\modules\UserManagement\models\User;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $imgcover
 * @property string $catelogies
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $summary
 * @property string|null $content
 * @property string|null $date_created
 * @property string|null $date_updated
 * @property int|null $user_created
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $post_status
 * @property string|null $tags
 * @property string|null $site_keywords
 * @property string|null $lang
 * @property int|null $lang_parent
 * @property int|null $is_static
 * @property string|null $post_type
 */
class PostsBase extends \app\models\Posts
{
    //catalog for create, update
    public $catalog;
    public $taglist;
    
    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'immutable' => true,
                'ensureUnique'=>true,
                //'uniqueValidator'=>[]
                // 'slugAttribute' => 'slug',
            ],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['catelogies', 'title'], 'required'],
            [['title'], 'required'],
            [['slug', 'summary', 'content', 'seo_description'], 'string'],
            [['date_created', 'date_updated', 'catalog', 'taglist'], 'safe'],
            [['user_created', 'is_static', 'lang_parent'], 'integer'],
            [['code', 'imgcover', 'catelogies', 'seo_title', 'tags', 'site_keywords'], 'string', 'max' => 200],
            [['title'], 'string', 'max' => 300],
            [['post_status', 'post_type'], 'string', 'max' => 20],
            [['lang'], 'string', 'max' => 5],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'imgcover' => 'Imgcover',
            'catelogies' => 'Catelogies',
            'title' => 'Title',
            'slug' => 'Slug',
            'summary' => 'Summary',
            'content' => 'Content',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'user_created' => 'User Created',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'post_status' => 'Post Status',
            'tags' => 'Tags',
            'site_keywords' => 'Site Keywords',
            'is_static' => 'Is Static'
        ];
    }
    
    /**
     * before save
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if($this->isNewRecord){
                if(!Yii::$app->user->isGuest)
                    $this->user_created = Yii::$app->user->id;
                    $this->date_created = date('Y-m-d H:i:s');
                    if($this->lang == null)
                        $this->lang = 'vi';
                        
                        if($this->is_static == null)
                            $this->is_static = 0;
                            
            } else {
                $this->date_updated = date('Y-m-d H:i:s');
            }
            return true;
        }
    }
    
    /**
     * delete file
     */
    public function beforeDelete()
    {
        $this->deleteDir(Yii::getAlias('@webroot/images/posts/'). $this->code);
        parent::beforeDelete();
        return true;
    }
    
    /**
     * dell folder not used
     * @return mixed
     */
    public static function deleteDir($dirPath) {
        if (! is_dir($dirPath)) {
            throw new \InvalidArgumentException("$dirPath must be a directory");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }
    
    /**
     * check dir empty
     */
    public function is_dir_empty($dir) {
        if (!is_readable($dir)) return null;
        return (count(scandir($dir)) == 2);
    }
    
    /*
     * post status
     */
    public function getPostStatus(){
        return [
            'DRAFT' => 'Bản nháp',
            'CRAWL' => 'Bản Crawl',
            'PUBLISH' => 'Publish'
        ];
    }
    
    /*
     * langs
     */
    public function getLangs(){
        return [
            'vi' => 'Tiếng Việt ',
            'en' => 'English',
        ];
    }
    
}
