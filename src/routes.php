<?php
// API
$app->get('/v1/debug', 'Debug:test');
$app->get('/v1/youtube/playlist/{id}', 'Youtube:playlist')
    ->add(new App\Middleware\Cors());
$app->get('/v1/shared-content/fetch', 'Ads:fetch')
    ->add(new App\Middleware\Cors());
$app->get('/v1/youtube/download', 'Youtube:download');

// Site
$app->get('/', 'Home:index');