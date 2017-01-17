<?php
/**
* J51_GridGallery
* Version		: 1.0
* Created by	: Joomla51
* Email			: info@joomla51.com
* URL			: www.joomla51.com
* License GPLv2.0 - http://www.gnu.org/licenses/gpl-2.0.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$baseurl 		= JURI::base();
$j51_num_images	= $params->get( 'j51_num_images' ); 
$j51_randomize	= $params->get( 'j51_randomize' );
$j51_image_width	= $params->get( 'j51_image_width' );
$j51_image_width_tabl	= $params->get( 'j51_image_width_tabl' );
$j51_image_width_tabp	= $params->get( 'j51_image_width_tabp' );
$j51_image_width_mobl	= $params->get( 'j51_image_width_mobl' );
$j51_image_width_mobp	= $params->get( 'j51_image_width_mobp' );
$j51_image_margin_x	= $params->get( 'j51_image_margin_x' );
$j51_image_margin_y	= $params->get( 'j51_image_margin_y' );
$j51_overlay_color	= $params->get( 'j51_overlay_color' );
$j51_title_color	= $params->get( 'j51_title_color' );
$j51_text_color	= $params->get( 'j51_text_color' );
$j51_bg_color	= $params->get( 'j51_bg_color' );
$j51_border_color	= $params->get( 'j51_border_color' );
$j51_animate_class	= $params->get( 'j51_animate_class' );
$j51_moduleid       = $module->id;

$image_ref = array();
$j51_image = array();
$j51_image_alt = array();
$image_url = array();
$j51_title = array();
$j51_text = array();
$j51_disablecaption = array();
$j51_disableurl = array();
$target_url= array();
$j51_animate_class= array();

$max_images = 15;

for ($i = 1; $i <= $max_images; $i++) {
	if ($params->get( 'j51_image'.$i )) {
		$image_ref[]	= $i;
		$j51_image[$i] 	= trim($params->get( 'j51_image'.$i ));
		$j51_image_alt[$i] 	= $params->get( 'j51_image_alt'.$i );
		$j51_title[$i] 	= $params->get( 'j51_title'.$i );
		$j51_text[$i] 	= $params->get( 'j51_text'.$i );
		$image_url[$i] 		= $params->get( 'image_url'.$i );
		$j51_disablecaption[$i] 	= $params->get( 'j51_disablecaption'.$i );
		$j51_disableurl[$i] 	= $params->get( 'j51_disableurl'.$i );
		$target_url[$i] 	= $params->get( 'target_url'.$i );
		$j51_animate_class[$i] 	= $params->get( 'j51_animate_class'.$i );
	}
}

// Toggle Shuffle Images
$image_cnt = count ($image_ref);
if ($j51_randomize ) {
		shuffle ($image_ref);
}

// Load CSS/JS
$document = JFactory::getDocument();

$document->addStyleSheet (JURI::base() . 'modules/mod_j51gridgallery/css/style.css' );

// Styling from module parameters
$j51_css='';
$j51_css .='
.j51gridgallery'.$j51_moduleid.' {
	margin:'.$j51_image_margin_y.'px '.$j51_image_margin_x.'px;
}
.j51gridgallery'.$j51_moduleid.' {
	width: 100%; max-width:'.$j51_image_width.'px;
}
.j51gridgallery'.$j51_moduleid.' h3 {
	color: '.$j51_title_color.' !important;
}
.j51gridgallery'.$j51_moduleid.' figcaption {
	background-color: '.$j51_overlay_color.';
}
@media only screen and (min-width: 960px) and (max-width: 1280px) {

.j51gridgallery'.$j51_moduleid.' {width:100%; max-width:'.$j51_image_width_tabl.'px;}
}
@media only screen and (min-width: 768px) and (max-width: 959px) {

.j51gridgallery'.$j51_moduleid.' {width:100%; max-width:'.$j51_image_width_tabp.'px;}
}
@media only screen and ( max-width: 767px ) {

.j51gridgallery'.$j51_moduleid.' {width:100%; max-width:'.$j51_image_width_mobl.'px;}
}
@media only screen and (max-width: 440px) {

.j51gridgallery'.$j51_moduleid.' {width:100%; max-width:'.$j51_image_width_mobp.'px; width: 78%;}
}
';

// Put styling in header
$document->addStyleDeclaration($j51_css);

?>

 <!-- Content Background Colour -->
<?php 
require_once ("convert_rgb.php");
$bgcolorRGB             = hexGridRGB($j51_border_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
 ?>


<div class="gridgallery">
<?php
$imagenr = 0;
for ($i= 1; $i <= $j51_num_images; $i++) {
	$cur_img = $image_ref[$imagenr] ;
	?>
	<div class="j51gridgallery j51gridgallery<?php echo $j51_moduleid; ?> animate <?php echo $j51_animate_class[$cur_img]; ?> ">
			<figure class="snip1305" style="background-color: <?php echo $j51_bg_color;?>; ">

				<img src="<?php echo $j51_image[$cur_img]; ?>" alt="<?php echo $j51_image_alt[$cur_img]; ?>"
				<?php if($j51_disablecaption[$cur_img] == "yes") : ?>
					style="
						-webkit-transform: none;
						-moz-transform: none;
						-ms-transform: none;
						transform: none;
						"
				<?php endif; ?>
				>
				<!-- <i class="fa fa-plus"></i> -->
				<?php if($j51_disablecaption[$cur_img] == "no") : ?>
				<figcaption  >
					<h3 style="color:<?php echo $j51_title_color;?>;"> <?php echo $j51_title[$cur_img]; ?></h3>
					<?php if($j51_text[$cur_img]  != "") : ?>
					<p class="description" style="color:<?php echo $j51_text_color;?>; "><?php echo $j51_text[$cur_img]; ?></p>
					<?php endif; ?>
				</figcaption>
					<?php if($j51_disableurl[$cur_img] == "no") : ?>
					<a href="<?php echo $image_url[$cur_img]; ?>" target="<?php echo $target_url[$cur_img]; ?>"></a>
					<?php endif; ?>
				<?php endif; ?>
			</figure>

	</div>
<?php 
	$imagenr++;
  } ?>
</div>



