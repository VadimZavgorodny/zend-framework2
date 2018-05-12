<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 12.05.2018
 * Time: 18:44
 */

namespace Helloworld\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $ctr = new IndexController();

        $ctr->setGreetingService(
            $serviceLocator->getServiceLocator()
                ->get('greetingService')
        );

        return $ctr;
    }

}