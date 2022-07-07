<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendaftaran */

$this->title = $model->no_pendaftaran;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="pendaftaran-view">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Update', ['update', 'no_pendaftaran' => $model->no_pendaftaran], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'no_pendaftaran' => $model->no_pendaftaran], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'no_pendaftaran',
                'spesialis',
                'poli',
                'nama_pasien',
                'tanggal_daftar',
                'jenis_kelamin',
                'alamat',
                'no_hp',
            ],
        ]) ?>

    </div>
</div>