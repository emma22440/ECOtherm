
    <div class="hornavmenu-top">
    <?php require("social_icons.php"); ?>
        <div class="wrapper960">

            <div class="logo"> 
                <a href="index.php" title="<?php echo $siteName; ?>">
                <?php if($this->params->get('logoimagefile_sm') == '') : ?>
                    <img class="logo-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/images/logo_sm.png" alt="Logo" />
                <?php elseif($this->params->get('logoimagefile_sm') != '') : ?>
                    <img class="logo-image" src="<?php echo $this->baseurl ?>/<?php echo $logoimagefile_sm; ?>" alt="Logo" />
                <?php endif; ?>
                </a> 
            </div>

            <?php if($this->params->get('hornavPosition') == '1') : ?>
                <div class="hornav">
                    <jdoc:include type="modules" name="hornav" />
                </div>
            <?php else : ?>
                <div class="hornav">
                    <?php echo $hornav; ?>

                </div>
            <?php endif; ?>
        </div>

    </div>
    <div class="clear"></div>




