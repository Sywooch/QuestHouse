<!-- TOP AREA -->


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


<?php /*echo( $model['quest_name'] );*/?>
<div class="top-area show-onload">
    <div class="bg-holder full">
        <div class="bg-front bg-front-mob-rel">

        </div>
        <div class="owl-carousel owl-slider owl-carousel-area visible-lg" id="owl-carousel-slider">
            <div class="bg-holder full">
                <!--<div class="bg-mask"></div>-->
                <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>

            </div>
            <div class="bg-holder full">
                <!--<div class="bg-mask"></div>-->
                <div class="bg-img" style="background-image:url(img/2048x2048.png);"></div>

            </div>
            <div class="bg-holder full">
                <!--<div class="bg-mask"></div>-->
                <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>
            </div>
        </div>
        <div class="bg-img hidden-lg" style="background-image:url(img/2048x1365.png);"></div>
        <div class="bg-mask hidden-lg"></div>
    </div>
</div>
<!-- END TOP AREA  -->

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

<div id="tableholder">
<div id="sidebar" style="background-color: darkmagenta; float: left; height: auto; width: 150px;">
    <?php $start = new DateTime();
    for ($i=0; $i<12;$i++): ?>
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
for ($i=0; $i<12;$i++):

            echo "<div id=container>";
                for ($j=0; $j<24;$j++):
                    ?>
                    <div class='news-list-item' style='padding-top:0; padding-bottom: 0; height: 60px;'>
                        <div>00:00</div>
                        <div>300$</div>
                    </div>
                    <?php
                endfor;

            echo "</div>";

endfor;
echo '</div>';
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

    <br>
    <br>
    <br>
    dsadsa
    sad
    as
    das
    dsa
    <br>
    <br>
    <br>