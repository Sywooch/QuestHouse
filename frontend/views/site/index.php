<?php
use yii\helpers\Url;
?>
<?php
/* @var $this yii\web\View */
$this->title = 'Quest House';
?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function() {

        (function($) {
            $.fn.resizeToParent = function(opts) {
                var defaults = {
                    parent: 'div',
                    delay: 100
                }

                var opts = $.extend(defaults, opts);

                function positionImage(obj) {
                    // reset image (in case we're calling this a second time, for example on resize)
                    obj.css({'width': '', 'height': '', 'margin-left': '', 'margin-top': ''});

                    // dimensions of the parent
                    var parentWidth = obj.parents(opts.parent).width();
                    var parentHeight = obj.parents(opts.parent).height();

                    // dimensions of the image
                    var imageWidth = obj.width();
                    var imageHeight = obj.height();

                    // step 1 - calculate the percentage difference between image width and container width
                    var diff = imageWidth / parentWidth;

                    // step 2 - if height divided by difference is smaller than container height, resize by height. otherwise resize by width
                    if ((imageHeight / diff) < parentHeight) {
                        obj.css({'width': 'auto', 'height': parentHeight});

                        // set image variables to new dimensions
                        imageWidth = imageWidth / (imageHeight / parentHeight);
                        imageHeight = parentHeight;
                    }
                    else {
                        obj.css({'height': 'auto', 'width': parentWidth});

                        // set image variables to new dimensions
                        imageWidth = parentWidth;
                        imageHeight = imageHeight / diff;
                    }

                    // step 3 - center image in container
                    var leftOffset = (imageWidth - parentWidth) / -2;
                    var topOffset = (imageHeight - parentHeight) / -2;

                    obj.css({'margin-left': leftOffset, 'margin-top': topOffset});
                }

                // run the position function on window resize (to make it responsive)
                var tid;
                var elems = this;

                $(window).on('resize', function() {
                    clearTimeout(tid);
                    tid = setTimeout(function() {
                        elems.each(function() {
                            positionImage($(this));
                        });
                    }, opts.delay);
                });

                return this.each(function() {
                    var obj = $(this);

                    // hack to force ie to run the load function... ridiculous bug
                    // http://stackoverflow.com/questions/7137737/ie9-problems-with-jquery-load-event-not-firing
                    obj.attr("src", obj.attr("src"));

                    // bind to load of image
                    obj.load(function() {
                        positionImage(obj);
                    });

                    // run the position function if the image is cached
                    if (this.complete) {
                        positionImage(obj);
                    }
                });
            }
        })( jQuery );

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

<!--<div id="test" style="overflow: hidden; width: 100%; position: relative; display: block; max-height: 1000px; box-shadow: 0px 0px 10px #000000;">
    <img style="position: relative; vertical-align: middle; left: 0;" id="myImage" src="img/1.jpg">
</div>-->


<!--<div class="top-area show-onload" id="test" style="height: auto; ">

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
</div>-->

<!-- TOP AREA -->
<div class="top-area show-onload">
    <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/1.jpg);"></div>
            <div class="bg-front full-center" style="width: 100%; height: 100%;">
                <!--<div class="owl-cap" style="">
                    <div style="position: absolute; bottom: 5%; left:10%;"><p style="200px;">TETET</p></div>
                </div>-->
            </div>
        </div>
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/2.jpg);"></div>
            <div class="bg-front full-center">
            </div>
        </div>
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/3.jpg);"></div>
            <div class="bg-front full-center">

            </div>
        </div>
    </div>
</div>

<style>
    h1, h2, h3, h4, h5, h6{
        font-family: 'Lobster', cursive;
        margin:0;
        padding:0;
        font-weight:300;
        color: #f5f5f5;
    }
    h1{
        font-size:72px;
    }
    h2{
        font-size:40px;
    }
    h3{
        font-size:36px;
    }
    h4{
        font-size:30px;
    }
    h5{
        font-size:24px;
    }
    h6{
        font-size:18px;
    }

</style>

<div class="container">
<div class="gap gap-small" style="color: #f5f5f5; padding: 30px;">

    <div style="text-align: center;"><h2>О нас</h2></div>
    <h5 style="text-align: center; margin-bottom: 50px;">Квестхаус - это уникальное игровое пространство и проект типа "Выбраться из команты" в Одессе. У нас вы можете пройти комнаты-квесты, сыграть в мафию и настольные игры, выпить кофе и просто побыть в хорошей компании в нашем антикафе.</h5>

    <p style="text-align: center;">Эскейп-рум (квест в реальности) — это интеллектуальный вид игр, в котором игроков запирают в помещении, из которого они должны выбраться за время, ища предметы и решая головоломки. Некоторые представители жанра также включают в себя детективный или иной сюжет, чтобы погрузить игроков в уникальную атмосферу. Как выбраться из комнаты? Включите все свое внимание, найдите подсказки, ключи и загадки, поймите что к чему и выйдите из команты за 60 минут!</p>

</div>
</div>
<style>

    .sblock{border:1px solid transparent; -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
    }
    .sblock:hover { border:1px solid rgba(5, 195, 249, 0.5); background:rgba(5, 195, 249, 0.5); }

    #services p { font-size:16px; }
    .services-overlay{
        background:rgba(0, 0, 0, 0.9);
        padding:70px 0;
    }
    #services-blocks{
    }
    #services-blocks div{
        text-align:center;
        padding:20px 20px 30px 20px;
    }
    #services-blocks div span.fa{

        width:110px;
        height:110px;
        line-height:110px;
        font-size:60px;

        color:rgba(255,255,255,1);
        -webkit-border-radius:50%;
        -moz-border-radius:50%;
        border-radius:50%;
    }
    #services-blocks h4{
        padding:20px 0;
    }

</style>

<div id="services-blocks" class="row" style="padding: 50px;">
    <div data-scroll-reveal="enter bottom and move 50px over 1.6s" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sblock" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
        <span class="fa fa-star-o"></span>
        <h4>
            Логика</h4>
        <p>
            Осторожно: Решение логических головоломок, входящий в состав квестов может привести к улучшению мыслительных способностей!
        </p>
    </div>
    <div data-scroll-reveal="enter top and move 50px over 1.7s" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sblock" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
        <span class="fa fa-smile-o"></span>
        <h4>
            Весело и дружно</h4>
        <p>
            Кроме того, берегитесь получения удовольствия от командного решения проблем и выброса эндорфинов от понимания, что код все таки правильный.
        </p>
    </div>
    <div data-scroll-reveal="enter bottom and move 50px over 1.8s" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sblock" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
        <span class="fa fa-eye"></span>
        <h4>
            Внимание</h4>
        <p>
            Минздрав также заверяет: Ни в коем случае не проходите квест, если не хотите улучшить свою сноровку и внимательность к деталям!
        </p>
    </div>
</div>

<!-- END TOP AREA  -->

<!-- END TOP AREA PHOTORAMA-->

<!--<div class="gap gap-small"></div>
<div class="bg-holder">
    <div class="bg-mask"></div>
    <div class="bg-parallax" style="background-image:url(img/1280x853.png);"></div>
    <div class="bg-content">
        <div class="container">
            <div class="gap gap-big text-center text-white">
                <h2 class="text-uc mb20">Last Minute Deal</h2>
                <ul class="icon-list list-inline-block mb0 last-minute-rating">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="last-minute-title">The Peninsula - New York</h5>
                <p class="last-minute-date">Fri 14 Mar - Sun 16 Mar</p>
                <p class="mb20"><b>$120</b> / person</p><a class="btn btn-lg btn-white btn-ghost" href="#">Book Now <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="gap"></div>
    <div class="row row-wrap" data-gutter="60">
        <div class="col-md-3">
            <div class="thumb"><i class="fa fa-thumbs-o-up box-icon-right round box-icon-gray animate-icon-top-to-bottom"></i>
                <div class="thumb-caption">
                    <h5 class="thumb-title">Best Travel Agent</h5>
                    <p class="thumb-desc">Pharetra elit fusce vivamus elementum mauris luctus</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumb"><i class="fa fa-dollar box-icon-right round box-icon-gray animate-icon-top-to-bottom"></i>
                <div class="thumb-caption">
                    <h5 class="thumb-title">Best Price Guarantee</h5>
                    <p class="thumb-desc">Pellentesque luctus penatibus risus accumsan purus cum</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumb"><i class="fa fa-send box-icon-right round box-icon-gray animate-icon-top-to-bottom"></i>
                <div class="thumb-caption">
                    <h5 class="thumb-title">Best Destinations</h5>
                    <p class="thumb-desc">Fusce enim tellus vehicula purus commodo donec</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumb"><i class="fa fa-briefcase box-icon-right round box-icon-gray animate-icon-top-to-bottom"></i>
                <div class="thumb-caption">
                    <h5 class="thumb-title">Combine & Save</h5>
                    <p class="thumb-desc">Metus commodo rhoncus nisi sollicitudin volutpat viverra</p>
                </div>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>
</div>-->