<?php/*------------------------------------------------------------------------# mod_sbahjaoui_Contact - Sbahjaoui Contact Module# ------------------------------------------------------------------------# author Soufiane Bahjaoui# copyright Copyright (C) 2013 sbahjaoui-info.com. All Rights Reserved.# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL# Websites: http://www.sbahjaoui-info.com# Technical Support: Forum - http://www.sbahjaoui-info.com/en/forum-en.html-------------------------------------------------------------------------*/// no direct accessdefined('_JEXEC') or die('Restricted access');jimport('joomla.form.formfield');class JFormFieldAsset extends JFormField {    protected $type = 'Asset';    protected function getInput() {		JHTML::_('behavior.framework');			$document	= &JFactory::getDocument();				if (!version_compare(JVERSION, '3.0', 'ge')) {			$checkJqueryLoaded = false;			$header = $document->getHeadData();			foreach($header['scripts'] as $scriptName => $scriptData)			{				if(substr_count($scriptName,'/jquery')){					$checkJqueryLoaded = true;				}			}							//Add js			if(!$checkJqueryLoaded) 			$document->addScript(JURI::root().$this->element['path'].'js/jquery.min.js');			$document->addScript(JURI::root().$this->element['path'].'js/chosen.jquery.min.js');					$document->addScript(JURI::root().$this->element['path'].'js/colorpicker/colorpicker.js');			$document->addScript(JURI::root().$this->element['path'].'js/sbahjaoui.js');			//Add css         			$document->addStyleSheet(JURI::root().$this->element['path'].'css/sbahjaoui.css');			$document->addStyleSheet(JURI::root().$this->element['path'].'js/colorpicker/colorpicker.css');        			$document->addStyleSheet(JURI::root().$this->element['path'].'css/chosen.css');       			$document->addStyleDeclaration('.switcher-yes,.switcher-no{background-image:url(../'.JText::_('YESNO_IMAGE').')}');      				}else{			$document->addScript(JURI::root().$this->element['path'].'js/colorpicker/colorpicker.js');			$document->addScript(JURI::root().$this->element['path'].'js/sbahjaoui.js');			//Add css         			$document->addStyleSheet(JURI::root().$this->element['path'].'css/sbahjaoui.css');			$document->addStyleSheet(JURI::root().$this->element['path'].'js/colorpicker/colorpicker.css'); 		  		}                return null;    }}?>