<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\search\FiguraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Figuras';
$this->params['breadcrumbs'][] = ['label' => 'Workspace', 'url' => ['workspace/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="figura-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'printr',
                'label'=>'Resumen',
                'value' => function ($model) {
                    return  $model->printr();
                }
            ],
            [
                'attribute'=>'area',
                'label'=>'Area',
                'value' => function ($model) {
                    return  $model->getArea();
                }
            ],
            [
                'attribute'=>'perimetro',
                'label'=>'Perímetro',
                'value' => function ($model) {
                    return  $model->getPerimetro();
                }
            ],
            [
                'attribute'=>'workspace',
                'format' => 'raw',
                'value' => function ($model) {
                    return  Html::a($model->workspace, Url::to(['workspace/view', 'id' => $model->workspace ]));
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p>
        <h2>Crear Figura</h2>
        <?= Html::a('Create Cuadrado', ['/cuadrado/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Triángulo', ['/triangulo/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Hexágono', ['/hexagono/create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
