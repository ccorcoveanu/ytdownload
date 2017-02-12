<?php
namespace App\Middleware;

use Slim\Http\Response;
use Slim\Http\Request;

class Cors
{
    public function __invoke(Request $request, Response $response, $next)
    {
        $newResponse = $next($request, $response);
        $newResponse = $newResponse
            ->withHeader('Access-Control-Allow-Origin', '*');

        return $newResponse;
    }
}