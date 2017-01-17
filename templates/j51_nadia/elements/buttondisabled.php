<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.form.formfield');
 
class JFormFieldbuttondisabled extends JFormField {
 
        protected $type = 'buttondisabled';
 
        // getLabel() left out
 
        public function getInput() {

            return 	'<fieldset id="jform_params_top1_padding" class="btn-group radio disabled">'.
					'<label class="btn" for="jform_params_bottom1_auto0"> No </label>'.
					'<label class="btn" for="jform_params_bottom1_auto0"> Yes </label>'.
					'</fieldset>';
        }
}
