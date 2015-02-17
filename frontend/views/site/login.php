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
    <title>Traveler - Login register</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


</head>

<body class="full">

<!-- FACEBOOK WIDGET -->
<!--<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>-->
<!-- /FACEBOOK WIDGET -->
<div class="global-wrap">

    <div class="full-page">
        <div class="bg-holder full">
            <div class="bg-mask"></div>
            <div class="bg-img" style="background-image:url(img/1280x852.png);"></div>
            <div class="bg-holder-content full text-white">

                <!--<a class="logo-holder" href="site/index">
                    <img src="img/logo-white.png" alt="Image Alternative text" title="Image Title" />
                </a>-->
<?php
                $imghtml=Html::img('img/logo-white.png');
                echo Html::a($imghtml, array('site/index'),array('class' =>"logo-holder"));
?>

                <div class="full-center">
                    <div class="container">
                        <div class="row row-wrap" data-gutter="60">
                            <div class="col-md-4">
                                <div class="visible-lg">
                                    <h3 class="mb15">Welcome to Traveler</h3>
                                    <p>Ultrices lacus erat mattis nam sem porta nascetur luctus nunc litora diam ornare maecenas et phasellus molestie lorem habitant ultricies condimentum dignissim interdum erat sit praesent penatibus mattis pharetra penatibus</p>
                                    <p>Sodales amet consectetur consectetur curae placerat consectetur penatibus fusce sagittis</p>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <h3 class="mb15">Login</h3>



                                <?php $form = ActiveForm::begin(['id' => 'login-form',
                                 //   'options' => ['class' => 'form-horizontal']
                                ]); ?>
                                <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                <?= $form->field($model, 'username') ?>
                                </div>
                                <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                <?= $form->field($model, 'password')->passwordInput() ?>
                                </div>
                                <div class="form-group">
                                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                </div>
                                <?php ActiveForm::end(); ?>

                                <!--<form>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                        <label>Username or email</label>
                                        <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Password</label>
                                        <input class="form-control" type="password" placeholder="my secret password" />
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Sign in" />
                                </form>-->



                            </div>
                            <div class="col-md-4">
                                <h3 class="mb15">New To Traveler?</h3>
                                <form>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                        <label>Full Name</label>
                                        <input class="form-control" placeholder="e.g. John Doe" type="text" />
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                        <label>Emai</label>
                                        <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Password</label>
                                        <input class="form-control" type="password" placeholder="my secret password" />
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Sign up for Traveler" />
                                </form>
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