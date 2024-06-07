<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbObat $model */

$this->title = 'Create Tb Obat';
$this->params['breadcrumbs'][] = ['label' => 'Tb Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
