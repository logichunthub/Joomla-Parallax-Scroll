<?php
/**
 * ------------------------------------------------------------------------
 * mod_parallax_scrool.php Parallax Scroll
 * ------------------------------------------------------------------------
 * Copyright (C) 2014-2016 LogicHunt, All Rights Reserved.
 * license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: LogicHunt
 * Websites: http://logichunt.com
 * ------------------------------------------------------------------------
 */
defined('_JEXEC') or die;




// Include All Default Assets
include_once(dirname(__FILE__).'/assets/asset.php');

// Include the syndicate functions only once
require_once __DIR__ . '/helper/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Slider Params
$section_height     = intval($params->get('section_height', 550));
$bg_img_en          = intval($params->get('bg_img_en', 1));
$bg_img             = $params->get('bg_img');
$logo_img_en        = intval($params->get('logo_img_en', 1));
$logo_img           = $params->get('logo_img', '');
$logo_width         = intval($params->get('logo_width', 120));
$bg_color_hex       = $params->get('bg_color', '#000000');
$bg_opacity         = $params->get('bg_opacity', 0.5);
$bg_color_en        = intval($params->get('bg_color_en', 1));
$bg_color           = LgxParallaxAHelper::lgx_parallax_hex2rgba($bg_color_hex, $bg_opacity);


//Content
$content_width      = intval($params->get('content_width', 90));
$section_width      = intval($params->get('section_width', 100));
$title_en           = intval($params->get('title_en', 1));
$title              = $params->get('title', 'WELCOME');

$title_color        = $params->get('title_color', '#fff');
$title_size         = intval($params->get('title_size', 36));;
$subtitle_en        = intval($params->get('subtitle_en', 1));;
$subtitle           = $params->get('subtitle', 'This is Section Content. You can add HTML markup also.');
$subtitle_color     = $params->get('subtitle_color', '#fff');
$subtitle_size      = intval($params->get('subtitle_size', 22));

$margin_top         =intval($params->get('margin_top', 0));
$margin_right       =intval($params->get('margin_right', 0));
$margin_bottom      =intval($params->get('margin_bottom', 0));
$margin_left        =intval($params->get('margin_left', 0));

$padding_top        =intval($params->get('padding_top', 0));
$padding_right      =intval($params->get('padding_right', 0));
$padding_left       =intval($params->get('padding_left', 0));
$padding_bottom     =intval($params->get('padding_bottom', 0));


if(empty($bg_img)) {
    $bg_img = 'modules/mod_parallax_scroll/assets/img/default.jpg';
}


require JModuleHelper::getLayoutPath('mod_parallax_scroll', $params->get('layout', 'default'));

