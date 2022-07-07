<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= Yii::$app->name ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="hold-transition login-page">
    <?php $this->beginBody() ?>

    <div class="login-box" style="margin-top: 100px;">
        <div class="login-box-body">
            <br>
            <div style="text-align:center;font-size:20px">Sistem Klinik</div>
            <p class="login-box-msg"></p>
            <?= $content ?>
            <div class="row">
                <div class="col-lg-12">
                    <?= Alert::widget() ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </script>
</body>

</html>
<?php $this->endPage() ?>