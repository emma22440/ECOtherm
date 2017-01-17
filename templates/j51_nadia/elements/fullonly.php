<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.form.formfield');
 
class JFormFieldfullonly extends JFormField {
 
        protected $type = 'fullonly';
 
        // getLabel() left out
 
        public function getInput() {

            return 	'<div class="notice full-only">'.
            		'<p>Faded out options are only available in the full version of this template. To use these features you can purchase this template at the link below. Once purchased install the template from your down via your extensions manager to update the template and enable all options.'.
					'</div>';
        }
}
