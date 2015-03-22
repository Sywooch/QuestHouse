<?php
use yii\helpers\Html;
use backend\assets\AppAsset;

AppAsset::register($this);
$this->title = 'Quest House';

?>
<?php $this->beginPage() ?>



    <!DOCTYPE HTML>
    <html lang="<?= Yii::$app->language ?>">

    <head>

        <meta charset="utf-8">
        <title>Black Label Admin</title>
        <meta name="author" content="Srinu Basava">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
        <meta name="description" content="Black Label Admin Admin UI">
        <meta name="keywords" content="Black Label Admin, Admin UI, Admin Dashboard, Srinu Basava">

        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-40301843-2', 'iamsrinu.com');
            ga('send', 'pageview');

        </script>

    </head>

    <body>

    <?php echo $this->render('//layouts/header');  ?>

    <?php $this->beginBody() ?>



    <div class="container-fluid">
        <?php echo $this->render('//layouts/panel');  ?>
        <div class="dashboard-wrapper">
            <div class="main-container">
                <?=$content ?>
            </div>
        </div>

    </div>



    <?php echo $this->render('//layouts/footer');  ?>


    <?php $this->endBody() ?>
    </body>

    </html>


<?php $this->endPage() ?>