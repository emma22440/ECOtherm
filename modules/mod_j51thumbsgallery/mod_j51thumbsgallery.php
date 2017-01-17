<?php
/**
* @title	    J51 Thumbs Gallery
* @version		1.0
* @website		http://www.joomla51.com
* @copyright	Copyright (C) 2012 Joomla51.com. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
*/

defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
if(!defined('DS')){
define('DS',DIRECTORY_SEPARATOR);
}

require_once (dirname(__FILE__).DS.'helper.php');

require(JModuleHelper::getLayoutPath('mod_j51thumbsgallery'));
?>