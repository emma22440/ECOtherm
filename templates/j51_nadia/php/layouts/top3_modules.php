

    <div id="top3_modules" class="block_holder">

    <?php if($this->params->get('top3_auto') != '1') : ?>
    <?php if ($this->countModules('top-3a') || $this->countModules('top-3b') || $this->countModules('top-3c') || $this->countModules('top-3d') || $this->countModules('top-3e') || $this->countModules('top-3f')) { ?>
        <div id="wrapper_top-3" class="block_holder_margin">
            <?php if ($this->countModules('top-3a')) { ?> 
            <div class="top-3" style="width:<?php echo $top3_width ?>;"><jdoc:include type="modules" name="top-3a"  style="mod_standard"/></div><?php } ?>
            <?php if ($this->countModules('top-3b')) { ?>
            <div class="top-3" style="width:<?php echo $top3_width ?>;"><jdoc:include type="modules" name="top-3b"  style="mod_standard"/></div><?php } ?>
            <?php if ($this->countModules('top-3c')) { ?>
            <div class="top-3" style="width:<?php echo $top3_width ?>;"><jdoc:include type="modules" name="top-3c"  style="mod_standard"/></div><?php } ?>
            <?php if ($this->countModules('top-3d')) { ?>
            <div class="top-3" style="width:<?php echo $top3_width ?>;"><jdoc:include type="modules" name="top-3d"  style="mod_standard"/></div><?php } ?>
            <?php if ($this->countModules('top-3e')) { ?>
            <div class="top-3" style="width:<?php echo $top3_width ?>;"><jdoc:include type="modules" name="top-3e"  style="mod_standard"/></div><?php } ?>
            <?php if ($this->countModules('top-3f')) { ?>
            <div class="top-3" style="width:<?php echo $top3_width ?>;"><jdoc:include type="modules" name="top-3f"  style="mod_standard"/></div><?php } ?>
            <div class="clear"></div>
        </div>                  
        <?php }?>

    <?php endif; ?>

    </div>



<?php if ($this->countModules( 'breadcrumb' )) : ?>
<div id="breadcrumb">
    <jdoc:include type="modules" name="breadcrumb" style="mod_standard" />
    <div class="clear"></div>
</div>
<?php endif; ?>