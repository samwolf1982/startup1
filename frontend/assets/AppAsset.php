<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $sourcePath  = '@frontend/theme/pk/dark-velvet/dark-velvet-css';
    public $css = [
//        'css/site.css',
    'css/bootstrap.css',
    'style.css',
        'css/cusel.css',
        'css/jslider.css',
        'css/video-js.css',
        'css/jplayer.css',
        'css/jslider.css',
        "css/chosen.css",

        "css/main.css",


    ];
    public $js = [
        "js/libs/modernizr.min.js",
        "js/libs/jquery-1.10.0.js",
        "js/libs/jquery-ui.min.js",
        "js/libs/bootstrap.min.js",
        'js/general.js',
        'js/cusel-min.js',
        'js/custom.js',
        'js/jquery.powerful-placeholder.min.js',
        'js/progressbar.js',
        'js/jquery-ui.multidatespicker.js',
        'js/excanvas.min.js',
        'js/jquery.flot.js',
        'js/jquery.flot.resize.js',
        "js/jquery.slider.bundle.js",
        "js/jquery.slider.js",
        "js/nicEdit.js",
        "js/knobRot-0.2.2.js",
        "js/video.js",
        "js/jquery.jplayer.min.js",
        "js/jplayer.playlist.min.js",
        "js/jquery.mousewheel.js",
        "js/jquery.jscrollpane.min.js",
        "js/jquery.chosen.min.js",

        'js/bottomscript.js',// cкрипт в низу


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $publishOptions = ['forceCopy' => true,];
}
