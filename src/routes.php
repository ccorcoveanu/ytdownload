<?php
// API
$app->get('/v1/debug', 'Debug:test');

// Site
$app->get('/', 'Home:index');