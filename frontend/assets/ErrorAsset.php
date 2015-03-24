<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ErrorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/../';
    public $css = [
        /*'css/site.css',*/
        //'css/bootstrap.css',
        //'css/font-awesome.css',
        //'css/icomoon.css',
        'css/styles.css',
        'css/mystyles.css',

    ];
    public $js = [
/*        'js/modernizr.js',
        'js/jquery.js',
        'js/bootstrap.js',
        'js/slimmenu.js',

        'js/bootstrap-datepicker.js',
        'js/bootstrap-timepicker.js',
        'js/nicescroll.js',
        'js/dropit.js',
        'js/ionrangeslider.js',
        'js/icheck.js',

        'js/fotorama.js',
        'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false',
        'js/typeahead.js',

        'js/card-payment.js',
        'js/magnific.js',
        'js/owl-carousel.js',

        'js/nicescroll.js',
        'js/owl-carousel.js',
        'js/slimmenu.js',

        'js/fitvids.js',
        'js/tweet.js',
        'js/countdown.js',
        'js/gridrotator.js',
        'js/custom.js',*/
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
