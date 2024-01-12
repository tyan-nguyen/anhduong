<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\PostStatus;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
    ],
    /* [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name_en',
    ], */
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'slug',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'priority',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id',
        'filter'=>false,
        'label'=>'Number post',
        'value'=>function($model){
        return number_format($model->getNumberNewsHasThisCatelog());
        }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'lang',
        'format'=>'raw',
        'value'=>function($model){
            $html = '';
            foreach ($model->langList as $key=>$val){
                if($model->lang != $val['lang']){
                    $html .= '&nbsp;' . Html::a($val['lang'], Yii::getAlias('@web/dashboard/catelogies/view?id='.$val['id']),
                        ['role'=>'modal-remote'],
                    );
                } else {
                    $html .= '&nbsp;' . $val['lang'];
                }
                
            }
            
            if(count($model->langList) < count(Yii::$app->params['langs'])){
                $html .= '&nbsp;' . Html::a('+', Yii::getAlias('@web/dashboard/catelogies/create?code=' . $model->code),
                    ['role'=>'modal-remote'],
                    );
            }
            return $html;
        }
    ],
    
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'public',
        'format'=>'raw',
        'value'=>function($model){
            return PostStatus::widget(['value'=>$model->public, 'text'=>$model->getStatusLabel($model->public)]);
        }
    ],
    
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },

        'template'=>'{view}{update}{updateFull}{delete}',
        'buttons' => [
            'updateFull' => function ($url, $model, $key) {
                return \yii\helpers\Html::a('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>',
                    Yii::getAlias('@web') . '/dashboard/catelogies/update-full?id='. $model->id, [
                      'data-pjax'=>0  
                    ]);
            },
        ],
                
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   