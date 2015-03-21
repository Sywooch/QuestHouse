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
        'plugins/bootstrap/css/bootstrap.min.css',
        'plugins/jquery-ui/jquery-ui-1.10.3.custom.css',
        'plugins/daterangepicker/daterangepicker-bs3.css',
        'plugins/form-wizard/form-wizard.css',
        'plugins/select2/select2.css',
        'plugins/jquery-file-upload/css/jquery.fileupload-ui.css',
        'plugins/jquery-file-upload/css/jquery.fileupload-ui-noscript.css',
        'css/main.css',
        'css/style-default.css',
    ];
    public $js = [
        'js/jquery.js',
        'plugins/common/jquery.blockUI.js',
        'plugins/common/modernizr.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/jquery-ui/jquery-ui-1.10.3.custom.js',
        'plugins/slimScroll/jquery.slimscroll.js',
        'plugins/form-wizard/fuelux.wizard.js',
        'plugins/daterangepicker/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/common/jquery.sparkline.min.js',
        'plugins/flot/excanvas.min.js',
        'plugins/flot/jquery.flot.min.js',
        'plugins/flot/jquery.flot.resize.min.js',
        'plugins/flot/jquery.flot.tooltip.js',
        'plugins/select2/select2.min.js',
        'js/app.js',
        'js/plugins.js',
        'js/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
