<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Workspace */

$this->title = 'Create Workspace';
$this->params['breadcrumbs'][] = ['label' => 'Workspaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workspace-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'figuras' => $figuras,
    ]) ?>

</div>
