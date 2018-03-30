<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hexagono */

$this->title = 'Create Hexagono';
$this->params['breadcrumbs'][] = ['label' => 'Figuras', 'url' => ['/figura/index']];
$this->params['breadcrumbs'][] = ['label' => 'Hexagonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hexagono-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
