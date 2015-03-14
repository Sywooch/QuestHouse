<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$this->title = 'Quest House';

?>
<?php $this->beginPage() ?>
    <!DOCTYPE HTML>
    <html class="full">

    <head>
        <title>Traveler - Login </title>


        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>


    </head>

    <body class="full">

    <div class="global-wrap">

        <div class="full-page">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-img" style="background-image:url(img/1024x487.png);"></div>
                <div class="bg-holder-content full text-white text-center">
                    <a class="logo-holder" href="index.html">
                        <img src="img/logo-white.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                    <div class="full-center">
                        <div class="container">
                            <div class="spinner-clock">
                                <div class="spinner-clock-hour"></div>
                                <div class="spinner-clock-minute"></div>
                            </div>

                            <h2 class="mb5">Раздел на данный момент находится в разработке.</h2>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->beginBody() ?>

        <?php $this->endBody() ?>


    </div>
    </body>

    </html>


<?php $this->endPage() ?>