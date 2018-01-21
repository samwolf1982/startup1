<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ObjectAsset extends AssetBundle
{
    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $sourcePath  = '@frontend/theme/pk/dark-velvet/dark-velvet-css';
    public $css = [

        "libs/selectInspiration/css/cs-select.css",
        "libs/selectInspiration/css/cs-skin-elastic.css",
        '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
        "css/categorymap.css",


    ];
    public $js = [
		"libs/selectInspiration/js/classie.js",
		"libs/selectInspiration/js/selectFx.js",
		"libs/selectInspiration/js/load.js",
		"js/categorymapautocomplete.js",

    ];
    public $depends = [
        'frontend\assets\AppAsset',
    ];
    public $publishOptions = ['forceCopy' => true,];
}
