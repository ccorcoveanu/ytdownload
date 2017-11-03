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

    protected $playlistUrl = 'https://youtube.com/playlist?list=';

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

        return $response->withJson(
            $this->success([
                'items' => $items->items,
                'html' => $this->view->fetch('lists/youtube_items.tpl', [
                    'youtube_items' => $items->items
                ])
            ])
        );
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function download(Request $request, Response $response, $args)
    {
        set_time_limit(0);

        $playlistId = $request->getParam('playlist_id', '');
        $all_items  = $request->getParam('all_items', []);
        $all_items = array_slice($all_items, 0, 5);

        $command = 'youtube-dl --extract-audio --audio-format mp3 -ci -o "yt-dl/' . $playlistId . '/%(title)s-%(id)s.%(ext)s"' .
            ' --playlist-items ' . implode(',', $all_items) . ' '.
            $this->playlistUrl . $playlistId;

        exec($command);
        exec("tar -C ./yt-dl -zcvf yt-dl/$playlistId.tar.gz $playlistId");

        return $response->withRedirect("/?playlist=$playlistId");
    }
}