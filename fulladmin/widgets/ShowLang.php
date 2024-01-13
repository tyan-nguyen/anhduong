<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

/**
 * PostStatus Widget for display status for post/categories in grid and other views
 * input: value and text to display
 */
class ShowLang extends Widget
{
    public $model;

    public function init(){
        parent::init();
    }
    
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $html = '';
        foreach ($this->model->langList as $key=>$val){
            if($this->model->lang != $val['lang']){
                $html .= '&nbsp;' . Html::a(Html::img(Yii::getAlias("@web/images/").$val['lang'].'.png', ['width'=>'20px']), Yii::getAlias('@web/dashboard/catelogies/view?id='.$val['id']),
                    ['role'=>'modal-remote'],
                    );
            } else {
                $html .= '&nbsp;' . Html::img(Yii::getAlias("@web/images/").$val['lang'].'.png', ['width'=>'20px', 'style'=>'border:2px solid black']);
            }            
        }
        if(count($this->model->langList) < count(Yii::$app->params['langs'])){
            $html .= '&nbsp;' . Html::a('+', Yii::getAlias('@web/dashboard/catelogies/create?id=' . $this->model->id),
                ['role'=>'modal-remote'],
                );
        }
        return $html;
    }
}
