<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Provinsi */

$this->title = 'Ubah Data Provinsi: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Provinsi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box-body no-padding">

    <?= $this->render('_form-update', [
        'model' => $model,
    ]) ?>

</div>
