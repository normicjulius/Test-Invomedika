<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbRiwayat $model */

$this->title = 'Create Tb Riwayat';
$this->params['breadcrumbs'][] = ['label' => 'Tb Riwayats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-riwayat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
