<?php
/*print_r($imagesModel);
*/?>
<style >
    .news-list-container {
        overflow-x: auto;
        overflow-y: hidden;
    }

    #container {
        /*height: 187px;*/
        height: 60px;
        width: 1176px;
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


<div class="top-area show-onload" style="margin-bottom: 25px;">
    <div style="position: absolute; color: #f5f5f5; z-index: 1; bottom: 5%; left: 5%;">
        <h2 style="color: #f5f5f5;">Убийство в дублине</h2>
        <div style="width:350px;"><h5 style="color: #f5f5f5;">Убийство в дублинеУбийство в дублинеУбийство в дублинеУбийство в дублинеУбийство в дублинеУбийство в дублине</h5>
            </div>

    </div>

    <div style="top: 2%; right: 2%; position: absolute; z-index: 1; font-size: 25px; color: #f5f5f5; width: auto;">
        <p><?=$place_info['owner_address']?></p>
        <p><?=$place_info['owner_mail']?></p>
        <p><?=$place_info['owner_phone']?></p>
    </div>

    <div style="bottom: 5%; right: 5%; position: absolute; z-index: 1; font-size: 35px; color: #f5f5f5; width: 350px;">
        <i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user" style="opacity: 0.5"></i><i class="fa fa-user" style="opacity: 0.5"></i>
        <i class="fa fa-clock-o" style="margin-left: 15px; margin-right: 15px;"></i>
        <p style="display: inline">8+</p>
        <p style="font-size: 20px;">Сложно 2-4 1 час</p>
    </div>

    <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">

        <?php for ($i=0;$i<count($imagesModel);$i++): ?>
            <div class="bg-holder full text-center text-white">

                <div class="bg-img" style="background-image:url(<?=$imagesModel[$i]?>);"></div>

            </div>
        <?php endfor; ?>

    </div>

</div>

<div id="booking-table" style="width: 1500px;">
        <h2 style="text-align: center; color: #ffffff;">Расписание</h2>
        <?=$partial?>
</div>


<div id="map-canvas" style="margin-top:50px; height: 400px"></div>