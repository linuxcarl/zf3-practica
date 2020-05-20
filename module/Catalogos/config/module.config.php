<?php
// this is practical https://docs.zendframework.com/tutorials/getting-started/routing-and-controllers/
namespace Catalogos;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\CatalogosController::class => InvokableFactory::class,
        ],
    ],
    // add routes for crud app
    'router' => [
        'routes' => [
            'catalogos' => [
                'type'    => Segment::class,
                'options' => [
                    //The square brackets indicate that a segment is optional
                    'route' => '/catalogos[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\CatalogosController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'catalogos' => __DIR__ . '/../view',
        ],
    ],
];
