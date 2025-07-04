<?php
declare(strict_types=1);

// Declaring modules namespace here.  Allows us to automatically reference classes in the 
// src folder of our module with path-names relative to the src folder.
// IMPORTANT:  Concerning the directory structure of your module:  WIthin the view folder
// you will have so-called action templates.  These must be in a subfolder that splits the 
// that duplicates this namespace name, except splitting the CamelCase words with a hyphen 
// using all lower case.  In this case, we have view/hello-world .   Can't find any mention of 
// this in the Omeka-S developer docs!

namespace HelloWorld;

// Referencing these classes permits us to reference them by name without the full path. 
use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'site' => [
                'child_routes' => [
                    'helloworld' => [
                        'type'    => Segment::class,
                        'options' => [
                            'route'    => '/helloworld[/:action]',
                            'defaults' => [
                                '__NAMESPACE__' => 'HelloWorld\Controller',
                                'controller' => Controller\HelloController::class,
                                'action'     => 'index',
                            ],
                        ],
                    ],
                    // New Route: used to generate links, among other things.
                    'hellogreet' => [
                        'type' => Literal::class, // exact match of URI path
                        'options' => [
                            'route' => '/helloworld/greet', // URI path
                            'defaults' => [
                                '__NAMESPACE__' => 'HelloWorld\Controller',
                                'controller' => Controller\HelloController::class, // unique name
                                'action'     => 'greet',

                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        // Tell the application how to instantiate our controller class
        'factories' => [
            // Add the HelloController class to the array of invokable controllers. 
            Controller\HelloController::class => InvokableFactory::class,
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            dirname(__DIR__) . '/view',
        ],
    ],
];