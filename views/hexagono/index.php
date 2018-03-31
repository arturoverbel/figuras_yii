<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\HexagonoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hexagonos';
$this->params['breadcrumbs'][] = ['label' => 'Figuras', 'url' => ['/figura/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hexagono-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hexagono', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'radio',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
