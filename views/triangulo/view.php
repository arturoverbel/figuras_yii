<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Triangulo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Figuras', 'url' => ['/figura/index']];
$this->params['breadcrumbs'][] = ['label' => 'Triangulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="triangulo-view">

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
            'base',
            'altura',
            'hipotenusa',

        ],
    ]) ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'area',
                'label'=>'Area',
                'filter' => false,
                'value' => function ($model) {
                    return  $model->getArea();
                }
            ],
            [
                'attribute'=>'perimetro',
                'label'=>'Perímetro',
                'filter' => false,
                'value' => function ($model) {
                    return  $model->getPerimetro();
                }
            ],
        ],
    ]) ?>

</div>
