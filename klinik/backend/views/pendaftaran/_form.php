<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use backend\models\Dokter;
use backend\models\Poli;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'spesialis')->dropDownList(ArrayHelper::map(Dokter::find()->all(), 'id', 'spesialis'), [
        'prompt' => 'Pilih'
    ]) ?>

    <?= $form->field($model, 'poli')->dropDownList(ArrayHelper::map(Poli::find()->all(), 'id', 'nama_poli'), [
        'prompt' => 'Pilih'
    ]) ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_daftar')->widget(
        DatePicker::className(),
        [
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ]
    ) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([
        'Laki-laki' => 'Laki-laki',
        'Perempuan' => 'Perempuan',
    ], [
        'prompt' => 'Pilih'
    ]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>