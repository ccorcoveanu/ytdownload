<?php
namespace App\Site;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Smarty;

class Home
{
    /**
     * @var Smarty
     */
    protected $view;

    /**
     * Home constructor.
     * @param Smarty $view
     */
    public function __construct(Smarty $view)
    {
        $this->view = $view;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(Request $request, Response $response)
    {
        return $this->view->render($response, 'home.tpl', [
            'page' => [
                'title' => 'Home',
                'body_classes' => 'home'
            ]
        ]);
    }
}