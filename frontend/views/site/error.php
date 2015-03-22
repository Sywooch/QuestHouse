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
    <title>Traveler - 404</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>

    <?php $this->head() ?>

</head>

<body class="full">

<!-- FACEBOOK WIDGET -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- /FACEBOOK WIDGET -->
<div class="global-wrap">

    <div class="full-page">
        <div class="bg-holder full">


            <div class="bg-blur" style="background: url('img/backgrounds/bg2.png') no-repeat; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  background-size: cover;"></div>
            <div class="bg-holder-content full text-white">
                <div class="full-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <p class="text-hero">404</p>
                                <h1>Page is not found</h1>
                            </div>
                        </div>
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