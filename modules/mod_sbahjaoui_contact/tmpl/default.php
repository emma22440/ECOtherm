<?php 
/*------------------------------------------------------------------------
# mod_sbahjaoui_Contact - Sbahjaoui Contact Module
# ------------------------------------------------------------------------
# author Soufiane Bahjaoui
# copyright Copyright (C) 2013 sbahjaoui-info.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.sbahjaoui-info.com
# Technical Support: Forum - http://www.sbahjaoui-info.com/en/forum-en.html
-------------------------------------------------------------------------*/
defined('_JEXEC') or die('Restricted access'); 

?>

<script type="text/javascript">
var sbahjaoui_contact = jQuery.noConflict();
(function(sbahjaoui_contact) {

	if(sbahjaoui_contact("html").attr("lang")=='fr-fr')
	
	{
	jQuery.extend(jQuery.validator.messages, {
	  required: "Ce champ est obligatoire",
	  email: "Entrer une adresse email valide",
	  url: "Entrer une URL valide",
	  number: "Entrer un numéro valide",
	  maxlength: jQuery.validator.format("Maximum {0} caractéres."),
	  minlength: jQuery.validator.format("Minimum {0} caractéres."),
	  
	});
	}
	
	
	else if(sbahjaoui_contact("html").attr("lang")=='ar-aa')
	
	{
	jQuery.extend(jQuery.validator.messages, {
	  required: "هذا الحقل مطلوب",
	  email: "البريد الإلكتروني غير صحيح",
	  url: "عنوان الموقع غير صحيح",
	  number: "رقم الهاتف غير صحيح",
	  maxlength: jQuery.validator.format("الحد الأقصى {0} حرفا."),
	  minlength: jQuery.validator.format("الحد الأدنى {0} حرفا."),
	  
	});
	}
	else	{
	jQuery.extend(jQuery.validator.messages, {
	  required: "this field is required.",
	  email: "Please enter a valid email adress.",
	  url: "Please enter a valid URL",
	  number: "Please enter a valid number",
	  maxlength: jQuery.validator.format("Maximum {0} characters."),
	  minlength: jQuery.validator.format("Minimum {0} characters."),
	  
	});
	}

})(jQuery);
</script> 

	
<div class="sbahjaoui_contact<?php echo $params->get( 'moduleclass_sfx' ) ?>">
	
	<form name="sbahjaoui_form" id="sbahjaoui_form" method="post" <?php echo $sbonsubmit; ?>>
	
	 
	 
	 	  <?php 
				if($params->get('name_publish')==1){
				
		  ?>
		  
	<!-- name Field -->
	 <div class="control-group">
	<label  for="name" class="control-label"><?php echo JText::_( 'SB_NAME' ); ?></label>
		<div class="control-group">
	<input class="sbahjaoui" type="text" name="name" id="name" placeholder="<?php echo JText::_( 'SB_LABEL_NAME' ); ?>">
		</div>
	</div>
		  <?php } else {}?>
		  
		  
		  <?php 
				if($params->get('email_publish')==1){
		  ?>
		  
	<!-- email Field -->
	<div class="control-group">
	<label for="email"><?php echo JText::_( 'SB_EMAIL' ); ?></label>
	<div class="control-group">
	<input class="sbahjaoui" type="email" name="email" id="email" maxlength="45" placeholder="<?php echo JText::_( 'SB_LABEL_EMAIL' ); ?>">
	</div>
	</div>
		  <?php } else {}?>
	 
	 
		 <?php 
				if($params->get('phone_publish')==1){
		  ?>
		  
	<!-- phone Field -->
	<div class="control-group">
	<label for="phone"><?php echo JText::_( 'SB_PHONE' ); ?></label>
	<div class="control-group">
	<input class="sbahjaoui" type="number" name="phone" id="phone" maxlength="22" placeholder="<?php echo JText::_( 'SB_LABEL_PHONE' ); ?>">
	</div>
	</div>
		  <?php } else {}?>
		  
		  <?php 
				if($params->get('website_publish')==1){
		  ?>
		  
	<!-- website Field -->
	<div class="control-group">
	<label for="website"><?php echo JText::_( 'SB_WEBSITE' ); ?></label>
	<div class="control-group">
	<input class="sbahjaoui" type="url" name="website" id="website" placeholder="<?php echo JText::_( 'SB_LABEL_WEBSITE' ); ?>">
	</div>
	</div>
		  <?php } else {}?> 
		  
		   <?php 
				if($params->get('subject_publish')==1){
		  ?>
		  
	<!-- subject Field -->
	<div class="control-group">
	<label for="website"><?php echo JText::_( 'SB_SUBJECT' ); ?></label>
	<div class="control-group">
	<input class="sbahjaoui" type="text" name="subject" id="subject" placeholder="<?php echo JText::_( 'SB_LABEL_SUBJECT' ); ?>">
	</div>
	</div>
		  <?php } else {}?> 
	
	<div class="control-group">
		<label for="message" class="control-label"><?php echo JText::_( 'SB_MESSAGE' ); ?></label>
		<div class="controls">
		<textarea name="message" id="message" placeholder="<?php echo JText::_( 'SB_LABEL_MESSAGE' ); ?>"></textarea>
		</div>
	</div>
	
	
	<?php 
				if($params->get('captcha_publish')==1){
		  ?>
		  
	<!-- captcha Field -->
	<div class="control-group">
	<?php print $sbahjaoui_captcharhtml; ?>
	</div>
		  <?php } else {}?> 
		  
		  <?php 
				if($params->get('receiver_email')){
		  ?>
		  
	<!-- send Field -->
	<div class="control-group">
	<input class="sendButton" type="submit" name="sbahjaoui_btn" id="sbahjaoui_btn" value="<?php echo JText::_('SB_LABEL_SEND'); ?>" />
	</div>
		  <?php } else {
		  echo '<p style="font-type:bold;color:#ff0000;">'.JText::_( 'SB_ADMIN_MAIL' ).'</p>';
		  }?> 
	

	</form>
</div>

