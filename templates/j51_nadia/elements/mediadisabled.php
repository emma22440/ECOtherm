<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.form.formfield');
 
class JFormFieldmediadisabled extends JFormField {
 
        protected $type = 'mediadisabled';
 
        // getLabel() left out
 
        public function getInput() {

            return 	'<div class="input-prepend input-append disabled">'.
					'<div class="media-preview add-on">'.
					'<span class="hasTipPreview" title="">'.
					'<i class="icon-eye"></i>'.
					'</span>'.
					'</div>'.
					'<input id="jform_params_top1_bg" class="input-small field-media-input hasTipImgpath" type="text" title="" readonly="readonly" value="" name="jform[params][top1_bg]">'.
					'<span class="modal btn" onclick="return false;"> Select</span>'.
					'<span class="btn hasTooltip" onclick="return false;" >'.
					'<i class="icon-remove"></i>'.
					'</span>'.
					'</div>';
        }
}
