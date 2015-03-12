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
            <div class="bg-img" style="background-image:url(img/1280x852.png);"></div>
            <div class="bg-holder-content full text-white">

<?php
                $imghtml=Html::img('img/logo-white.png');
                echo Html::a($imghtml, array('/'),array('class' =>"logo-holder"));
?>

                <style>
                    p.help-block.help-block-error {
                        color: red;
                        font-size: 16px;
                    }
                </style>
                <div class="full-center">
                    <div class="container">
                        <div class="row row-wrap" data-gutter="60" style="width:300px; margin: auto;">

                            <!--<div class="col-md-4">-->

                                <h3 class="mb15">Login</h3>

                                <?php $form = ActiveForm::begin(['id' => 'login-form',
                                ]); ?>
                                <input style="display:none">
                                <input type="password" style="display:none">

                            <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                <?= $form->field($model, 'username')->input('text',array('value'=>'', 'placeholder'=>"Enter UserName", 'autocomplete'=>"off")) ?>
                                </div>
                                <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                <?= $form->field($model, 'password')->passwordInput()->input('password',array('value'=>'', 'placeholder'=>"Enter Password", 'autocomplete'=>"off")) ?>
                                </div>
                                <div class="form-group">
                                    <?= Html::submitButton('Login', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                                    <?= Html::a('Register Page',array('/site/signup'),['class' => 'btn btn-info', 'name' => 'login-button']); ?>
                                </div>
                                <?php ActiveForm::end(); ?>

                            <!--</div>-->

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