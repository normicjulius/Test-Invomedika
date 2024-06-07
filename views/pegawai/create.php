<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbPegawai $model */

$this->title = 'Create Tb Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Tb Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
