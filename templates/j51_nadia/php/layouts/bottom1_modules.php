<?php

?>


    
<div id="bottom_modules" class="block_holder">

<?php if($this->params->get('bottom1_auto') != '1') : ?>
<?php if ($this->countModules('bottom-1a') || $this->countModules('bottom-1b') || $this->countModules('bottom-1c') || $this->countModules('bottom-1d') || $this->countModules('bottom-1e') || $this->countModules('bottom-1f')) { ?>
		<div id="wrapper_bottom-1" class="block_holder_margin">
		<?php if ($this->countModules('bottom-1a')) { ?> 
		<div class="bottom-1" style="width:<?php echo $bottom1_width ?>;"><jdoc:include type="modules" name="bottom-1a"  style="mod_standard"/></div><?php } ?>
		<?php if ($this->countModules('bottom-1b')) { ?>
		<div class="bottom-1" style="width:<?php echo $bottom1_width ?>;"><jdoc:include type="modules" name="bottom-1b"  style="mod_standard"/></div><?php } ?>
		<?php if ($this->countModules('bottom-1c')) { ?>
		<div class="bottom-1" style="width:<?php echo $bottom1_width ?>;"><jdoc:include type="modules" name="bottom-1c"  style="mod_standard"/></div><?php } ?>
		<?php if ($this->countModules('bottom-1d')) { ?>
		<div class="bottom-1" style="width:<?php echo $bottom1_width ?>;"><jdoc:include type="modules" name="bottom-1d"  style="mod_standard"/></div><?php } ?>
		<?php if ($this->countModules('bottom-1e')) { ?>
		<div class="bottom-1" style="width:<?php echo $bottom1_width ?>;"><jdoc:include type="modules" name="bottom-1e"  style="mod_standard"/></div><?php } ?>
		<?php if ($this->countModules('bottom-1f')) { ?>
		<div class="bottom-1" style="width:<?php echo $bottom1_width ?>;"><jdoc:include type="modules" name="bottom-1f"  style="mod_standard"/></div><?php } ?>
	<div class="clear"></div>
    </div>		
    <?php }?>
					
<?php endif; ?>
				
</div>

