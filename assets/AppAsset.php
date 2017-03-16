<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

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
        "public/libs/vegas/vegas.css",
        "public/libs/animate/animate.min.css",
        "public/libs/animate/normalize.min.css",
        "public/libs/font-awesome/css/font-awesome.min.css",
        "public/css/main.min.css",
        "public/css/media.css",
        "public/libs/fotorama-4.6.4/fotorama.css",
        "public/css/fast.css"
    ];
    public $js = [
        //"public/libs/jquery/dist/jquery.min.js",
        "public/libs/vegas/vegas.js",
        "public/libs/animatedModal/animatedModal.min.js",
        "public/js/scripts.min.js",
        "public/libs/fotorama-4.6.4/fotorama.js",
        "public/js/js.js"
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
