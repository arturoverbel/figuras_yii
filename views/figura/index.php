<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\FiguraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Figuras';
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
            'numLados',
            'discr',
            //'workspace',

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
