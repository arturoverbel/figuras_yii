<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Triangulo */

$this->title = 'Create Triangulo';
$this->params['breadcrumbs'][] = ['label' => 'Figuras', 'url' => ['/figura/index']];
$this->params['breadcrumbs'][] = ['label' => 'Triangulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="triangulo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
