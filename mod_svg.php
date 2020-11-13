<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_svg
 *
 * @copyright   Copyright (C) NPEU 2020.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

// Include the svg functions only once
JLoader::register('ModSvgHelper', __DIR__ . '/helper.php');

#$thing = trim($params->get('thing'));

#$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

require JModuleHelper::getLayoutPath('mod_svg', $params->get('layout', 'default'));