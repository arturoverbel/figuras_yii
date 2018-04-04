<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\CuadradoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = ['label' => 'Workspaces', 'url' => ['/workspace/index']];
$this->params['breadcrumbs'][] = ['label' => 'Figuras', 'url' => ['/figura/index']];
$this->title = 'Cuadrados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuadrado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cuadrado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lado',
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
