<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Triangulo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="triangulo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'base')->textInput() ?>

    <?= $form->field($model, 'altura')->textInput() ?>

    <?= $form->field($model, 'hipotenusa')->textInput() ?>

    <?= $form->field($model, 'workspace')->listBox( $workspaces ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
