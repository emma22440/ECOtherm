<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
include ("convert_rgb.php");

$document->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css');
$document->addStyleSheet('templates/'.$this->template.'/css/typo.css');
$document->addStyleSheet('templates/'.$this->template.'/css/jstuff.css');
$document->addStyleSheet('templates/'.$this->template.'/css/animate.css');
$document->addStyleSheet('templates/'.$this->template.'/css/vegas.css');
$document->addStyleSheet('templates/'.$this->template.'/css/hover.css');

if ($fontawesome_sw) {
    $document->addStyleSheet('templates/'.$this->template.'/css/font-awesome.css');
}
$document->addStyleSheet('templates/'.$this->template.'/css/nexus.css');

$googlefonts = array($body_fontstyle, $h1head_fontstyle, $articlehead_fontstyle, $logo_fontstyle, $modulehead_fontstyle, $hornav_fontstyle);
$websafefonts = array("Arial, sans-serif", "Arial, Helvetica, sans-serif", "Courier, monospace", "Garamond, serif", "Georgia, serif", "Impact, Charcoal, sans-serif", "Lucida Console, Monaco, monospace", "MS Sans Serif, Geneva, sans-serif", "MS Serif, New York, sans-serif", "Palatino Linotype, Book Antiqua, Palatino, serif", "Tahoma, Geneva, sans-serif", "Times New Roman, Times, serif", "Trebuchet MS, Helvetica, sans-serif", "Verdana, Geneva, sans-serif", "Arial");
// remove websafe
$googlefonts = array_diff($googlefonts, $websafefonts);
// remove duplicates
$googlefonts = array_keys(array_flip($googlefonts));
// remove spaces
$font_subset = str_replace(' ', '', $font_subset);
// loop
foreach ($googlefonts as $v) {
    echo '<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family='.$v.':300,400,700&subset='.$font_subset.'" /> ';
}
?>

<?php if($responsive_sw == "1") : ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/responsive.css" type="text/css" />
<?php endif; ?>

<style type="text/css">
body, input, button, select, textarea {font-family:<?php echo str_replace("+"," ",$body_fontstyle); ?> }
h1{font-family:<?php echo str_replace("+"," ",$h1head_fontstyle); ?> }
h2{font-family:<?php echo str_replace("+"," ",$articlehead_fontstyle); ?> }
.module h3, .module_menu h3{font-family:<?php echo str_replace("+"," ",$modulehead_fontstyle); ?>; }
.hornav{font-family:<?php echo str_replace("+"," ",$hornav_fontstyle); ?> }
h1.logo-text a{font-family:<?php echo str_replace("+"," ",$logo_fontstyle); ?> }

<?php if($this->direction == 'rtl') : ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/template_rtl.css" type="text/css" />
<?php endif; ?>

<style type="text/css">

@media only screen and (max-width: <?php echo ($wrapper_width); ?>px) {
.wrapper960 {
	width:100% !important;
}
.hornav {display:none !important;}
.slicknav_menu {display:block;}
}

/*-- Typo --*/ 
body {color:<?php echo ($body_font_color); ?>; font-size: <?php echo ($body_fontsize); ?>}
h2, h2 a:link, h2 a:visited {color: <?php echo ($articletitle_font_color); ?> ; }
.module h3, .module_menu h3, h3 {color: <?php echo ($modulehead_font_color); ?> }
a {color: <?php echo ($content_link_color); ?> }
hr:before {color: <?php echo ($content_link_color); ?> !important;}

/*-- Logo --*/ 
h1.logo-text a {
	color: <?php echo ($logo_font_color) ?>;
}
p.site-slogan {color: <?php echo ($slogan_font_color); ?> }
.logo a {left:<?php echo ($logo_x); ?>px}
.logo a {top:<?php echo ($logo_y); ?>px}

/*-- Hornav --*/
.hornav ul li a  {color: <?php echo ($hornav_font_color); ?> }
.hornav ul ul li a  {color: <?php echo ($hornav_dd_color); ?> }
.hornav ul ul {background-color: <?php echo ($hornav_ddbackground_color); ?> }
.hornav ul ul:before {border-color: transparent transparent <?php echo ($hornav_ddbackground_color); ?> transparent;}

/* Layout */
.sidecol_a {width: <?php echo ($sidecola_width); ?>% }
.sidecol_b {width: <?php echo ($sidecolb_width); ?>% }

.maincontent {padding: 50px 30px 30px;}

<?php if($this->countModules( 'sidecol-a') >= 1 && $this->countModules('sidecol-b') >= 1) : ?>
#content_remainder {width:<?php echo 100 - ($sidecola_width + $sidecolb_width) ?>% }

<?php elseif($this->countModules('sidecol-a') >= 1 && $this->countModules('sidecol-b') == 0) : ?>
#content_remainder {width:<?php echo 100 - ($sidecola_width) ?>% }

<?php elseif($this->countModules('sidecol-a') == 0 && $this->countModules('sidecol-b') >= 1) : ?>
#content_remainder {width:<?php echo 100 - ($sidecolb_width) ?>% }
<?php endif; ?>

<?php if($this->params->get('column_layout') == 'SCOLA-SCOLB-COM') : ?>
	.sidecol_a {float:left;}
	.sidecol_b {float:left;}
	#content_remainder {float:right;}
    .maincontent {padding-left: 30px;}
	
<?php elseif($this->params->get('column_layout') == 'COM-SCOLA-SCOLB') : ?>
	#content_remainder {float:left;}
	.sidecol_a {float:right;}
	.sidecol_b {float:right;}
	.sidecol_a {float:right;}
	.maincontent {padding-left: 30px;}

<?php elseif($this->params->get('column_layout') == 'SCOLA-COM-SCOLB') : ?>  
	.sidecol_a {float:left; }
	.sidecol_b {float:right; }
	#content_remainder {float:left;}
<?php endif; ?>

.vegas-slide-inner {
	max-width: <?php echo $headerslidewidth ?>px;
}
#header_bg {
    min-height: <?php echo $headerslideheight ?>px;
}
@media only screen and (max-width: <?php echo ($headerslidewidth); ?>px) {
	.vegas-slide-inner {
		background-size: cover !important;
	}
}

/* Social Icons */
<?php 
$i = 0;
foreach($json['social_custom_icon'] as $key=>$value)  {
?>
.social-<?php echo str_replace(' ', '', ($json['social_custom_name'][$i])); ?>:hover {
	background-color: <?php echo $json['social_custom_hover'][$i]; ?>;
}
<?php $i++; } ?>
#socialmedia ul li a [class^="fa-"]::before, #socialmedia ul li a [class*=" fa-"]::before {color: <?php echo $social_style; ?>}

/* Wrapper Width */
.wrapper960, .backgrounds .content_background {width: <?php echo ($wrapper_width); ?>px ;}

/* Button Colour */
.btn, .btn-group.open .btn.dropdown-toggle, .input-append .add-on, .input-prepend .add-on, .pager.pagenav a, .btn-primary:active, 
.btn-primary.active, .btn-primary.disabled, .btn-primary[disabled], .btn:hover, .slidesjs-next.slidesjs-navigation, .slidesjs-previous.slidesjs-navigation {
	background-color: <?php echo $button_color ?>;
}
.btn:hover, .readmore .btn:hover, .dropdown-toggle:hover {background-color: <?php echo $button_hover_color ?>; color: #ffffff;}
.dropdown-toggle, .label-info[href], .badge-info[href]  {
	background-color: <?php echo $button_color ?>;
} 

/* Colors */
.slicknav_menu {background:<?php echo $button_hover_color ?>}
.slicknav_btn {background:rgba(0,0,0,0.35)}
body {
	background-color: #38373d;
}
.backgrounds .sidecol_a , .backgrounds .sidecol_b, .sidecol_a, .sidecol_b {
	background-color: #ffffff;
}
#container_header, .logo {background-color: rgba(0,0,0, 0.6);}
.is-sticky #container_header, .is-sticky #socialmedia, .is-sticky .header-1, .is-sticky .header-2 {
	background-color: #000000;
}
.is-sticky #container_header {
	-ms-transform: translateY(-150%);
	-webkit-transform: translateY(-150%);
  	transform: translateY(-150%);
}
#container_top1_modules {
	background-color: rgba(255,255,255, 0.9);
}
#container_top2_modules {
	background-color: rgba(255,255,255, 1.0);
}
#container_top3_modules {
	background-color: rgba(242,242,242, 0.9);
}
#container_main {
	background-color: rgba(255,255,255, 1 );
}
#container_bottom1_modules {
	background-color: rgba(56,55,61, 1.0 );
}
#container_bottom2_modules {
	background-color: rgba(242,242,242, 1.0 );
}
#container_base {
	background-color: rgba(15,14,16, 1.0 );
}

/* Responsive Options */
<?php if($responsive_sw == "1") : ?>

	<?php if($res_top1_sw != "1") : ?>
	@media only screen and ( max-width: 767px ) {
	#container_top1_modules {display:none;}
	}
	<?php endif; ?>
	<?php if($res_top2_sw != "1") : ?>
	@media only screen and ( max-width: 767px ) {
	#container_top2_modules {display:none;}
	}
	<?php endif; ?>
	<?php if($res_top3_sw != "1") : ?>
	@media only screen and ( max-width: 767px ) {
	#container_top3_modules {display:none;}
	}
	<?php endif; ?>
	<?php if($res_sidecola_sw != "1") : ?>
	@media only screen and ( max-width: 767px ) {
	.sidecol_a {display:none;}
	}
	<?php endif; ?>
	<?php if($res_sidecolb_sw != "1") : ?>
	@media only screen and ( max-width: 767px ) {
	.sidecol_b {display:none;}
	}
	<?php endif; ?>
	<?php if($res_bottom_sw != "1") : ?>
	@media only screen and ( max-width: 767px ) {
	#container_bottom1_modules, #container_bottom2_modules {display:none;}
	}
	<?php endif; ?>
	<?php if($res_base_sw != "1") : ?>
	@media only screen and ( max-width: 767px ) {
	#base1_modules, #base2_modules {display:none;}
	}
	<?php endif; ?>
	<?php if($res_header_sw != "1") : ?>
	@media only screen and ( max-width: 767px ) {
	.header-1, .header-2 {display:none;}
	}
	<?php endif; ?>

	<?php if($mobile_showcase_sw == '1') : ?>
	@media only screen and ( max-width: 767px ) {
	.showcase {display:none;}
	.mobile_showcase {display:inline;}
	}
	<?php else : ?>
	@media only screen and ( max-width: 767px ) {
	.showcase {display:inline;}
	.mobile_showcase {display:none;}
	}
	<?php endif; ?>
<?php endif; ?>
/* Custom Reponsive CSS */
<?php if($tabport_css != "") : ?>
@media only screen and (min-width: 768px) and (max-width: 959px) {
<?php echo ($tabport_css); ?>
}
<?php endif; ?>   
<?php if($mobland_css != "") : ?>
@media only screen and ( max-width: 767px ) {
<?php echo ($mobland_css); ?>
}
<?php endif; ?>   
<?php if($mobport_css != "") : ?>
@media only screen and (max-width: 440px) {
<?php echo ($mobport_css); ?>
}
<?php endif; ?>

 /* Module Container Padding */
<?php if($top1_padding != "0") : ?>
#top1_modules.block_holder {padding: 0;}
#top1_modules .module_surround, #top1_modules .module_content {padding: 0;}
<?php endif; ?>

<?php if($top2_padding != "0") : ?>
#top2_modules.block_holder {padding: 0;}
#top2_modules .module_surround, #top2_modules .module_content {padding: 0;}
<?php endif; ?>

<?php if($top3_padding != "0") : ?>
#top3_modules.block_holder {padding: 0;}
#top3_modules .module_surround, #top3_modules .module_content {padding: 0;}
<?php endif; ?>

<?php if($bottom_padding != "0") : ?>
#bottom_modules.block_holder {padding: 0;}
#bottom_modules .module_surround, #bottom_modules .module_content {padding: 0;}
<?php endif; ?>

<?php if($bottom2_padding != "0") : ?>
#bottom2_modules.block_holder {padding: 0;}
#bottom2_modules .module_surround, #bottom2_modules .module_content  {padding: 0;}
<?php endif; ?>

<?php if($base1_padding != "0") : ?>
#base1_modules.block_holder {padding: 0;}
#base1_modules .module_surround, #base1_modules .module_content  {padding: 0;}
<?php endif; ?>

<?php if($base2_padding != "0") : ?>
#base2_modules.block_holder {padding: 0;}
#base2_modules .module_surround, #base2_modules .module_content  {padding: 0;}
<?php endif; ?>


<?php if ($this->countModules('header-1') || $this->countModules('header-2')) { ?>
/* Header-# Adjustment */
<?php }?>

/*--Load Custom Css Styling--*/
<?php echo ($custom_css); ?>

</style>

<?php if($customcss_sw == "1") : ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/custom.css" type="text/css" />
<?php endif; ?>
