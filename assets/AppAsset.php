<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files';
    public $css = [
        "css/bootstrap.css",
        "css/style.css",
        "css/responsive.css",
        "https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700;800;900&amp;display=swap",
        "https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800&amp;display=swap",
        "images/favicon.png",
        "images/favicon.png",

        ];
    public $js = [
        "js/jquery.js",
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/jquery.mCustomScrollbar.concat.min.js",
        "js/jquery.fancybox.js",
        "js/appear.js",
        "js/tilt.jquery.min.js",
        "js/owl.js",
        "js/wow.js",
        "js/odometer.js",
        "js/nav-tool.js",
        "js/jquery-ui.js",
        "js/script.js",
        "js/form.js",

    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
