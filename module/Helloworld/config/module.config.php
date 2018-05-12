<?
return [
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ]
    ],
    'router' => [
        'routes' => [
            'sayhello' => [
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => [
                    'route' => '/sayhello',
                    'defaults' => [
                        'controller' => 'Helloworld\Controller\Index',
                        'action' => 'index',
                    ],
                ],
            ],
        ]
    ],
    'controllers' => [
        'factories' => [
            //'Helloworld\Controller\Index' => 'Helloworld\Controller\IndexControllerFactory',
            'Helloworld\Controller\Index' => function ($serviceLocator) {
                $ctr = new Helloworld\Controller\IndexController();

                $ctr->setGreetingService(
                    $serviceLocator->getServiceLocator()
                        ->get('greetingService')
                );

                return $ctr;
            }
        ],
    ],
    'service_manager' => [
        'invokables' => [
            'greetingService' => 'Helloworld\Service\GreetingService',
        ],
    ]
];
?>