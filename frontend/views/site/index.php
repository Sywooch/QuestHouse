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
<!--</div>-->


<div class="gap"></div>

    <div style="width: 99%;">

        <h2 style="text-align: center; color: #ffffff;">Наши квесты</h2>
        <div class="gap"></div>

        <?php /*for ($j=0;$j<3;$j++): */?><!--

        <div class="demo-grid1" >
            <div class="row" style="margin-bottom: 0;">
                <div class="col-md-2">
                    <div style="height: 40px; padding: 10px; text-align: center; color: #ffffff;">Убийство моих снов</div>
                </div>

                <?php /*for ($i=0;$i<10;$i++): */?>
                <div class="col-md-1" style="background: rgba(180, 160, 180, .6); margin-left: 5px;">
                    <div style="height: 45px; color: #ffffff; text-align: center; padding: 10px;">12:52</div>
                </div>
                <?php /*endfor; */?>


            </div>
        </div>
            <div class="row" id="sub-grid1">

                <div class="col-md-2">
                    <div></div>
                </div>

                    <?php /*for ($i=0;$i<10;$i++): */?>
                        <div class="col-md-1" style=" margin-top: 10px;">
                            <div style="height: 25px;"></div>
                        </div>
                    <?php /*endfor; */?>

            </div>

        --><?php /*endfor; */?>


        <style >
            .news-list-container {
                overflow-x: auto;
                overflow-y: hidden;
            }

            #container {
                /*height: 187px;*/
                height: 60px;
                min-width: 1176px;
                /*width: auto;*/
            }

            .news-list-item {
                /*border: 1px solid #E5E5E5;*/
                float: left;
                /*height: 175px;*/
                color: white;
                padding: 5px;
                /*width: 184px;*/
            }
        </style>


        <div id="tableholder" style="width: auto; margin-left: 15px;">
            <div id="sidebar" style="float: left; height: auto; width: 100px;">
                <?php $start = new DateTime();
                for ($i=0; $i<count($questTimeModel);$i++): ?>
                    <div style="color: #ffffff; height: 60px; display: block; position: relative;">

                        <?=Date('d',$start->getTimestamp());?>
                        <?=Date('F',$start->getTimestamp());?>
                        <br>
                        <?=Date('l',$start->getTimestamp());?>
                        <?php date_add($start, date_interval_create_from_date_string('1 day')); ?>

                    </div>
                <?php endfor; ?>


            </div>


            <?php
            echo '<div class="news-list-container">';

            foreach ($questTimeModel as $key=>$item):
                echo '<div id=container class="quest_booking" name='.$model['id'].' >';

                usort($item, function ($item1, $item2) {
                    return number_format((float)$item1['time_value']) -number_format((float) $item2['time_value']);
                });


                for ($j = 0; $j < count($item); $j++): ?>

                    <div style="width: 7.66666663%; float: left; background: rgba(180, 160, 180, .6); margin-left: 5px;" id='<?=array_values($item)[$j]['d'] ?>' style='padding-top:0; padding-bottom: 0; height: 60px;'>
                        <?php if (array_values($item)[$j]['id']){
                            ?>
                            <div style="width: 50px; text-align: center; background-color: #d3d3d3; margin-right: 10px;  border: 1px solid;
    border-radius: 5px; color: #808080; font-weight: bolder;">
                                <p style="padding: 0; color: #808080; margin: 0;"><?=number_format((float)array_values($item)[$j]['time_value'], 2, '.', ''); ?></p>
                            </div>
                        <?php
                        } else {

                            ?>
                            <!--<div class="timeContainer" style="width: 50px; text-align: center; background-color: #d3d3d3; margin-right: 10px;  border: 1px solid;
    border-radius: 5px; color: #a9a9a9; font-weight: bolder;">-->
                                <p style="padding: 0; color: #000000; margin: 0;"><?=number_format((float)array_values($item)[$j]['time_value'], 2, '.', ''); ?></p>
                            <!--</div>-->
                            <div style="width: 50px;font-size: 12px; text-align: center;"><?=array_values($item)[$j]['price']?> UAH</div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                endfor;
                echo "</div>";
            endforeach;
            ?>
        </div>




    </div>
    </div>


</div>




<div class="container">
    <div class="post-inner" style="background: rgba(54, 25, 25, .2);">
        <div style="text-align:center;">
            <div class="gap"></div>
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