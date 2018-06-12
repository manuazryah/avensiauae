<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FacilityManagementDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="facility-management-details-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'type')->textInput() ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'main_content')->textarea(['rows' => 6]) ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'sub_title')->textInput(['maxlength' => true]) ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'sub_content')->textarea(['rows' => 6]) ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'equipment_list')->textarea(['rows' => 6]) ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'status')->textInput() ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'CB')->textInput() ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'UB')->textInput() ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'DOC')->textInput() ?>
</div>
<div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
    <?= $form->field($model, 'DOU')->textInput() ?>
</div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
