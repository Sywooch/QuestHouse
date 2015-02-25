<!-- TOP AREA -->
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

<div id="sidebar" style="background-color: darkmagenta; float: left; height: auto; width: 150px;">

    <?php for ($i=0; $i<12;$i++): ?>
    <div style="color: #ffffff; background-color: magenta; height: 60px; margin-top: 2px;">
        <div>dsareg reg re gre</div>
        <div>dsareg reg re gre</div>
    </div>
    <?php endfor; ?>


</div>

<?php for ($i=0; $i<12;$i++): ?>

    <div style="color: #ffffff; background-color: #5e3893; height: 60px; margin-top: 2px;">
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
        <div style="display: inline-block; margin: 10px;">00:00</div>
    </div>
<?php endfor; ?>

<div class="container">

</div>

<div class="bg-darken">
    <br><br><br><br><br>
    dsadsa
    <br><br><br><br><br>

</div>
<div class="container">

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

</div>