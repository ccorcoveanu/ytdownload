<?php
namespace App\Middleware;

use Slim\Http\Response;
use Slim\Http\Request;

class Json
{
    public function __invoke(Request $request, Response $response, $next)
    {
        $newResponse = $next($request, $response);
        $newResponse = $newResponse
            ->withHeader('Content-type', 'application/json');

        return $newResponse;
    }
}