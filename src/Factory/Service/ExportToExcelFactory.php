<?php

namespace ZfMetal\Datagrid\Factory\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ExportToExcelFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {

        $config = $container->get('Config');
        
        /* @var $application \Zend\Mvc\Application */
        $application = $container->get('application');

        return new \ZfMetal\Datagrid\Service\ExportToExcel(isset($config['zf-metal-datagrid.exports']) ? $config['zf-metal-datagrid.exports'] : array(), $application);
    }

}
