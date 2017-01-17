<?php
/**
/*------------------------------------------------------------------------
# mod_sbahjaoui_Contact - Sbahjaoui Contact Module
# ------------------------------------------------------------------------
# author Soufiane Bahjaoui
# copyright Copyright (C) 2013 sbahjaoui-info.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.sbahjaoui-info.com
# Technical Support: Forum - http://www.sbahjaoui-info.com/en/forum-en.html
-------------------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die('Restricted access');

class modSbahjaoui_contactHelper
{
    static public function getItem($params) {
        $css_class = $params->get('classname');
        return "";
    }
	
	public static function saveData($name,$email,$message,$phone,$website,$subject,$params){
	$db = JFactory::getDBO();	 	// Create a new query object.	$query = $db->getQuery(true); 	// Insert columns.	$columns = array('name', 'email', 'message', 'phone', 'website', 'subject'); 	// Insert values.	$values = array($db->quote('$name'), $db->quote('$email'), $db->quote('$message'), $db->quote('$phone'), $db->quote('$website'), $db->quote('$subject')); 	// Prepare the insert query.	$query    ->insert($db->quoteName('#__sbahjaoui_contact'))    ->columns($db->quoteName($columns))    ->values(implode(',', $values)); 	// Set the query using our newly populated query object and execute it.	$db->setQuery($query);	//$db->execute();
	//$query = "INSERT INTO `#__sbahjaoui_contact` (`name`,`email`,`message`,`phone`,`website`,`subject`) VALUES ('$name','$email','$message','$phone','$website','$subject')";
	//$db->setQuery($query);
	if($db->query()){
		self::sendEmailNotification($name,$email,$message,$phone,$website,$subject,$params);
		return true;
	}else{
		return false;
	}
	}
	
	public static function sendEmailNotification($name,$email,$message,$phone,$website,$subject,$params){
		$lang = JFactory::getLanguage();
		$result=$lang->getTag();
		$mailer = JFactory::getMailer();
		$sender = array($email,$name);
		$mailer->setSender($sender);
		$mailer->addRecipient($params->get('receiver_email'));
		If ($result=="fr-FR"){ 
			$mailer->setSubject("Nouvel Utilisateur");
			$body="<h3>Un nouvel utilisateur, vous contact avec les informations suivantes</h3><br>";
			$body.="<span style=\"color:blue;\">Nom</span> : $name<br>";
			$body.="<span style=\"color:blue;\">Email</span> : $email<br>";
			$body.="<span style=\"color:blue;\">Message</span> : $message<br>";			$body.="<span style=\"color:blue;\">Téléphone</span> : $phone<br>";			$body.="<span style=\"color:blue;\">Siteweb</span> : $website<br>";			$body.="<span style=\"color:blue;\">Sujet</span> : $subject<br>";
			$mailer->setBody($body);
			$mailer->isHTML(true);
			$mailer->send();
		}elseif ($result=="ar-AA") { 
			$mailer->setSubject("مستخدم جديد");
			$body="<h3>مستخدم جديد ذو المعلومات التالية</h3><br>";
			$body.="<span style=\"color:blue;\">الإ سم</span> : $name<br>";
			$body.="<span style=\"color:blue;\">البريد الإلكتروني</span> : $email<br>";
			$body.="<span style=\"color:blue;\">مضمون الرسالة</span> : $message<br>";			$body.="<span style=\"color:blue;\">الهاتف</span> : $phone<br>";			$body.="<span style=\"color:blue;\">الموقع</span> : $website<br>";			$body.="<span style=\"color:blue;\">الموضوع</span> : $subject<br>";
			$mailer->setBody($body);
			$mailer->isHTML(true);
			$mailer->send();
		}else{
			$mailer->setSubject("New contact Form Submited");
			$body="<h3>A new User Contact you with the following information</h3><br>";
			$body.="<span style=\"color:blue;\">Name</span> : $name<br>";
			$body.="<span style=\"color:blue;\">Email</span> : $email<br>";
			$body.="<span style=\"color:blue;\">Message</span> : $message<br>";			$body.="<span style=\"color:blue;\">Phone</span> : $phone<br>";			$body.="<span style=\"color:blue;\">Website</span> : $website<br>";			$body.="<span style=\"color:blue;\">Subject</span> : $subject<br>";
			$mailer->setBody($body);
			$mailer->isHTML(true);
			$mailer->send();
		}
		
	}
}
