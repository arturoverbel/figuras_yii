<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Figura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="figura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numLados')->textInput() ?>

    <?= $form->field($model, 'discr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lado')->textInput() ?>

    <?= $form->field($model, 'base')->textInput() ?>

    <?= $form->field($model, 'altura')->textInput() ?>

    <?= $form->field($model, 'hipotenusa')->textInput() ?>

    <?= $form->field($model, 'radio')->textInput() ?>

    <?= $form->field($model, 'workspace')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
