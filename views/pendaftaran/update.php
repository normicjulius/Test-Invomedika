<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbPendaftaran $model */

$this->title = 'Update Pendaftaran: ' . $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tb Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pasien, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-pendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
