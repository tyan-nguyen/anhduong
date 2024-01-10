<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Catelogies */
?>
<div class="catelogies-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'name',
            //'name_en',
            'slug',
            'pid'=>[
                'attribute'=>'pid',
                'value'=>$model->showParent
            ],
            'priority',
            'level',
            'seo_title',
            'seo_description',
            'lang',
            'lang_parent'=>[
                'attribute'=>'lang_parent',
                'value'=>$model->showParentLang
            ],
        ],
    ]) ?>

</div>
