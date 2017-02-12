<?php
// API
$app->get('/v1/debug', 'Debug:test');
$app->get('/v1/youtube/playlist/{id}', 'Youtube:playlist')
    ->add(new App\Middleware\Cors());

// Site
$app->get('/', 'Home:index');