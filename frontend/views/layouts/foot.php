<?php
use yii\helpers\Url;
?>
<footer id="main-footer">
    <div class="container">
        <div class="row row-wrap">
            <div class="col-md-3">
                <a class="logo" href="index.html">
                    <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title">
                </a>
                <p class="mb20">© Квестхаус, квесты в реальности в Одессе.!</p>
                <ul class="list list-horizontal list-space">
                    <li>
                        <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <h4>Рассылка</h4>
                <form>
                    <label>Введите ваш E-mail адрес</label>
                    <input type="text" class="form-control">
                    <p class="mt5"><small>*Мы не спамим</small>
                    </p>
                    <input type="submit" class="btn btn-primary" value="Подписаться">
                </form>
            </div>
            <div class="col-md-2">
                <ul class="list list-footer">
                    <li><a href="<?= Url::to(['/'])?>">Главная</a></li>
                    <li><a href="<?= Url::to(['/quests'])?>">Квесты</a></li>
                    <li><a href="<?= Url::to(['/gamespace'])?>">Антикафе</a></li>
                    <li><a href="<?= Url::to(['/gift'])?>">Сертификат</a></li>
                    <li><a href="<?= Url::to(['/franchize'])?>">Франшиза</a></li>
                    <li><a href="<?= Url::to(['/contact'])?>">Контакты</a></li>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Есть вопросы?</h4>
                <h4 class="text-color">+38-093-148-13-92</h4>
                <h4 class="text-color">+38-067-600-36-76</h4>
                <h4><a href="#" class="text-color">info@questhouse.com.ua</a></h4>
                <p></p>
            </div>

        </div>
    </div>
</footer>
