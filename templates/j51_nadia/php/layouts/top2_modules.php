<?php

?>

<div id="top2_modules" class="block_holder">
				
<?php if($this->params->get('top2_auto') != '1') : ?>
<?php if ($this->countModules('top-2a') || $this->countModules('top-2b') || $this->countModules('top-2c') || $this->countModules('top-2d') || $this->countModules('top-2e') || $this->countModules('top-2f')) { ?>
    <div id="wrapper_top-2" class="block_holder_margin">
		<?php if ($this->countModules('top-2a')) { ?> 
        <div class="top-2" style="width:<?php echo $top2_width ?>;"><jdoc:include type="modules" name="top-2a"  style="mod_standard"/></div><?php } ?>
        <?php if ($this->countModules('top-2b')) { ?>
        <div class="top-2" style="width:<?php echo $top2_width ?>;"><jdoc:include type="modules" name="top-2b"  style="mod_standard"/></div><?php } ?>
        <?php if ($this->countModules('top-2c')) { ?>
        <div class="top-2" style="width:<?php echo $top2_width ?>;"><jdoc:include type="modules" name="top-2c"  style="mod_standard"/></div><?php } ?>
        <?php if ($this->countModules('top-2d')) { ?>
        <div class="top-2" style="width:<?php echo $top2_width ?>;"><jdoc:include type="modules" name="top-2d"  style="mod_standard"/></div><?php } ?>
        <?php if ($this->countModules('top-2e')) { ?>
        <div class="top-2" style="width:<?php echo $top2_width ?>;"><jdoc:include type="modules" name="top-2e"  style="mod_standard"/></div><?php } ?>
        <?php if ($this->countModules('top-2f')) { ?>
        <div class="top-2" style="width:<?php echo $top2_width ?>;"><jdoc:include type="modules" name="top-2f"  style="mod_standard"/></div><?php } ?>
        <div class="clear"></div>
    </div>					
    <?php }?>

<?php endif; ?>


</div>
