<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dokter */

$this->title = 'Create Dokter';
$this->params['breadcrumbs'][] = ['label' => 'Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-aqua">
                <div class="box-header">
                    <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dokter-create">

                                <?= $this->render('_form', [
                                    'model' => $model,
                                ]) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>