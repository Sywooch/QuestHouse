


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
echo Html::a($imghtml, array('/'),array('class' =>"logo-holder"));
?>

                <div class="full-center">
                    <div class="container">
                        <div class="row row-wrap" data-gutter="60" style="width:300px; margin: auto;">


                                <h3 class="mb15">Login</h3>
                            <style>
                                p.help-block.help-block-error {
                                    color: red;
                                    font-size: 16px;
                                }
                            </style>
                                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                <input style="display:none">
                                <input type="password" style="display:none">

                            <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                <?= $form->field($model, 'username')->input('text',array('placeholder'=>"Enter UserName", 'autocomplete'=>"off")) ?>
                                </div>
                            <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                <?= $form->field($model, 'email')->input('email',array('placeholder'=>"Enter UserMail", 'autocomplete'=>"off")) ?>
                                </div>
                            <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                <?= $form->field($model, 'password')->passwordInput()->input('password',array('placeholder'=>"Enter Password", 'autocomplete'=>"off")) ?>
                                </div>
                                                <div class="form-group">
                                                    <?= Html::submitButton('Signup', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                                                    <?= Html::a('Login Page',array('/site/login'),['class' => 'btn btn-info', 'name' => 'login-button']); ?>
                                                </div>
                                <?php ActiveForm::end(); ?>



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