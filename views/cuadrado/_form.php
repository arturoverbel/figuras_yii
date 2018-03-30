<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cuadrado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuadrado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
