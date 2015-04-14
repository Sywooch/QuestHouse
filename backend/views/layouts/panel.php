<?php
use yii\helpers\Url;
?>

<style>
    #mainnav ul li {
        padding-bottom: 20px;
    }
    #mainnav ul li a {
        color: #ffffff;
    }
</style>

<div id="mainnav" class="hidden-phone hidden-tablet">
    <ul>
        <li>
            <a href="<?=Url::toRoute('/')?>">
                <div class="icon">
                    <i class="fa fa-home fa-3x"></i>
                </div>
                <p>Главная</p>
            </a>
        </li>
        <li>
            <a href="<?=Url::toRoute('/quests')?>">
                <div class="icon">
                    <i class="fa fa-key fa-3x"></i>
                </div>
                <p>Квесты</p>
            </a>
        </li>
        <li>
            <a href="<?=Url::toRoute('/user')?>">
                <div class="icon">
                    <i class="fa fa-users fa-3x"></i>
                </div>
                <p>Users</p>
            </a>
        </li>
        <li>
            <a href="<?=Url::toRoute('/booking')?>">
                <div class="icon">
                    <i class="fa fa-calendar fa-3x"></i>
                </div>
                <p>Booking</p>
            </a>
        </li>
        <li>
            <a href="<?=Url::toRoute('/slider')?>">
                <div class="icon">
                    <i class="fa fa-calendar fa-3x"></i>
                </div>
                <p>Main Slider</p>
            </a>
        </li>
    </ul>
</div>