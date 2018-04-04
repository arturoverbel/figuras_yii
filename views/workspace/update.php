<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Workspace */

$this->title = 'Update Workspace: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Workspaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workspace-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'figuras' => $figuras,
    ]) ?>

</div>
