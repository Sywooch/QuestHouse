<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>


<html class="full">


<body class="full">

<div class="global-wrap">

    <div class="full-page">
        <div class="bg-holder full">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url(img/1300x900.png);"></div>
            <div class="bg-holder-content full text-white">
                <?php
                $imghtml=Html::img('img/logo-white.png');
                echo Html::a($imghtml, array('site/index'),array('class' =>"logo-holder"));
                ?>
                <div class="full-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <p class="text-hero">404</p>
                                <h1>Page is not found</h1>
                                <p>Aptent vulputate gravida curae lacinia imperdiet tempus erat vulputate posuere mollis quisque magna facilisi sagittis ridiculus consequat a nisl tincidunt</p>

                                <?php
                                $li = '<i class="fa fa-long-arrow-left"></i> to Homepage';
                                echo Html::a($li, array('site/index'),array('class' =>"btn btn-white btn-ghost btn-lg mt5"));
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
<!--                <ul class="footer-links">
                    <li><a href="#">About</a>
                    </li>
                    <li><a href="#">Help</a>
                    </li>
                    <li><a href="#">Hot Deals</a>
                    </li>
                    <li><a href="#">Popular Locations</a>
                    </li>
                    <li><a href="#">Cheap Flights</a>
                    </li>
                    <li><a href="#">Business</a>
                    </li>
                    <li><a href="#">Media</a>
                    </li>
                    <li><a href="#">Developers</a>
                    </li>
                    <li><a href="#">Advertise</a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>

</div>
</body>

</html>


