<?php
$container = $app->getContainer();

// Data access endpoints
$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

// view renderer
$container['view'] = function ($container) {
    $settings = $container->get('settings')['renderer'];
    $view = new \Slim\Views\Smarty($settings['template_path'], [
        'cacheDir' => $settings['template_cache'],
        'compileDir' => $settings['template_compile'],
    ]);

    $view->registerPlugin('modifier', 'count', 'count');

    return $view;
};

// Site Controller dependencies
$container['Home'] = function ($container) {
    return new App\Site\Home($container->get('view'));
};

// API Controller dependencies
$container['Debug'] = function ($container) {
    return new App\Api\Debug();
};