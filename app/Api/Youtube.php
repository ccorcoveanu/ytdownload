<?php
namespace App\Api;

use App\Services\Youtube\YApi;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Smarty;

class Youtube extends ApiBase
{
    /**
     * @var YApi
     */
    protected $yApi;

    /**
     * @var Smarty
     */
    protected $view;

    public function __construct(YApi $yApi, Smarty $view)
    {
        $this->yApi = $yApi;
        $this->view = $view;
    }

    public function playlist(Request $request, Response $response, $args)
    {
        $youtubeId = @$args['id'];
        $type = $request->getParam('type', 'html');

        if ( !$youtubeId ) {

        }

        $items = $this->yApi->getPlaylistInfo($youtubeId);

        if ( $type === 'html' ) {
            $data = $this->view->fetch('lists/youtube_items.tpl', [
                'youtube_items' => $items->items
            ]);
        }

        return $response->withJson(
            $this->success(['html' => $data])
        );
    }
}