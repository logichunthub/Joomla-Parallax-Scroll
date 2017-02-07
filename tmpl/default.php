<?php
/**
 * ------------------------------------------------------------------------
 * LGX PARALLAX
 * ------------------------------------------------------------------------
 * Copyright (C) 2014-2016 LogicHunt, All Rights Reserved.
 * license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: LogicHunt
 * Websites: http://logichunt.com - http://logichunt.com
 * ------------------------------------------------------------------------
 */

defined('_JEXEC') or die;
?>

<?php
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$mod_id = $module->id;

// Path assignments
$jebase = JURI::base();

if(substr($jebase, -1)=="/") { $jebase = substr($jebase, 0, -1); }


// Add styles
$style = '#lgx-parallax'.$mod_id.' { height: '.$section_height.'px; width: '.$section_width.'%; margin: '.$margin_top.'px '.$margin_right.'px '.$margin_bottom.'px '.$margin_left.'px;}'
            .'#lgx-parallax'.$mod_id.' .lgx-parallax-inner{padding: '.$padding_top.'px '.$padding_right.'px '.$padding_bottom.'px '.$padding_left.'px;}'
		 .'#lgx-parallax'.$mod_id.' .lgx-parallax-content-wrapper { width: '.$content_width.'%;}'
		 .'#lgx-parallax'.$mod_id.' .lgx-parallax-title { font-size: '.$title_size.'px; color: '.$title_color.';}'
         .'#lgx-parallax'.$mod_id.' .lgx-parallax-text {font-size: '.$subtitle_size.'px; color: '.$subtitle_color.';'
         .'}';



$bg_color = '#lgx-parallax'.$mod_id.' .lgx-parallax-inner{ background-color: '.$bg_color.';}';

$bg_style = '#lgx-parallax'.$mod_id.' {'
            . 'background-image: url('.$jebase.'/'. $bg_img .');'
            . '}';


if($bg_img_en && !empty($bg_img)){
	$doc->addStyleDeclaration($bg_style);
}

if($bg_color_en){
    $doc->addStyleDeclaration($bg_color);
}

$doc->addStyleDeclaration($style);

$action_en = true;


?>
<section>
	<div id="lgx-parallax<?php echo $mod_id;?>" class="lgx-parallax jaxp<?php echo $moduleclass_sfx; ?>">
		<div class="lgx-parallax-inner">
			<div class="lgx-parallax-content">
				<div class="lgx-parallax-content-wrapper">
					<?php if($logo_img_en && !empty($logo_img)):?>

						<p class="lgx-parallax-logo"><img src="<?php echo $logo_img; ?>" width="<?php echo $logo_width;?>px" alt="Parallax Logo"></p>
					<?php endif;?>

					<?php if($title_en && !empty($title)):?>
					<h1 class="lgx-parallax-title"><?php echo $title; ?></h1>
					<?php endif;?>

					<?php if($subtitle_en && !empty($subtitle)):?>
					<div class="lgx-parallax-text">
						<?php echo $subtitle; ?>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>

