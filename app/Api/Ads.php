<?php
namespace App\Api;

use App\Services\Youtube\YApi;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Smarty;

class Ads extends ApiBase
{
    /**
     * @var Smarty
     */
    protected $view;

    public function __construct(Smarty $view)
    {
        $this->view = $view;
    }

    /**
     * Fetch one add
     *
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function fetch(Request $request, Response $response, $args)
    {
        $add = [];
        return $response->withJson(
            $this->success([
                'add' => $add,
                'html' => $this->view->fetch('partials/ads.tpl', [
                    'add' => $add
                ])
            ])
        );
    }
}