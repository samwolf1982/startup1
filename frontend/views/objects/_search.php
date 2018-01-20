<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ObjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'deal_type_id') ?>

    <?= $form->field($model, 'deal_model_id') ?>

    <?= $form->field($model, 'object_type_id') ?>

    <?php // echo $form->field($model, 'object_model_id') ?>

    <?php // echo $form->field($model, 'address_text') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'sity') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'number_street') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'lng') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'currency_type_id') ?>

    <?php // echo $form->field($model, 'video_json') ?>

    <?php // echo $form->field($model, 'header') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'property_type_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
