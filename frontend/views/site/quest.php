<!-- TOP AREA -->

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
        border: 1px solid #E5E5E5;
        float: left;
        /*height: 175px;*/
        color: white;
        padding: 5px;
        /*width: 184px;*/
    }
</style>

<script>
    $(document).ready(function() {

        $( window).load(function(){

            var x = ($(window).height() - 120) / 5;

            $('.owl-cap-title.fittext').css('font-size',x + 'px');

            if ($( window ).width() > $( window ).height()) {
                $('.owl-wrapper-outer').height($(window).height() - 120);
                $('.top-area.show-onload').height($(window).height() - 120);
                $('.owl-item').height($(window).height() - 120);


            } else {
                /*$('.owl-wrapper-outer').height($(window).width() - 120);
                 $('.top-area.show-onload').height($(window).width() - 120);
                 $('.owl-item').height($(window).width() - 120);*/

                $('.owl-wrapper-outer').height($(window).width() / 4 * 3);
                $('.top-area.show-onload').height($(window).width() / 4 * 3);
                $('.owl-item').height($(window).width() / 4 * 3);


            }
        });

        $( window ).resize(function() {

            var x = ($(window).height() - 120) / 2;
            $('.owl-cap-title.fittext').css('font-size',x + 'px');

            if ($( window ).width() > $( window ).height()) {
                $('.owl-wrapper-outer').height($(window).height() - 120);
                $('.top-area.show-onload').height($(window).height() - 120);
                $('.owl-item').height($(window).height() - 120);



            } else {
                $('.owl-wrapper-outer').height($(window).width() - 120);
                $('.top-area.show-onload').height($(window).width() - 120);
                $('.owl-item').height($(window).width() - 120);


            }
        });



    });

</script>


<div class="top-area show-onload" style="margin-bottom: 25px;">
    <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/1.jpg);"></div>

        </div>
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/2.jpg);"></div>

        </div>
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/3.jpg);"></div>

        </div>
    </div>
</div>

<!--<div class="gap"></div>-->
<!--
<div id="sidebar" style="background-color: darkmagenta; float: left; height: auto; width: 150px;">
    <?php /*for ($i=0; $i<12;$i++): */?>
    <div style="color: #ffffff; background-color: magenta; height: 60px; margin-top: 2px; display: block; position: relative;">
        <div>dsareg reg re gre</div>
        <div>dsareg reg re gre</div>
    </div>
    <?php /*endfor; */?>


</div>

<div class="" style="">
<?php /*for ($i=0; $i<12;$i++): */?>

    <div style="color: #ffffff; background-color: #5e3893; height: 60px; margin-top: 2px;display: block; ">
        <div style="display: inline; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
        <div style="display: inline-block; padding: 10px;">00:00</div>
    </div>
--><?php /*endfor; */?>

<?php
/*foreach($questTimeModel as $key => $item)
{
    $arr[$item['d']][$key] = $item;
}*/
//echo count($arr);
?>

<div id="tableholder">
<div id="sidebar" style="background-color: darkmagenta; float: left; height: auto; width: 150px;">
    <?php $start = new DateTime();
    for ($i=0; $i<count($questTimeModel);$i++): ?>
    <div style="color: #ffffff; background-color: rgba(13, 0, 120, 0.68); height: 60px; border: white solid 1px; display: block; position: relative;">

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

/*foreach ($arr as $key => $item):
    print_r($key);
    echo "<br>";
    print_r(array_values($item)[0]);
echo "<br><br><br><br>";
endforeach;*/

//for ($i=0; $i<count($arr);$i++):
foreach ($questTimeModel as $key=>$item):
    echo "<div id=container>";

usort($item, function ($item1, $item2) {
    return number_format((float)$item1['time_value']) -number_format((float) $item2['time_value']);
});


            for ($j = 0; $j < count($item); $j++): ?>
                <div class='news-list-item' style='padding-top:0; padding-bottom: 0; height: 60px;' id="questTime">
                    <?php if (array_values($item)[$j]['id']){
                        ?>
                        <div style="width: 50px;">NO</div>
                        <?php
                    } else {

                    ?>
                        <div style="width: 50px;"><?=number_format((float)array_values($item)[$j]['time_value'], 2, '.', ''); ?></div>
                        <div style="width: 50px;"><?=array_values($item)[$j]['price']?> $</div>
                    <?php
                    }
                        ?>
                </div>
                <?php
                endfor;
    echo "</div>";
endforeach;
/*for ($i=0; $i<12;$i++):

            echo "<div id=container>";
                //for ($j=0; $j<count($questTimeModel);$j++):
                    foreach ($arr as $key=>$item):

                        */?><!--
                        <?php /*for ($j = 0; $j < count($item); $j++): */?>
                            <div class='news-list-item' style='padding-top:0; padding-bottom: 0; height: 60px;' id="questTime">
                                <div><?/*=array_values($item)[$j]['time_value']*/?></div>
                                <div><?/*=array_values($item)[$j]['price']*/?> $</div>
                            </div>
                    --><?php
/*                        endfor;
                        endforeach;
                //endfor;

            echo "</div>";

endfor;
echo '</div>';*/
?>
</div>
    <div class="bg-darken">
        <br><br><br><br><br>
        dsadsa
        <br><br><br><br><br>

    </div>

    <?php

    $start = new DateTime('10:00');
    $finish = new DateTime('23:59');

    while ($finish > $start){
        echo ($start->format('H:i'));
        date_add($start, date_interval_create_from_date_string('1 hour 15 min'));
        echo "<br>";
    }

    ?>
