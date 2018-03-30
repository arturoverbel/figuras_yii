<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cuadrado */

$this->title = 'Create Cuadrado';
$this->params['breadcrumbs'][] = ['label' => 'Figuras', 'url' => ['/figura/index']];
$this->params['breadcrumbs'][] = ['label' => 'Cuadrados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuadrado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
