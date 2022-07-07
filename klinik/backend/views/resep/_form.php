<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Pendaftaran;
use backend\models\Dokter;

/* @var $this yii\web\View */
/* @var $model backend\models\Resep */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resep-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->dropDownList(ArrayHelper::map(Pendaftaran::find()->all(), 'id', 'nama_pasien'), [
        'prompt' => 'Pilih'
    ]) ?>

    <?= $form->field($model, 'nama_dokter')->dropDownList(ArrayHelper::map(Dokter::find()->all(), 'id', 'nama'), [
        'prompt' => 'Pilih'
    ]) ?>

    <?= $form->field($model, 'nama_obat')->textInput() ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
