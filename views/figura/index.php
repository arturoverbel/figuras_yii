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

    <p>
        <?= Html::a('Create Figura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'numLados',
            'discr',
            'lado',
            'base',
            //'altura',
            //'hipotenusa',
            //'radio',
            //'workspace',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
