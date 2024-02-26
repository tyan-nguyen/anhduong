<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\themes\zero\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class IndexAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dbcl/assets/jquery.mmenu.all.css',
        'dbcl/assets/animate/animate.min.css',
        'dbcl/assets/aos/aos.css',
        'dbcl/assets/swiper/swiper-bundle.min.css',
        'dbcl/assets/css/style.css',
        'dbcl/assets/css/custom.css',
        'dbcl/assets/fontawesome-free-5.15.4-web/css/all.min.css'
        //Template styles
        /* 'ntweb/css/theme.css',
        'ntweb/css/style.css',
        'ntweb/css/custom.css' */
    ];
    public $js = [
        //'dbcl/assets/jquery/jquery-3.4.1.js',
        'dbcl/assets/bootstrap/bootstrap.bundle.min.js',
        'dbcl/assets/lazyload/jquery.lazy.min.js',
        'dbcl/assets/swiper/swiper-bundle.min.js',
        'dbcl/assets/mansonry/masonry.pkgd.min.js',
        'dbcl/assets/mmenu/jquery.mmenu.all.js',
        'dbcl/assets/aos/aos.js',
        'dbcl/assets/wow/wow.min.js',
        'dbcl/assets/main.js',
        'dbcl/assets/custom.js',
        'dbcl/assets/search.js',
        'dbcl/assets/sweetalert2/sweetalert2@10.js',
        //Template custom
        /* 'ntweb/js/script.js' */
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
