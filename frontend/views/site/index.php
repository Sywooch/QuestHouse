<?php
use yii\helpers\Url;
?>
<?php
/* @var $this yii\web\View */
$this->title = 'Quest House';
?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<!--<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
-->

<!-- TOP AREA PHOTORAMA-->

<!--<div class="top-area show-onload">

    <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
        <div class="bg-holder full text-center text-white">
            <div class="bg-mask"></div>
            <div class="bg-img" style="background-image:url(img/1.jpg); position: relative;"></div>
        </div>
        <div class="bg-holder full text-center text-white">
            <div class="bg-mask"></div>
            <div class="bg-img" style="background-image:url(img/2.jpg);"></div>
        </div>
        <div class="bg-holder full text-center text-white">
            <div class="bg-mask"></div>
            <div class="bg-img" style="background-image:url(img/3.jpg);"></div>
        </div>

    </div>
</div>-->

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

        if ($( window ).width() > $( window ).height()){
            //$('#test').height( $( window ).height() - 120 );
            $('#myImage').resizeToParent();
        }
        //alert ($( window ).height());
        //$('#test').height( $( window ).height() - 120 );
        //$('#myImage').resizeToParent();
        $( window ).resize(function() {

            if ($( window ).width() > $( window ).height()){
              //  $('#test').height( $( window ).height() - 120 );
                $('#myImage').resizeToParent();
            }
            /*$('#test').height( $( window ).height() - 120 );
             $('#myImage').resizeToParent();*/
        });


    });
</script>

<!--<div id="test" style="overflow: hidden; width: 100%; position: relative; display: block; max-height: 1000px; box-shadow: 0px 0px 10px #000000;">
    <img style="position: relative; vertical-align: middle; left: 0;" id="myImage" src="img/1.jpg">
</div>-->
<!-- END TOP AREA PHOTORAMA-->

<!-- END TOP AREA  -->
<!--<div class="top-area show-onload" id='test'>

    <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
        <div class="bg-holder full text-center text-white"">
            <img style="position: relative; vertical-align: middle; left: 0;" id="myImage" src="img/1.jpg">
        </div>

        <div class="bg-holder full text-center text-white">
            <div class="bg-mask"></div>
            <div class="bg-img" style="background-image:url(img/2.jpg);"></div>
        </div>


    </div>
</div>-->




<div style="min-height: 50px; margin-bottom: 50px; ">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <!-- ================================================== -->
    <div id="slider1_container" style="display: none; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div>
                <div id ='tt' style="position: absolute; color: white; z-index: 1; top: 50%;
    left: 50%;
    margin-top: -50px;
    margin-left: -50px;
    width: 100px;
    height: 100px; background-color: red; ">
                    dasdas
                </div>
                <img u="image" src2="img/1.jpg" />
            </div>
            <div>
                <img u="image" src2="img/2.jpg" />
            </div>
            <div>
                <img u="image" src2="img/3.jpg" />
            </div>
        </div>

        <!-- Bullet Navigator Skin Begin -->
        <style>
            /* jssor slider bullet navigator skin 21 css */
            /*
            .jssorb21 div           (normal)
            .jssorb21 div:hover     (normal mouseover)
            .jssorb21 .av           (active)
            .jssorb21 .av:hover     (active mouseover)
            .jssorb21 .dn           (mousedown)
            */
            .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                background: url(../img/b21.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }

            .jssorb21 div {
                background-position: -5px -5px;
            }

            .jssorb21 div:hover, .jssorb21 .av:hover {
                background-position: -35px -5px;
            }

            .jssorb21 .av {
                background-position: -65px -5px;
            }

            .jssorb21 .dn, .jssorb21 .dn:hover {
                background-position: -95px -5px;
            }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 21 css */
            /*
            .jssora21l              (normal)
            .jssora21r              (normal)
            .jssora21l:hover        (normal mouseover)
            .jssora21r:hover        (normal mouseover)
            .jssora21ldn            (mousedown)
            .jssora21rdn            (mousedown)
            */
            .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn {
                position: absolute;
                cursor: pointer;
                display: block;
                background: url(img/a21.png) center center no-repeat;
                overflow: hidden;
            }

            .jssora21l {
                background-position: -3px -33px;
            }

            .jssora21r {
                background-position: -63px -33px;
            }

            .jssora21l:hover {
                background-position: -123px -33px;
            }

            .jssora21r:hover {
                background-position: -183px -33px;
            }

            .jssora21ldn {
                background-position: -243px -33px;
            }

            .jssora21rdn {
                background-position: -303px -33px;
            }
        </style>
        <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
            </span>
        <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
            </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
    </div>
    <!-- Jssor Slider End -->
</div>

<!--<script type="text/javascript" src="http://localhost:8080/QuestHouse/js/jssor.slider.mini.js"></script>-->
<script>
    jQuery(document).ready(function ($) {

        var options = {
            $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            },

            $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        //Make the element 'slider1_container' visible before initialize jssor slider.
        $("#slider1_container").css("display", "block");
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
            if (bodyWidth)
                jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>



<!--<div class="container">
    <div class="search-tabs search-tabs-bg search-tabs-nobox search-tabs-lift-top">
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Hotels</span></a>
                </li>
                <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-plane"></i> <span >Flights</span></a>
                </li>
                <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-home"></i> <span >Rentals</span></a>
                </li>
                <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-car"></i> <span >Cars</span></a>
                </li>
                <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-bolt"></i> <span >Activities</span></a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <h2>Search and Save on Hotels</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>Where are you going?</label>
                                    <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="input-daterange" data-date-format="M d, D">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Check-in</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Check-out</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-select-plus">
                                                <label>Rooms</label>
                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="radio" name="options" />1</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />2</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />3</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />3+</label>
                                                </div>
                                                <select class="form-control hidden">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option selected="selected">4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-select-plus">
                                                <label>Guests</label>
                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="radio" name="options" />1</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />2</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />3</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />3+</label>
                                                </div>
                                                <select class="form-control hidden">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option selected="selected">4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <h2>Search for Cheap Flights</h2>
                    <form>
                        <div class="tabbable">
                            <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                                </li>
                                <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="flight-search-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>From</label>
                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>To</label>
                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-daterange" data-date-format="M d, D">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Departing</label>
                                                            <input class="form-control" name="start" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Returning</label>
                                                            <input class="form-control" name="end" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Passngers</label>
                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                <label class="btn btn-primary active">
                                                                    <input type="radio" name="options" />1</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />2</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3+</label>
                                                            </div>
                                                            <select class="form-control hidden">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option selected="selected">4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                                <option>13</option>
                                                                <option>14</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="flight-search-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>From</label>
                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>To</label>
                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-daterange" data-date-format="M d, D">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Departing</label>
                                                            <input class="date-pick form-control" data-date-format="M d, D" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Passngers</label>
                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                <label class="btn btn-primary active">
                                                                    <input type="radio" name="options" />1</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />2</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3+</label>
                                                            </div>
                                                            <select class="form-control hidden">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option selected="selected">4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                                <option>13</option>
                                                                <option>14</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Flights</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <h2>Find Your Perfect Home</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>Where are you going?</label>
                                    <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="input-daterange" data-date-format="M d, D">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Check-in</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Check-out</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-select-plus">
                                                <label>Rooms</label>
                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="radio" name="options" />1</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />2</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />3</label>
                                                    <label class="btn btn-primary">
+                                                            <input type="radio" name="options" />3+</label>
                                                </div>
                                                <select class="form-control hidden">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option selected="selected">4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-group-lg form-group-select-plus">
                                                <label>Guests</label>
                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="radio" name="options" />1</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />2</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />3</label>
                                                    <label class="btn btn-primary">
                                                        <input type="radio" name="options" />3+</label>
                                                </div>
                                                <select class="form-control hidden">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option selected="selected">4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Vacation Rentals</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="tab-4">
                    <h2>Search for Cheap Rental Cars</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                            <label>Pick-up Location</label>
                                            <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                            <label>Drop-off Location</label>
                                            <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-daterange" data-date-format="M d, D">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Pick-up Date</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>Drop-ff Date</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Rental Cars</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="tab-5">
                    <h2>Search for Activities</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>Where are you going?</label>
                                    <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-daterange" data-date-format="M d, D">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>From</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                <label>To</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Activities</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>
</div>-->
dsadasd
sadas
dsadsdas
<div class="gap gap-small"></div>
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
</div>