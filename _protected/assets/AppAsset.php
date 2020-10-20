<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use Yii;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Nenad Zivkovic <nenad@freetuts.org>
 * 
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    public $css = [
//        'css/bootstrap.min.css',
        "/themes/assets/vendor/bootstrap/css/bootstrap.min.css" ,
        'css/style.css',
        "/themes/assets/vendor/ionicons/css/ionicons.min.css" ,
        "/themes/assets/vendor/boxicons/css/boxicons.min.css" ,
        "/themes/assets/vendor/animate.css/animate.min.css" ,
        "/themes/assets/vendor/font-awesome/css/font-awesome.min.css" ,
        "/themes/assets/vendor/owl.carousel/assets/owl.carousel.min.css" ,
        "/themes/assets/css/style.css"
    ];

    public $js = [
        "/themes/assets/vendor/jquery/jquery.min.js",
        "/themes/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
        "/themes/assets/vendor/jquery.easing/jquery.easing.min.js",
        "/themes/assets/vendor/php-email-form/validate.js",
        "/themes/assets/vendor/scrollreveal/scrollreveal.min.js",
//        "/themes/assets/vendor/venobox/venobox.min.js",
//        "/themes/assets/vendor/waypoints/jquery.waypoints.min.js",
//        "/themes/assets/vendor/counterup/counterup.min.js",
        "/themes/assets/vendor/owl.carousel/owl.carousel.min.js",
//        "/themes/assets/vendor/isotope-layout/isotope.pkgd.min.js",
//        "/themes/assets/vendor/aos/aos.js",
        "/themes/assets/js/main.js"
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
