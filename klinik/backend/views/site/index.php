<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="container">

    <div class="site-index">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-aqua">
                    <div class="box-body">
                        <div class="box-widget widget-user">
                            <?php if (Yii::$app->user->identity->role == 'Admin') : ?>
                                <div class="box-header">
                                    <center>
                                        <h1 class="box-title">Sistem Informasi Klinik</h1>
                                    </center>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-red">
                                            <div class="inner">
                                                <h3>01</h3>
                                                <p>Pendaftaran</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/pendaftaran']) ?>" class="small-box-footer">Pendaftaran <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-yellow">
                                            <div class="inner">
                                                <h3>02</h3>
                                                <p>Transaksi</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/transaksi']) ?>" class="small-box-footer">Transaksi <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div><!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-green">
                                            <div class="inner">
                                                <h3>03</h3>
                                                <p>Data Obat</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/obat']) ?>" class="small-box-footer">Data Obat <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div><!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-purple">
                                            <div class="inner">
                                                <h3>04</h3>
                                                <p>Data Poli</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/poli']) ?>" class="small-box-footer">Data Poli<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div><!-- ./col -->
                                </div>
                            <?php endif; ?>

                            <?php if (Yii::$app->user->identity->role == 'Pegawai') : ?>
                                <div class="box-header">
                                    <center>
                                        <h1 class="box-title">Sistem Informasi Klinik</h1>
                                    </center>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-red">
                                            <div class="inner">
                                                <h3>01</h3>
                                                <p>Pendaftaran</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/pendaftaran']) ?>" class="small-box-footer">Pendaftaran <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-yellow">
                                            <div class="inner">
                                                <h3>02</h3>
                                                <p>Transaksi</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/transaksi']) ?>" class="small-box-footer">Transaksi <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div><!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-green">
                                            <div class="inner">
                                                <h3>03</h3>
                                                <p>Data Obat</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/obat']) ?>" class="small-box-footer">Data Obat <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div><!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-purple">
                                            <div class="inner">
                                                <h3>04</h3>
                                                <p>Data Poli</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/poli']) ?>" class="small-box-footer">Data Poli<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div><!-- ./col -->
                                </div>
                            <?php endif; ?>

                            <?php if (Yii::$app->user->identity->role == 'Dokter') : ?>
                                <div class="box-header">
                                    <center>
                                        <h1 class="box-title">Sistem Informasi Klinik</h1>
                                    </center>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-red">
                                            <div class="inner">
                                                <h3>01</h3>
                                                <p>Resep</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/resep']) ?>" class="small-box-footer">Pemberian Resep <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (Yii::$app->user->identity->role == 'Apoteker') : ?>
                                <div class="box-header">
                                    <center>
                                        <h1 class="box-title">Sistem Informasi Klinik</h1>
                                    </center>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-red">
                                            <div class="inner">
                                                <h3>01</h3>
                                                <p>Obat</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/obat']) ?>" class="small-box-footer">Data Obat <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-yellow">
                                            <div class="inner">
                                                <h3>02</h3>
                                                <p>Resep</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="<?= Url::toRoute(['/resep']) ?>" class="small-box-footer">Cek Resep <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div><!-- ./col -->
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>