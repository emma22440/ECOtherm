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

defined('_JEXEC') or die('Restricted access'); // no direct access
$document = JFactory::getDocument();
$lang = JFactory::getLanguage();
$result=$lang->getTag();

$document->addScriptDeclaration('
	var sbahjaoui_contact = jQuery.noConflict();
	sbahjaoui_contact(document).ready(function(){

	 sbahjaoui_contact("#sbahjaoui_form").validate(
		 {
		  rules: {
			name: {
			  required: '.$params->get("name_req").',
			  minlength: 3,
			  maxlength: 30
			
			},
			email: {
			  maxlength: 40,
			  required: '.$params->get("email_req").',
			  email: true
			},
			phone: {
			  minlength: 6,
			  maxlength: 16,
			  required: '.$params->get("phone_req").',
			  number: true
			},
			website: {
			  minlength: 10,
			  maxlength: 60,
			  required: '.$params->get("website_req").',
			  url: true
			},
			subject: {
			  minlength: 3,
			  maxlength: 40,
			  required: '.$params->get("subject_req").',
			},
			message: {
			  minlength: 20,
			  required: true
			}
		  },
		  

		  highlight: function(label) {
			sbahjaoui_contact(label).closest(".control-group").addClass("error");
		  },
		  success: function(label) {
			label
			  .addClass("valid")
			  .closest(".control-group").addClass("success");
		  }
		 });
	});'); 


If ($result=="ar-AA"){ 
$document->addStyleSheet(JURI::root().'modules/mod_sbahjaoui_contact/assets/sbahjaoui_contact_rtl.css');
} else {
$document->addStyleSheet(JURI::root().'modules/mod_sbahjaoui_contact/assets/sbahjaoui_contact.css');
}
$document->addStyleSheet(JURI::root().'modules/mod_sbahjaoui_contact/assets/bootstrap.min.css');
if($params->get('enablejQuery')== 1){
$document->addScript(JURI::base(true). "/modules/mod_sbahjaoui_contact/js/jquery.js");
}
$document->addScript(JURI::base(true). "/modules/mod_sbahjaoui_contact/js/jquery.validate.js");
$document->addScript(JURI::base(true). "/modules/mod_sbahjaoui_contact/assets/sbahjaoui_captcha.js");

$sbonsubmit = 'onsubmit="return checkform(this, code)"';
$sbahjaoui_captcharhtml = '<div class="controls"><label>' . JText::_( 'SB_LABEL_CAPTCHA' ) . '</label>


<script type="text/javascript">
document.write("<span class=\'sb_captcha\'>"+ a + " + " + b +"</span>");
</script>

<div class="controls">
<input type="input" name="input" class="sbahjaoui" />
</div></div>' . "\n";



echo "<div id='titlesbahjaoui'>";
echo "<h3>".JText::_( 'SB_LABEL_TITLE' )."</h3>";
echo "</div>";
require_once __DIR__ . '/helper.php';

$item = modSbahjaoui_contactHelper::getItem($params);

require_once ('helper.php');

if(isset($_POST['sbahjaoui_btn'])){
$jinput=JFactory::getApplication()->input;
//$user = JFactory::getUser();
$mainframe = JFactory::getApplication();
$name = $jinput->get('name','','STRING');
$name = htmlspecialchars($name);
$email = $jinput->get('email','','RAW');
$email = htmlspecialchars($email);
$message = $jinput->get('message','','RAW');
$message = htmlspecialchars($message);
$subject = $jinput->get('subject','','STRING');
$subject = htmlspecialchars($subject);
$phone = $jinput->get('phone','','STRING');
$phone = htmlspecialchars($phone);
$website = $jinput->get('website','','STRING');
$website = htmlspecialchars($website);


if(modSbahjaoui_contactHelper::saveData($name,$email,$message,$phone,$website,$subject,$params)){
		JFactory::getApplication()->redirect(JURI::base(),'<h2 style="color:#00ff00;text-align:center;">'.JText::_( "SB_LABEL_CONTACT" ).'</h2>','');
		
} else{
		JFactory::getApplication()->redirect(JURI::base(),'<h2 style="color:#ff0000;text-align:center;">'.JText::_( 'SB_LABEL_ERROR' ).'</h2>','');
}

}else{
require(JModuleHelper::getLayoutPath('mod_sbahjaoui_contact'));
}


?>