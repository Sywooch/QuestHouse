<?php
use yii\helpers\Html;
use yii\helpers\Url;
/*use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;*/
use frontend\assets\AppAsset;
/*use frontend\widgets\Alert;*/

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
$this->title = 'Quest House';

?>
<?php $this->beginPage() ?>



<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<html>

<head>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>

<body>

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
    <header id="main-header" style="height: 152px;">
        <div class="header-top">

            <div class="container">

                <?php
                if (Yii::$app->user->isGuest) { ?>
                <div class="col-md-4" style="float: right;">
                    <div class="top-user-area clearfix">
                        <ul class="top-user-area-list list list-horizontal list-border">
                            <li class="top-user-area-avatar">
                                <?php echo Html::a('Login to account',array('/site/login')); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                    <?php } else {?>

                    <div class="col-md-4" style="float: right;">
                        <div class="top-user-area clearfix">
                            <ul class="top-user-area-list list list-horizontal list-border">
                                <li class="top-user-area-avatar">

                                    <!--<a href="user-profile.html">
                                            <img class="origin round" src="img/40x40.png" alt="Image Alternative text" title="AMaze" />
                                            <?/*=Yii::$app->user->identity->username;*/?>
                                        </a>-->

                                    <?php
                                    $imghtml=Html::img('img/40x40.png',array('class' =>"origin round",'alt'=>"Image Alternative text",'title'=>"AMaze"));
                                    echo Html::a($imghtml, array('site/profile'));
                                    ?>


                                </li>
                                <li>
                                    <!--<a href="#">Sign Out</a>-->
                                    <?=Html::a('Sign Out', ['site/logout'],
                                        [
                                            //                                          'class' => 'btn btn-danger',
                                            'data' => [
//                                                'confirm' => 'Are you sure you want to delete this item?',
                                                'method' => 'post',
                                            ],
                                        ])
                                    ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <?php }?>

                <div style="width: 300px; height: 100px;

                display: block;
                margin: auto;">
                <img src="http://questhouse.com.ua/images/logo.png"  >
                    </div>
                <div class="row">



                        <!--<a class="logo" href="site/index">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>-->


                    <!--<div class="col-md-3 col-md-offset-2">
                        <form class="main-header-search">
                            <div class="form-group form-group-icon-left">
                                <i class="fa fa-search input-icon"></i>
                                <input type="text" class="form-control">
                            </div>
                        </form>
                    </div>-->

                    <style>

                        ul.slimmenu li.active > a, ul.slimmenu li:hover > a {
                            font-family: 'Poiret One', cursive;
                            font-size: 25px;
                            margin: 15px;

                            padding:0;
                            font-weight:300;
                            color: #f5f5f5;
                        }

                    </style>

                    <div class="col-md-20">
                        <div class="nav" style="margin-top: -15px; width: 100%">
                            <div style="float: left;">
                                <ul class="slimmenu" id="slimmenu">
                                    <li class="active">
                                        <?php
                                        echo Html::a("Главная",array('/'));
                                        ?>
                                    </li>
                                    <li class="active">
                                        <?php
                                            echo Html::a("Квесты",array('/site/quests'));
                                        ?>

                                    </li>
                                    <li class="active">
                                        <?php
                                            echo Html::a("Антикафе",array('/site/gamespace'))
                                        ?>
                                    </li>
                                </ul>

                            </div>
                                <div style="float: right;">
                                    <ul class="slimmenu" id="slimmenu">
                                        <li class="active">
                                            <?php
                                                echo Html::a("Сертификат",array('/site/gift'))
                                            ?>
                                        </li>
                                        <li class="active">
                                            <?php
                                                echo Html::a("Франшиза",array('/site/franchize'));
                                            ?>
                                        </li>
                                        <li class="active">
                                            <?php
                                            echo Html::a("Контакты",array('/site/contact'));
                                            ?>
                                        </li>
                                    </ul>

                                </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container">


            <!-----------------------------------------NAV BAR BEGIN----------------------------------------------------->
            <?php echo $this->render('//layouts/nav');  ?>
            <!-----------------------------------------NAV BAR END----------------------------------------------------->
        </div>

    </header>

    <?php $this->beginBody() ?>

    <?= $content ?>

    <?php $this->endBody() ?>



    <!-----------------------------------------FOOTER BEGIN ----------------------------------------------------->
    <?php echo $this->render('//layouts/foot');  ?>
    <!-----------------------------------------FOOTER END ----------------------------------------------------->

</div>
</body>

</html>


<?php $this->endPage() ?>