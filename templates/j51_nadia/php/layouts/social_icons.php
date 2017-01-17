	<div id="socialmedia">   
            <ul id="navigation">
                <?php if($social_rss != "") : ?>
                    <li class="social-rss"><a href="<?php echo $this->params->get('social_rss'); ?>" target="_blank" title="RSS"><i class="fa fa-rss"></i></a></li>
                <?php endif; ?>   
                <?php if($social_twitter != "") : ?>
                    <li class="social-twitter"><a href="<?php echo $this->params->get('social_twitter'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <?php endif; ?> 
                <?php if($social_facebook != "") : ?>
                    <li class="social-facebook"><a href="<?php echo $this->params->get('social_facebook'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <?php endif; ?> 
                <?php if($social_googleplus != "") : ?>
                    <li class="social-googleplus"><a href="<?php echo $this->params->get('social_googleplus'); ?>" target="_blank" title="GooglePlus"><i class="fa fa-google-plus"></i></a></li>
                <?php endif; ?> 
                <?php if($social_youtube != "") : ?>
                    <li class="social-youtube"><a href="<?php echo $this->params->get('social_youtube'); ?>" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                <?php endif; ?> 
                <?php if($social_pinterest != "") : ?>
                    <li class="social-pinterest"><a href="<?php echo $this->params->get('social_pinterest'); ?>" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                <?php endif; ?> 
                <?php if($social_instagram != "") : ?>
                    <li class="social-instagram"><a href="<?php echo $this->params->get('social_instagram'); ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <?php endif; ?> 
                <?php if($social_dribbble != "") : ?>
                    <li class="social-dribbble"><a href="<?php echo $this->params->get('social_dribbble'); ?>" target="_blank" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                <?php endif; ?> 
                <?php if($social_flickr != "") : ?>
                    <li class="social-flickr"><a href="<?php echo $this->params->get('social_flickr'); ?>" target="_blank" title="Flickr"><i class="fa fa-flickr"></i></a></li>
                <?php endif; ?> 
                <?php if($social_skype != "") : ?>
                    <li class="social-skype"><a href="<?php echo $this->params->get('social_facebook'); ?>" target="_blank" title="Skype"><i class="fa fa-skype"></i></a></li>
                <?php endif; ?> 
                <?php if($social_linkedin != "") : ?>
                    <li class="social-linkedin"><a href="<?php echo $this->params->get('social_linkedin'); ?>" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                <?php endif; ?> 
                <?php if($social_vimeo != "") : ?>
                    <li class="social-vimeo"><a href="<?php echo $this->params->get('social_vimeo'); ?>" target="_blank" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
                <?php endif; ?> 
                <?php if($social_yahoo != "") : ?>
                    <li class="social-yahoo"><a href="<?php echo $this->params->get('social_yahoo'); ?>" target="_blank" title="Yahoo"><i class="fa fa-yahoo"></i></a></li>
                <?php endif; ?> 
                <?php if($social_tumblr != "") : ?>
                    <li class="social-tumblr"><a href="<?php echo $this->params->get('social_tumblr'); ?>" target="_blank" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                <?php endif; ?> 
                <?php if($social_deviantart != "") : ?>
                    <li class="social-deviantart"><a href="<?php echo $this->params->get('social_deviantart'); ?>" target="_blank" title="DeviantArt"><i class="fa fa-deviantart"></i></a></li>
                <?php endif; ?> 
                <?php if($social_delicious != "") : ?>
                    <li class="social-delicious"><a href="<?php echo $this->params->get('social_delicious'); ?>" target="_blank" title="Delicious"><i class="fa fa-delicious"></a></li>
                <?php endif; ?> 

                <?php 
                $i = 0;
                if(is_array($json['social_custom_icon'])) {
                foreach($json['social_custom_icon'] as $key=>$value)  {
                ?>
                    <li class="social-<?php echo str_replace(' ', '', ($json['social_custom_name'][$i])); ?>">
                        <a href="<?php echo $json['social_custom_url'][$i]; ?>" target="_blank" title="<?php echo $json['social_custom_name'][$i]; ?>">
                            <i class="fa <?php echo $json['social_custom_icon'][$i]; ?>"></i>
                        </a>
                    </li>
                <?php $i++; } } ?>


            </ul>
        </div>  