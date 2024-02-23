<?php

use yii\helpers\Html;
$this->title = Yii::t('app', 'Update Branch');
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Branches */
?>
<div class="branches-update">

<?php 
if(isset($fromcreate) && $fromcreate == true){
?>
<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-ok"></span> <?= Yii::t('app', 'Create Success!') ?>
</div>
<?php } ?>

<?php 
if(isset($status) && $status == 'success'){
?>
<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-ok"></span> <?= Yii::t('app', 'Updated Success!') ?>
</div>
<?php } ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
