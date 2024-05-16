<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_svg
 *
 * @copyright   Copyright (C) NPEU 2024.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

$data_svg = base64_encode($module->content);
?>
<img src="data:image/svg+xml;base64,<?php echo $data_svg; ?>" alt="" width="500">