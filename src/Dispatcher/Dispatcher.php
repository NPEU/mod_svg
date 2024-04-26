<?php

namespace NPEU\Module\Svg\Site\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;
use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

/**
 * Dispatcher class for mod_svg
 *
 * @since  4.4.0
 */
class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
    use HelperFactoryAwareTrait;

    /**
     * Returns the layout data.
     *
     * @return  array
     */
    protected function getLayoutData(): array
    {
        $data   = parent::getLayoutData();
        $params = $data['params'];

        $data['module']->content = trim($data['module']->content);
        $data['border']          = $params->get('border');


        /*$data['stuff'] = $this->getHelperFactory()
            ->getHelper('SvgHelper')
            ->getStuff($params, $this->getApplication());*/

        return $data;
    }
}
