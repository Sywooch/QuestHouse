<?php
/**
 * Created by PhpStorm.
 * User: akel
 * Date: 3/18/15
 * Time: 9:43 PM
 */
?>

<?php
use yii\helpers\Url;
?>
<!--<a href="<?/*= Url::to(['site/logout'])*/?>" data-method="post">Logout</a>-->


<header id="main-header" style="border: 0;">

    <style>

        #top-nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #top-nav  li {
            display: inline;
            margin: auto;
        }

        #top-nav ul li a {
            color: #ffffff;
            font-size: 16px;
            padding: 5px;

        }

    </style>

    <div class="container-fluid">

        <div class="row inline-block-row">

                    <div class="col-sm-4 col-md-4">
                            <div /*class="nav"*/ id='top-nav' style="margin-top: 18%; width:100%;">
                                <ul  id="slimmenu" style="width: 100%; text-align:center; float: right;">
                                    <li><a href="<?= Url::to(['/'])?>">Главная</a></li>
                                    <li><a href="<?= Url::to(['/quests'])?>">Квесты</a></li>
                                    <li><a href="<?= Url::to(['gamespace'])?>">Антикафе</a></li>
                                </ul>
                            </div>
                        </div>
                    <div class="col-sm-4 col-md-4">
                        <img class="img-responsive" src="http://questhouse.com.ua/images/logo.png"/>
                    </div>
            <div class="col-sm-4 col-md-4">
                <!--<div class="nav">-->
                <div /*class="nav"*/ id='top-nav' style="margin-top: 18%; width:100%;">
                <ul  id="slimmenu" style="width: 100%; text-align:center; float: right;">
                        <li><a href="<?= Url::to(['gift'])?>">Сертификат</a></li>
                        <li><a href="<?= Url::to(['franchize'])?>">Франшиза</a></li>
                        <li><a href="<?= Url::to(['contact'])?>">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</header>