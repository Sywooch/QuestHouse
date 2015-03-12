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


        /*if ($( window ).width() > $( window ).height()){
            $('.bg-img').height( $( window ).height() - 120 );
            $('#owl-carousel-slider').height( $( window ).height() - 120 );
            $('.owl-item').height( $( window ).height() - 120 );
            $('.bg-holder.full.text-center.text-white').height( $( window ).height() - 120 );
        } else  {
            $('.bg-img').height( $( window ).width() - 120 );
            $('#owl-carousel-slider').height( $( window ).width() - 120 );
            $('.owl-item').height( $( window ).width() - 120 );
            $('.bg-holder.full.text-center.text-white').height( $( window ).width() - 120 );
        }

        $( window ).resize(function() {
            if ($( window ).width() > $( window ).height()){
                $('.bg-img').height( $( window ).height() - 120 );
                $('#owl-carousel-slider').height( $( window ).height() - 120 );
                $('.owl-item').height( $( window ).height() - 120 );
                $('.bg-holder.full.text-center.text-white').height( $( window ).height() - 120 );
            } else  {
                $('.bg-img').height( $( window ).width() - 120 );
                $('#owl-carousel-slider').height( $( window ).width() - 120 );
                $('.owl-item').height( $( window ).width() - 120 );
                $('.bg-holder.full.text-center.text-white').height( $( window ).width() - 120 );
            }
        });*/


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
                <div class="owl-cap" style="">
                    <div style="position: absolute; bottom: 5%; left:10%;"><p style="200px;">TETET</p></div>
                    <!--<div class="owl-cap-weather"><span>+25</span><i class="im im-cloudy"></i>
                    </div>
                    <h1 class="owl-cap-title fittext">Las Vegas</h1>
                    <div class="owl-cap-price"><small>from</small>
                        <h5>$2600</h5>
                    </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>-->
                </div>
            </div>
        </div>
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/2.jpg);"></div>
            <div class="bg-front full-center">
                <div class="owl-cap">
                    <div class="owl-cap-weather"><span>+22</span><i class="im im-rain"></i>
                    </div>
                    <h1 class="owl-cap-title fittext">Paris</h1>
                    <div class="owl-cap-price"><small>from</small>
                        <h5>$2000</h5>
                    </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                </div>
            </div>
        </div>
        <div class="bg-holder full text-center text-white">

            <div class="bg-img" style="background-image:url(img/3.jpg);"></div>
            <div class="bg-front full-center">
                <div class="owl-cap">
                    <div class="owl-cap-weather"><span>+31</span><i class="im im-cloudy"></i>
                    </div>
                    <h1 class="owl-cap-title fittext">Budapest</h1>
                    <div class="owl-cap-price"><small>from</small>
                        <h5>$2800</h5>
                    </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TOP AREA  -->

<!-- END TOP AREA PHOTORAMA-->



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