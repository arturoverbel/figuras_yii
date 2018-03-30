<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\search\FiguraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="figura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'numLados') ?>

    <?= $form->field($model, 'discr') ?>

    <?= $form->field($model, 'lado') ?>

    <?= $form->field($model, 'base') ?>

    <?php // echo $form->field($model, 'altura') ?>

    <?php // echo $form->field($model, 'hipotenusa') ?>

    <?php // echo $form->field($model, 'radio') ?>

    <?php // echo $form->field($model, 'workspace') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
