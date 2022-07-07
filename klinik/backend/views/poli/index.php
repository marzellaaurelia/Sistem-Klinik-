<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\Poli;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PoliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Polis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-aqua">
                <div class="box-header">
                    <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="<?= Url::toRoute(['create']) ?>">Tambahkan Data</a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="user-index">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); 
                                ?>
                                <div class="table-responsive">

                                    <?= GridView::widget([
                                        'dataProvider' => $dataProvider,
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],

                                            'id',
                                            'nama_poli',
                                            [
                                                'class' => ActionColumn::className(),
                                                'urlCreator' => function ($action, Poli $model, $key, $index, $column) {
                                                    return Url::toRoute([$action, 'id' => $model->id]);
                                                }
                                            ],
                                        ],
                                    ]); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>