
<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
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
    <div style="bottom: 5%; right: 5%; position: absolute; z-index: 1; font-size: 35px; color: #f5f5f5; width: 350px;">
        <i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user" style="opacity: 0.5"></i><i class="fa fa-user" style="opacity: 0.5"></i>
        <i class="fa fa-clock-o" style="margin-left: 15px; margin-right: 15px;"></i>
        <p style="display: inline">8+</p>
        <p style="font-size: 20px;">Сложно 2-4 1 час</p>
    </div>

    <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">

        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/1.jpg);"></div>


            <!--<div class="bg-front full-center">
                <div class="owl-cap">
                    <div class="owl-cap-weather"><span>+25</span><i class="im im-cloudy"></i>
                    </div>
                    <h1 class="owl-cap-title fittext">Las Vegas</h1>
                    <div class="owl-cap-price"><small>from</small>
                        <h5>$2600</h5>
                    </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                    <i class="fa fa-clock-o"></i>
                    <i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i>
                </div>
            </div>-->

        </div>
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/2.jpg);"></div>

        </div>
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/3.jpg);"></div>

        </div>
    </div>

</div>

<div id="tableholder">
<div id="sidebar" style="float: left; height: auto; width: 150px;">
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
echo '<div class="news-list-container" >';

/*foreach ($arr as $key => $item):
    print_r($key);
    echo "<br>";
    print_r(array_values($item)[0]);
echo "<br><br><br><br>";
endforeach;*/

//for ($i=0; $i<count($arr);$i++):
foreach ($questTimeModel as $key=>$item):
    echo '<div id=container class="quest_booking" name='.$model['id'].' >';

usort($item, function ($item1, $item2) {
    return number_format((float)$item1['time_value']) -number_format((float) $item2['time_value']);
});


            for ($j = 0; $j < count($item); $j++): ?>
                <div class='news-list-item' id='<?=array_values($item)[$j]['d'] ?>' style='padding-top:0; padding-bottom: 0; height: 60px;'>
                    <?php if (array_values($item)[$j]['id']){
                        ?>
                        <div style="width: 50px; text-align: center; background-color: #d3d3d3; margin-right: 10px;  border: 1px solid;
    border-radius: 5px; color: #808080; font-weight: bolder;">
                            <p style="padding: 0; color: #808080; margin: 0;"><?=number_format((float)array_values($item)[$j]['time_value'], 2, '.', ''); ?></p>
                        </div>
                        <?php
                    } else {

                    ?>
                        <div class="timeContainer" style="width: 50px; text-align: center; background-color: #d3d3d3; margin-right: 10px;  border: 1px solid;
    border-radius: 5px; color: #a9a9a9; font-weight: bolder;">
                            <p style="padding: 0; color: #000000; margin: 0;"><?=number_format((float)array_values($item)[$j]['time_value'], 2, '.', ''); ?></p>
                        </div>
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


<div id="map-canvas" style="margin-top:50px; height: 400px"></div>