<?php
namespace App\Api;
use Slim\Http\Request;
use Slim\Http\Response;

class Debug
{
    public function __construct()
    {

    }

    public function test(Request $request, Response $response)
    {
        echopre('test');die;
    }
}