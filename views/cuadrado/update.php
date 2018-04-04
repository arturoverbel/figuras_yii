<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cuadrado */

$this->title = 'Update Cuadrado: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Workspaces', 'url' => ['/workspace/index']];
$this->params['breadcrumbs'][] = ['label' => 'Figuras', 'url' => ['/figura/index']];
$this->params['breadcrumbs'][] = ['label' => 'Cuadrados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cuadrado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'workspaces' => $workspaces
    ]) ?>

</div>
