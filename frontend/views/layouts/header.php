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
use common\models\User;
?>

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

<?php if (!Yii::$app->user->isGuest){ ?>
<div class="top-user-area clearfix" style="z-index: 1;">
    <ul class="top-user-area-list list list-horizontal list-border">
        <li class="top-user-area-avatar">
            <a href="<?= Url::to(['profile/bookings'])?>">
                Личный кабинет <?=User::getUserName(Yii::$app->user->id)['username']?></a>
        </li>
        <li><a href="<?= Url::to(['site/logout'])?>" data-method="post">Logout</a>
        </li>
    </ul>
</div>
<?php } else { ?>
<div class="top-user-area clearfix" style="z-index: 1;">
    <ul class="top-user-area-list list list-horizontal list-border">
        <li><a href="<?= Url::to(['login'])?>">Login</a></li>
        <li><a href="<?= Url::to(['signup'])?>">Register</a></li>
    </ul>
</div>
<?php } ?>

<div style="position: absolute; top : 0; width: 100%;">
    <div class="col-md-3"></div>
    <div class="col-md-3" style="z-index: 2;">
        <div id='top-nav' style="margin-top:15px;">
            <ul  id="slimmenu" style="width: 100%;">
                <li><a href="<?=Url::to(['/'])?>">Главная</a></li>
                <li><a href="<?=Url::to(['/quests'])?>">Квесты</a></li>
                <li><a href="<?=Url::to(['/gamespace'])?>">Антикафе</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-3" style="z-index: 2; margin-left: 5%;">
        <div id='top-nav' style="margin-top:15px;">
            <ul  id="slimmenu" style="width: 100%;">
                <li><a href="<?= Url::to(['/gift'])?>">Сертификат</a></li>
                <li><a href="<?= Url::to(['/franchize'])?>">Франшиза</a></li>
                <li><a href="<?= Url::to(['/contact'])?>">Контакты</a></li>
            </ul>
        </div>
    </div>
</div>

<div>
    <a href="<?= Url::to(['/'])?>">
        <img class="img-responsive" style="width: 500px; position: absolute;margin: auto;top: 0;left: 0;right: 0;z-index: 1;" src="http://questhouse.com.ua/images/logo.png"/>
    </a>
</div>