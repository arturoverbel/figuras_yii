<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\WorkspaceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Workspaces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workspace-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'nombre',
            'limiteFiguras',

            [
                'attribute' => 'figuras',
                'filter' => false,
                'format' => 'raw',
                'value' => function ($model) {
                    $model->init();
                    $print = '<ul>';
                    foreach ($model->figuras as $fig){
                        $print .= '<li>'.$fig->print.'</li>';
                    }
                    $print .= '</ul>';
                    return  $print;
                },
            ],
            [
                'label' => 'Área Total',
                'filter' => false,
                'format' => 'raw',
                'value' => function ($model) {
                    $area = 0;
                    foreach ($model->figuras as $fig){
                        $area += $fig->getArea();
                    }
                    return  $area;
                },
            ],
            [
                'label' => 'Apotema Total',
                'filter' => false,
                'format' => 'raw',
                'value' => function ($model) {
                    $apotema = 0;
                    foreach ($model->figuras as $fig){
                        if( $fig->discr == 'hexagono')
                            $apotema += $fig->apotema;
                    }
                    return  $apotema;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p>
        <?= Html::a('Create Workspace', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <p>
        <?= Html::a('Listar Figuras', ['figura/index'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
