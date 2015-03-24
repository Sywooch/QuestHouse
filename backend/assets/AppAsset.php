<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        /*'css/icomoon/style.css',*/
        'css/font-awesome.min.css',
        'css/main.css',
        'css/fullcalendar.css'

    ];
    public $js = [
        'js/jquery.min.js',
        'js/html5-trunk.js',
        'js/bootstrap.js',
        'js/jquery.dataTables.js',
        'js/jquery.sparkline.js',
        'js/custom-tables.js',
        'js/preview_image.js',
        'js/custom.js'


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
