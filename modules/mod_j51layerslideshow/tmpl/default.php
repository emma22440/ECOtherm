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
$j51_moduleid       = $module->id;
$animateIn = $params->get( 'animateIn' );
$animateOut = $params->get( 'animateOut' );

$j51slideimages = $params->get('j51slideimages');
$j51_slideimage = $params->get('j51_slideimage');
$j51_slidetitle = $params->get('j51_slidetitle');
$j51_slidecaption = $params->get('j51_slidecaption');
$j51_slidelink = $params->get('j51_slidelink');
$j51_title_color = $params->get('j51_title_color');
$j51_text_color = $params->get('j51_text_color');
$j51_icon = $params->get('j51_icon');
$j51_icon_color = $params->get('j51_icon_color');
$autoplaySpeed = $params->get('autoplaySpeed');
$speed = $params->get('speed');

// $j51slideimages = array();
// $j51_slidetitles = array();

// Load CSS/JS
$document = JFactory::getDocument();

$document->addStyleSheet (JURI::base() . 'modules/mod_j51layerslideshow/css/style.css' );

$style = '
        .layerslideshow .item h3 {
            color:'. $j51_title_color .';
        }

        .layerslideshow .item p {
            color:'. $j51_text_color .';
        }

        .layerslideshow .item i::before {
            color:'. $j51_icon_color .';
        }
}
';

$document->addStyleDeclaration( $style );

    echo '<div class="layerslideshow module'.$j51_moduleid.'">';

    foreach ($j51slideimages as $item) {
        echo '<div class="item">';
        echo '<div class="img-fill">';
        echo '<img src="'.($item->j51_slideimage).'" alt="'.($item->j51_slidetitle).'">';
        if (!empty($item->j51_slidetitle) && !empty($item->j51_slidecaption)) {
            echo '<div class="info"><div>';
            echo '<h3>'.$item->j51_slidetitle.'</h3>';
            echo '<p>'.$item->j51_slidecaption.'</p>';
        }
        // echo '<i class="fa '.$j51_icon.'"></i>';
        if (!empty($item->j51_slidelink)) {
            echo '<a href="'.$item->j51_slidelink.'" class="slidelink"></a>';
        }
        
        echo '</div"></div></div></div></div>';     
    }

    ?>
    
    </div>


<script type="text/javascript" src="modules/mod_j51layerslideshow/js/slick.js" ></script>
<script type="text/javascript">
jQuery(document).ready(function() {
     
    jQuery(".layerslideshow").slick({
        autoplay:true,
        autoplaySpeed:<?php echo $autoplaySpeed; ?>,
        speed:<?php echo $speed; ?>,
        slidesToShow:1,
        slidesToScroll:1,
        pauseOnHover:false,
        dots:false,
        pauseOnDotsHover:true,
        cssEase:'linear',
        fade:true,
        draggable:false,
        prevArrow:'<button class="PrevArrow"></button>',
        nextArrow:'<button class="NextArrow"></button>',
    });
     
 });

</script>
