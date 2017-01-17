<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );?>

<!-- Modernizr-->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/modernizr.custom.js" charset="utf-8"></script>
<!-- Animate on Scroll-->
<script type="text/javascript">
    Modernizr.load({  
      test: Modernizr.touch,  
      yep : '', 
      nope: '<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.visible.js'  
    });  
</script>
<!-- Sticky Div -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.sticky.js" charset="utf-8"></script>
  <script type="text/javascript" >
    jQuery(window).load(function(){
      jQuery("#container_header").sticky({ topSpacing: -1 });
    });
 </script>

<?php if($sidecol_responsive_pos == 'after') : ?>
<!-- Responsive stacking order -->
<script type="text/javascript">
jQuery(document).load(jQuery(window).bind("resize", listenWidth));

    function listenWidth( e ) {
        if(jQuery(window).width()<959)
        {
            jQuery("#sidecol_b").remove().insertAfter(jQuery("#content_remainder"));
        } else {
            jQuery("#sidecol_b").remove().insertBefore(jQuery("#content_remainder"));
        }
        if(jQuery(window).width()<959)
        {
            jQuery("#sidecol_a").remove().insertAfter(jQuery("#content_remainder"));
        } else {
            jQuery("#sidecol_a").remove().insertBefore(jQuery("#content_remainder"));
        }
    }
</script>
<?php endif; ?>

<!-- Hornav Responsive Menu -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/responsive-nav/responsive-nav.js" charset="utf-8"></script>

<!-- Vegas Background Slideshow -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.vegas.js" charset="utf-8"></script>
<script type="text/javascript">
(function($) {"use strict";
    $(document).ready(function() {
        $('body').vegas({
            delay: <?php echo $headerslideinterval ?>,
            timer: false,
            slides: [
            <?php 
                if(is_array($header_json['header_slide_image'])) {
                foreach($header_json['header_slide_image'] as $value)  {
                ?>
                    { src: '<?php echo $this->baseurl ?>/<?php echo $value; ?>'},
            <?php } } ?>
            ]
        });
    });
})(jQuery);
</script>

<!-- Load scripts.js -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js" charset="utf-8"></script>


