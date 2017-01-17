<?php
/*================================================================*\
|| # Copyright (C) 2010  Joomla51. All Rights Reserved.           ||
|| # license - PHP files are licensed under  GNU/GPL V2           ||
|| # license - CSS  - JS - IMAGE files are Copyrighted material   ||
|| # Website: http://www.joomla51.com                             ||
\*================================================================*/
defined('_JEXEC') or die('Restricted access');

function modChrome_mod_standard($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>

		<div class="module <?php echo $params->get('moduleclass_sfx'); ?>">
			<div class="module_surround">
				<?php if ($module->showtitle) : ?>
					<?php
						$title = explode(' ', $module->title);
						$title_part1 = array_shift($title);
						$title_part2 = join(' ', $title);
					?>
				<div class="module_header">
					<h3 class="<?php echo $params->get('header_class'); ?>"><?php echo $title_part1.' '; ?><?php echo $title_part2; ?></h3>
					<span class="hairline"></span>
				</div>
				<?php endif; ?>
				<div class="module_content">
				<?php echo $module->content; ?>
				</div> 
			</div>
		</div>
	<?php endif;
}	


function modChrome_mod_spanhead($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<div class="module <?php echo $params->get('moduleclass_sfx'); ?>">
			<?php if ($module->showtitle) : ?>

				<?php
					$title = explode(' ', $module->title);
					$title_part1 = array_shift($title);
					$title_part2 = join(' ', $title);
				?>

				<h3><span><span class="first-word"><?php echo $title_part1.' '; ?></span><?php echo $title_part2; ?></span></h3>
			<?php endif; ?>
			<div class="module_content">
			<?php echo $module->content; ?>
			</div>
		</div>
	<?php endif;
}	


function modChrome_mod_tabs($module, $params, $attribs)
{
	$area = isset($attribs['id']) ? (int) $attribs['id'] :'1';
	$area = 'area-'.$area;

	static $modulecount;
	static $modules;

	if ($modulecount < 1)
	{
		$modulecount = count(JModuleHelper::getModules($module->position));
		$modules = array();
	}

	if ($modulecount == 1)
	{
		$temp = new stdClass;
		$temp->content = $module->content;
		$temp->title = $module->title;
		$temp->params = $module->params;
		$temp->id = $module->id;
		$modules[] = $temp;
		// list of moduletitles
		// list of moduletitles
		echo '<div id="'. $area.'" class="tabouter"><ul class="tabs">';

		foreach ($modules as $rendermodule)
		{
			echo '<li class="tab"><a href="#" id="link_'.$rendermodule->id.'" class="linkopen" onclick="tabshow(\'module_'. $rendermodule->id.'\');return false">'.$rendermodule->title.'</a></li>';
		}
		echo '</ul>';
		$counter = 0;
		// modulecontent
		foreach ($modules as $rendermodule)
		{
			$counter ++;

			echo '<div tabindex="-1" class="tabcontent tabopen" id="module_'.$rendermodule->id.'">';
			echo $rendermodule->content;
			echo '</div>';
		}
		$modulecount--;
		echo '</div>';
	} else {
		$temp = new stdClass;
		$temp->content = $module->content;
		$temp->params = $module->params;
		$temp->title = $module->title;
		$temp->id = $module->id;
		$modules[] = $temp;
		$modulecount--;
	}
}