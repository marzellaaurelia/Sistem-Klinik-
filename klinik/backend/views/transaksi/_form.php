<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Pendaftaran;
use backend\models\Pegawai;

/* @var $this yii\web\View */
/* @var $model backend\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->dropDownList(ArrayHelper::map(Pendaftaran::find()->all(), 'id', 'nama_pasien'), [
        'prompt' => 'Pilih'
    ]) ?>

    <?= $form->field($model, 'nama_pegawai')->dropDownList(ArrayHelper::map(Pegawai::find()->all(), 'id', 'nama'), [
        'prompt' => 'Pilih'
    ]) ?>

    <?= $form->field($model, 'biaya_pendaftaran')->textInput(['readonly' => true, 'value' => $model->isNewRecord ? '15000' : $model->some_field]) ?>

    <?= $form->field($model, 'biaya_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        'Lunas' => 'Lunas',
    ], [
        'prompt' => 'Belum Bayar'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
