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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Error 404 | Vaigasai Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src='assets/plugins/common/modernizr.js'></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/style-default.css" rel="stylesheet">

</head>
<body>
<div id="wrapper">
    <div class="padding-md" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                <div class="h5">Oops, This Page Could Not Be Found!</div>
                <h1 class="m-top-none error-heading">404</h1>

                <h4>Search Our Website</h4>
                <div>Can't find what you need?</div>
                <div class="m-bottom-md">Try searching for the page here</div>
                <div class="input-group m-bottom-md">
                    <input type="text" class="form-control input-sm" placeholder="search here...">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
                            </span>
                </div><!-- /input-group -->
                <a class="btn btn-success m-bottom-sm" href="index-2.html"><i class="fa fa-home"></i> Back to Dashboard</a>
                <a class="btn btn-success m-bottom-sm" href="ext-contact.html"><i class="fa fa-envelope"></i> Contact Us</a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.padding-md -->
</div><!-- /wrapper -->

<!-- Jquery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
