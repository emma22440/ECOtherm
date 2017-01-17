<?php

?>

<div id="container_base" class="j51container">
	<div class="wrapper960">
		<div id ="base1_modules" class="block_holder">
		<?php if($this->params->get('base1_auto') != '1') : ?>
		<?php if ($this->countModules('base-1a') || $this->countModules('base-1b') || $this->countModules('base-1c') || $this->countModules('base-1d') || $this->countModules('base-1e') || $this->countModules('base-1f')) { ?>
			<div id="wrapper_base-1" class="block_holder_margin">
				<?php if ($this->countModules('base-1a')) { ?> 
				<div class="base-1" style="width:<?php echo $base1_width ?>;"><jdoc:include type="modules" name="base-1a"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1b')) { ?>
				<div class="base-1" style="width:<?php echo $base1_width ?>;"><jdoc:include type="modules" name="base-1b"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1c')) { ?>
				<div class="base-1" style="width:<?php echo $base1_width ?>;"><jdoc:include type="modules" name="base-1c"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1d')) { ?>
				<div class="base-1" style="width:<?php echo $base1_width ?>;"><jdoc:include type="modules" name="base-1d"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1e')) { ?>
				<div class="base-1" style="width:<?php echo $base1_width ?>;"><jdoc:include type="modules" name="base-1e"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1f')) { ?>
				<div class="base-1" style="width:<?php echo $base1_width ?>;"><jdoc:include type="modules" name="base-1f"  style="mod_standard"/></div><?php } ?>
				<div class="clear"></div>
			</div>		
		<?php }?>
							
		<?php else : ?>

		<?php if ($this->countModules('base-1a') || $this->countModules('base-1b') || $this->countModules('base-1c') || $this->countModules('base-1d') || $this->countModules('base-1e') || $this->countModules('base-1f')) { ?>
			<div id="wrapper_base-1" class="block_holder_margin">
				<?php if ($this->countModules('base-1a')) { ?> 
				<div class="base-1" style="width:<?php echo $base_1a_manual ?>%;"><jdoc:include type="modules" name="base-1a"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1b')) { ?>
				<div class="base-1" style="width:<?php echo $base_1b_manual ?>%;"><jdoc:include type="modules" name="base-1b"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1c')) { ?>
				<div class="base-1" style="width:<?php echo $base_1c_manual ?>%;"><jdoc:include type="modules" name="base-1c"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1d')) { ?>
				<div class="base-1" style="width:<?php echo $base_1d_manual ?>%;"><jdoc:include type="modules" name="base-1d"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1e')) { ?>
				<div class="base-1" style="width:<?php echo $base_1e_manual ?>%;"><jdoc:include type="modules" name="base-1e"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-1f')) { ?>
				<div class="base-1" style="width:<?php echo $base_1f_manual ?>%;"><jdoc:include type="modules" name="base-1f"  style="mod_standard"/></div><?php } ?>
				<div class="clear"></div>
			</div>
		    <?php }?>
		<?php endif; ?>
		
		</div>
		<div id ="base2_modules" class="block_holder">
						
		<?php if($this->params->get('base2_auto') != '1') : ?>
		<?php if ($this->countModules('base-2a') || $this->countModules('base-2b') || $this->countModules('base-2c') || $this->countModules('base-2d') || $this->countModules('base-2e') || $this->countModules('base-2f')) { ?>
			<div id="wrapper_base-2" class="block_holder_margin">
				<?php if ($this->countModules('base-2a')) { ?> 
				<div class="base-2" style="width:<?php echo $base2_width ?>;"><jdoc:include type="modules" name="base-2a"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2b')) { ?>
				<div class="base-2" style="width:<?php echo $base2_width ?>;"><jdoc:include type="modules" name="base-2b"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2c')) { ?>
				<div class="base-2" style="width:<?php echo $base2_width ?>;"><jdoc:include type="modules" name="base-2c"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2d')) { ?>
				<div class="base-2" style="width:<?php echo $base2_width ?>;"><jdoc:include type="modules" name="base-2d"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2e')) { ?>
				<div class="base-2" style="width:<?php echo $base2_width ?>;"><jdoc:include type="modules" name="base-2e"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2f')) { ?>
				<div class="base-2" style="width:<?php echo $base2_width ?>;"><jdoc:include type="modules" name="base-2f"  style="mod_standard"/></div><?php } ?>
				<div class="clear"></div>
		    </div>		
		    <?php }?>
							
		<?php else : ?>

		<?php if ($this->countModules('base-2a') || $this->countModules('base-2b') || $this->countModules('base-2c') || $this->countModules('base-2d') || $this->countModules('base-2e') || $this->countModules('base-2f')) { ?>
			<div id="wrapper_base-2" class="block_holder_margin">
				<?php if ($this->countModules('base-2a')) { ?> 
				<div class="base-2" style="width:<?php echo $base_2a_manual ?>%;"><jdoc:include type="modules" name="base-2a"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2b')) { ?>
				<div class="base-2" style="width:<?php echo $base_2b_manual ?>%;"><jdoc:include type="modules" name="base-2b"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2c')) { ?>
				<div class="base-2" style="width:<?php echo $base_2c_manual ?>%;"><jdoc:include type="modules" name="base-2c"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2d')) { ?>
				<div class="base-2" style="width:<?php echo $base_2d_manual ?>%;"><jdoc:include type="modules" name="base-2d"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2e')) { ?>
				<div class="base-2" style="width:<?php echo $base_2e_manual ?>%;"><jdoc:include type="modules" name="base-2e"  style="mod_standard"/></div><?php } ?>
				<?php if ($this->countModules('base-2f')) { ?>
				<div class="base-2" style="width:<?php echo $base_2f_manual ?>%;"><jdoc:include type="modules" name="base-2f"  style="mod_standard"/></div><?php } ?>
				<div class="clear"></div>
			</div>
		<?php }?>
		<?php endif; ?>

		<?php if ($this->countModules( 'footer-1' )) : ?>    
			<div id="footer-1" class="block_holder_margin">
				<jdoc:include type="modules" name="footer-1" style="mod_standard" />
				<div class="clear"></div>
			</div>
		<?php endif; ?>
		<?php if ($this->countModules( 'footer-2' )) : ?>  
			<div id="footer-2" class="block_holder_margin">
				<jdoc:include type="modules" name="footer-2" style="mod_standard" />
				<div class="clear"></div>
			</div>
		<?php endif; ?>

		<div id="container_footermenu" class="j51container">
		<?php if($this->params->get('footermenuPosition') == '1') : ?>
			<div id="footermenu">
				<jdoc:include type="modules" name="footermenu" />
				<div class="clear"></div>
			</div>
		<?php else : ?>
			<div id="footermenu">
				 <?php echo $footermenu; ?>
				 <div class="clear"></div>
			</div>
		<?php endif; ?>
		<div class="clear"></div>
		</div>
		<div id="container_copyright" class="j51container">
				<div id="copyright">
					<p><?php echo $this->params->get('copyright'); ?><br /></p>
				</div>
				<div class="clear"></div>
		</div>

		</div>
	</div>
</div>

