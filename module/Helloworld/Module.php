<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 12.05.2018
 * Time: 15:23
 */

namespace Helloworld;

use Zend\ModuleManager\ModuleManager;
use Zend\ModuleManager\ModuleEvent;

class Module
{
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ],
            ],
        ];
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function init(ModuleManager $moduleManager)
    {
        $moduleManager->getEventManager()->attach(
            ModuleEvent::EVENT_LOAD_MODULES_POST,
            [$this, 'onModulesPost']
        );
    }

    public function onModulesPost() {
        //die('Modules loaded!');
    }

//    public function getServiceConfig()
//    {
//        return array(
//            'invokables' => array(
//                'greetingService'
//                => 'Helloworld\Service\GreetingService'
//            )
//        );
//    }
}