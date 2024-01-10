<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\dashboard\models\Catelogies;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Catelogies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catelogies-form">

    <?php $form = ActiveForm::begin(); ?>
    
     <?= $form->errorSummary($model) ?>
     
    <?php $nameLabel = $model->getAttributeLabel('name') 
    	. ' <span class="seoButton label label-warning" title="Thay đổi liên kết"><i class="glyphicon glyphicon-link"></i></span>' ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label($nameLabel) ?>
    <?php // $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
    
    <div class="dSeo box box-solid block-form" style="display:none">
    	
    	 <div class="box-header with-border block-form-title">
    	 	<i class="fa fa-bullhorn" aria-hidden="true"></i>
    	 	<h3 class="box-title">SEO</h3>
    	 </div>
    	 
    	 <div class="box-body">
            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
            
            <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>
            	
            <?= $form->field($model, 'seo_description')->textarea(['rows' => 3]) ?>
        </div>
        
        <?php // $form->field($model, 'seo_title_en')->textInput(['maxlength' => true]) ?>
        	
        <?php // $form->field($model, 'seo_description_en')->textarea(['rows' => 3]) ?>
    
    </div>
    
    <script>
    $('.seoButton').on('click', function(){
    	$('.dSeo').toggle();
    });
    </script>
    
     <?= $form->field($model, 'lang')->dropDownList(
         $model->code == null ? Yii::$app->params['langs'] : $model->getLangAvailable($model->code), 
         [
         'prompt'=>Yii::t('app', 'Select language'),
         'onchange'=>'ChangeLang()',
         'id'=>'txtLang'
     ]) ?>
    
    <?= $form->field($model,'pid')->dropDownList((new Catelogies())->getList(),
				['class'=>'form-control', 'prompt'=>'--Chọn--', 'id'=>'txtCat']) ?>
				
	<div class="row">
		<div class="col-md-6">
			<?= $form->field($model, 'priority')->textInput(['maxlength' => true]) ?>
    	</div>
    	<div class="col-md-6">
    		<?= $form->field($model, 'level')->textInput(['maxlength' => true]) ?>
    	</div>
	</div>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>


<script>
function ChangeLang(){
     $.ajax({
            url: '/dashboard/catelogies/change-lang',
           type: 'get',
           dataType: 'json',
           data: {langid: $("#txtLang").val()},
           success: function (data) {
           		console.log(data);
           		$('#txtCat').children().remove();
           		$('#txtCat').append('<option value="">--Chọn--</option>');
           		for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                      $('#txtCat').append('<option value="'+key+'">'+ data[key] +'</option>');
                    }
                }
           }

      });
}

</script>