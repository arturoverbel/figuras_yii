<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Workspace */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Workspaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workspace-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'limiteFiguras'
        ],
    ]) ?>


    <h2>Figuras</h2>
    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <?php
                foreach ($model->figuras as $item){
                    echo '<tr><td>' . $item['discr'] . "</td><td>".Html::a($item['id'], Url::to(['figura/view', 'id' => $item['id'] ]))."</td></tr>";

                }
            ?>
        </tbody>
    </table>


</div>
