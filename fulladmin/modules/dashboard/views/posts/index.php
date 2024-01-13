<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>

<style>
.modal-dialog {
    width: 90%!important;
}
@media (max-width: 800px) {
   .modal-dialog {
      width: 99%!important; 
   }
}
</style>

<div class="news-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => ''],
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
                ['content'=>
                   /*  Html::a('<i class="glyphicon glyphicon-plus"></i> Add New Post', ['create?lang=' . $lang],
                    ['data-pjax'=>0, 'title'=> 'Create new News','class'=>'btn btn-default']). */
                    Html::a('<i class="glyphicon glyphicon-plus"></i> Add New Post 11', ['create'],
                        ['data-pjax'=>0, 'title'=> 'Create new News','class'=>'btn btn-default']).
                    Html::a('<i class="glyphicon glyphicon-repeat"></i> Reload List', ['?lang=' . $lang],
                    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid'])
                    //'{toggleData}'.
                    //'{export}'
                ],
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => '', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> News listing',
                //'before'=>'<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
                'after'=>BulkButtonWidget::widget([
                            'buttons'=>Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All',
                                ["bulk-delete"] ,
                                [
                                    "class"=>"btn btn-danger btn-xs",
                                    'role'=>'modal-remote-bulk',
                                    'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                                    'data-request-method'=>'post',
                                    'data-confirm-title'=>'Are you sure?',
                                    'data-confirm-message'=>'Are you sure want to delete this item'
                                ]),
                        ]).                        
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
    "clientOptions" => [
        "backdrop" => "static", "keyboard" => false
    ]
])?>
<?php Modal::end(); ?>
