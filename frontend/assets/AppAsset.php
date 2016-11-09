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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'niptex/skin/plugins/sitepress-multilingual-cms/res/css/language-selector9ea4.css?v=3.1.8.4',
        'niptex/skin/plugins/contact-form-7/includes/css/styles8aee.css?ver=4.1.2',
        'niptex/skin/plugins/revslider/rs-plugin/css/settings1dc6.css?ver=4.6.5',
        'niptex/skin/plugins/mailchimp-for-wp/assets/css/checkbox.minde92.css?ver=2.2.9',
        'http://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900&amp;ver=4.0.5',
        'niptex/skin/themes/Travelo/css/animate.min631d.css?ver=4.0.5',
        'niptex/skin/themes/Travelo/css/font-awesome631d.css?ver=4.0.5',
        'niptex/skin/themes/Travelo/css/bootstrap.min631d.css?ver=4.0.5',
        'niptex/skin/themes/Travelo/js/components/flexslider/flexslider631d.css?ver=4.0.5',
        'niptex/skin/themes/Travelo/js/components/jquery.bxslider/jquery.bxslider631d.css?ver=4.0.5',
        'niptex/skin/themes/Travelo/css/style631d.css?ver=4.0.5',
        'niptex/skin/themes/Travelo/css/custom631d.css?ver=4.0.5',
        'niptex/skin/themes/Travelo/css/responsive631d.css?ver=4.0.5',
        'niptex/skin/plugins/mailchimp-for-wp/assets/css/form.minde92.css?ver=2.2.9',
    ];
    public $js = [
        'niptex/wp-includes/js/jquery/jquery90f9.js?ver=1.11.1',
        'niptex/wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1',
        'niptex/skin/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min0f0c.js?rev=4.6.5',
        'niptex/skin/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min0f0c.js?rev=4.6.5',
        'niptex/skin/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20',
        'niptex/skin/plugins/contact-form-7/includes/js/scripts8aee.js?ver=4.1.2',
        'niptex/skin/themes/Travelo/js/plugin631d.js?ver=4.0.5',
        'niptex/skin/themes/Travelo/js/jquery-ui.min631d.js?ver=4.0.5',
        'niptex/skin/themes/Travelo/js/bootstrap.min6aec.js?ver=3.0',
        'niptex/skin/themes/Travelo/js/components/jquery.bxslider/jquery.bxslider.min631d.js?ver=4.0.5',
        'niptex/skin/themes/Travelo/js/components/flexslider/jquery.flexslider-min631d.js?ver=4.0.5',
        'niptex/skin/themes/Travelo/js/jquery.validate.min631d.js?ver=4.0.5',
        'niptex/skin/themes/Travelo/js/theme-scripts631d.js?ver=4.0.5',
        'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;ver=3.0',
        'niptex/skin/themes/Travelo/js/gmap3.min6aec.js?ver=3.0',
        'niptex/wp-includes/js/comment-reply.min631d.js?ver=4.0.5',
        'niptex/skin/themes/Travelo/js/style-changer631d.js?ver=4.0.5',
        'niptex/skin/plugins/sitepress-multilingual-cms/res/js/sitepress631d.js?ver=4.0.5',
    ];
    public $depends = [
        
    ];
}
