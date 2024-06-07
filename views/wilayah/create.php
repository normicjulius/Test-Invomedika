<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbWilayah $model */

$this->title = 'Create Wilayah';
$this->params['breadcrumbs'][] = ['label' => 'Tb Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-wilayah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
