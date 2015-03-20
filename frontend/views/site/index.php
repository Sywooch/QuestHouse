<?php
use yii\helpers\Url;
?>
<a href="<?= Url::to(['site/logout'])?>" data-method="post">Logout</a>
<div class="gap"></div>

<div class="container">
    <div class="post-inner" style="background: rgba(54, 25, 25, .2);">
        <div style="text-align:center; padding: 10px;">
            <em style="color: white; font-size: 18px;">
                Квестхаус - это уникальное игровое пространство и проект типа "Выбраться из команты" в Одессе. У нас вы можете пройти комнаты-квесты, сыграть в мафию и настольные игры, выпить кофе и просто побыть в хорошей компании в нашем антикафе.
            </em>
        </div>
    </div>
</div>

<div class="gap"></div>

<h2 style="text-align: center; color: #ffffff;">Наши квесты</h2>

<!--<div class="container" style="background: rgba(54, 25, 25, .2);">-->
<div style="background: rgba(54, 25, 25, .2); margin: 1px;" >
        <div id="popup-gallery" style="margin: 30px;">
            <div class="row row-col-gap">
                <div class="col-md-4" style="margin-top: 30px;">
                    <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                        <img src="img/800x600.png" alt="Image Alternative text" title="Gaviota en el Top"><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                    </a>
                </div>
                <div class="col-md-4" style="margin-top: 30px;">
                    <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                        <img src="img/800x600.png" alt="Image Alternative text" title="Sydney Harbour"><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                    </a>
                </div>
                <div class="col-md-4" style="margin-top: 30px;">
                    <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                        <img src="img/800x600.png" alt="Image Alternative text" title="Street"><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                    </a>
                </div>

            </div>
        </div>


    <div class="gap"></div>

    <h2 style="text-align: center; color: #ffffff;">Наши квесты</h2>
    <div style="width: 220px; margin:auto;">
        <input class="date-pick form-control" id="quest-date" data-date-format="DD d MM yyyy" type="text" />
    </div>

    <div class="gap"></div>
    <div id="booking-table">
        <?=$partial?>
    </div>



</div>


<div class="gap"></div>

<div class="container">
    <div class="post-inner" style="background: rgba(54, 25, 25, .2);">
        <div style="text-align:center; padding: 10px;">

            <em style="color: white; font-size: 18px;">
                Эскейп-рум (квест в реальности) — это интеллектуальный вид игр, в котором игроков запирают в помещении, из которого они должны выбраться за время, ища предметы и решая головоломки. Некоторые представители жанра также включают в себя детективный или иной сюжет, чтобы погрузить игроков в уникальную атмосферу. Как выбраться из комнаты? Включите все свое внимание, найдите подсказки, ключи и загадки, поймите что к чему и выйдите из команты за 60 минут!
            </em>
        </div>
    </div>
</div>



<div class="gap"></div>



<div class="container">
    <div class="row" data-gutter="80">

        <div class="col-md-4">
            <!-- START TESTIMONIAL -->
            <div class="testimonial testimonial-color">
                <div class="testimonial-inner" style="background-color: #5b84aa;">
                    <blockquote>
                        <p>Осторожно: Решение логических головоломок, входящий в состав квестов может привести к улучшению мыслительных способностей!</p>
                    </blockquote>
                </div>
                <div class="testimonial-author">
                    <!-- <img src="img/50x50.png" alt="Image Alternative text" title="Ana 29" /> -->
                    <i class="fa fa-cogs box-icon-large box-icon-left box-icon-info box-icon-to-inverse-red box-icon-border-dashed animate-icon-tada round"></i>
                    <p class="testimonial-author-name">
                    <h4 style="color:white;"><em>Логика</em></h4>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- START TESTIMONIAL -->
            <div class="testimonial testimonial-color">
                <div class="testimonial-inner" style="background-color: #5b84aa;">
                    <blockquote>
                        <p>Кроме того, берегитесь получения удовольствия от командного решения проблем и выброса эндорфинов от понимания, что код все таки правильный.</p>
                    </blockquote>
                </div>
                <div class="testimonial-author">
                    <!-- <img src="img/50x50.png" alt="Image Alternative text" title="Ana 29" /> -->
                    <i class="fa fa-users box-icon-large box-icon-left box-icon-info box-icon-to-inverse-red box-icon-border-dashed animate-icon-tada round"></i>
                    <p class="testimonial-author-name">
                    <h4 style="color:white;"><em>Весело и дружно</em></h4>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- START TESTIMONIAL -->
            <div class="testimonial testimonial-color">
                <div class="testimonial-inner" style="background-color: #5b84aa;">
                    <blockquote>
                        <p>Минздрав также заверяет: <br>Ни в коем случае не проходите квест, если не хотите улучшить свою сноровку и внимательность к деталям!</p>
                    </blockquote>
                </div>
                <div class="testimonial-author">
                    <!-- <img src="img/50x50.png" alt="Image Alternative text" title="Ana 29" /> -->
                    <i class="fa  fa-exclamation box-icon-large box-icon-left box-icon-info box-icon-to-inverse-red box-icon-border-dashed animate-icon-tada round"></i>
                    <p class="testimonial-author-name">
                    <h4 style="color:white;"><em>Внимание</em></h4>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="gap"></div>