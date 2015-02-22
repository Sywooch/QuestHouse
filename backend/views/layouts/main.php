<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
/*use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;*/

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

<?php /*$this->beginPage() */?><!--
<!DOCTYPE html>
<html lang="<?/*= Yii::$app->language */?>">
<head>
    <meta charset="<?/*= Yii::$app->charset */?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?/*= Html::csrfMetaTags() */?>
    <title><?/*= Html::encode($this->title) */?></title>
    <?php /*$this->head() */?>
</head>
<body>
    <?php /*$this->beginBody() */?>
    <div class="wrap">
        <?php
/*            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];



                                $menuItems = [
                                    ['label' => 'Home', 'url' => ['/site/index']],
                                    ['label' => 'About', 'url' => ['/site/about']],
                                    ['label' => 'Contact', 'items' =>[
                                        ['label' => 'User', 'url' => ['/user/index']],
                                    ]]
                                ];


            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        */?>

        <div class="container">
        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>
        <?/*= $content */?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>
        <p class="pull-right"><?/*= Yii::powered() */?></p>
        </div>
    </footer>

    <?php /*$this->endBody() */?>
</body>
</html>
--><?php /*$this->endPage() */?>


<?php $this->beginPage(); ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Index | Vaigasai Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
        <!--<script src='assets/plugins/common/modernizr.js'></script>-->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <link href="assets/plugins/jquery-ui/jquery.ui.1.10.2.ie.css" rel="stylesheet">
        <![endif]-->

        <!--<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <link href="assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">-->

        <!--<link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/style-default.css" rel="stylesheet"> -->

    </head>

    <body>
    <?php $this->beginBody() ?>
    <div id="wrapper">


        <!-----------------------------------------PANEL BEGIN----------------------------------------------------->
        <?php echo $this->render('//layouts/panel');  ?>
        <!-----------------------------------------PANEL END----------------------------------------------------->

        <div id="main-container">

            <!-----------------------------------------BREADCRUMBS BEGIN----------------------------------------------------->
            <?php echo $this->render('//layouts/breadcrumbs');  ?>
            <!-----------------------------------------BREADCRUMBS END----------------------------------------------------->

            <!-----------------------------------------CONTENT BEGIN----------------------------------------------------->
                <?= $content ?>
            <!-----------------------------------------CONTENT END----------------------------------------------------->
        </div><!-- /main-container -->

        <footer>
            <!-----------------------------------------FOOTER BEGIN----------------------------------------------------->
            <?php echo $this->render('//layouts/footer');  ?>
            <!-----------------------------------------FOOTER END----------------------------------------------------->
        </footer>
    </div><!-- /wrapper -->

    <a href="#" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
    <?php $this->endBody(); ?>
    <!-- Jquery -->
    <script>
        $(function() {
            $(document).ready(function () {
                App.init();
                Dashboard.init();
            });
        });
    </script>

    </body>
</html>
<?php $this->endPage(); ?>