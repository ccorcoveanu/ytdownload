<?php
namespace App\Services\Youtube;

use GuzzleHttp\Client;

class YApi
{
    /**
     * @var string
     */
    protected $key = 'AIzaSyCJ0NaWuUeFPmw3tRwJRBWscwDE2YAFKNw';
    protected $baseUrl = 'https://www.googleapis.com/youtube/v3';

    protected $client;

    /**
     * YApi constructor.
     * @param Client $client
     * @param array $settings
     */
    public function __construct(Client $client, array $settings = [])
    {
        if ( isset($settings['key']) ) $this->key = $settings['key'];
        $this->client = $client;
    }

    /**
     * @param $playlistId
     *
     * @return array
     */
    public function getPlaylistInfo($playlistId)
    {
        $youtubeInfo = $this->client->request('GET', 'playlistItems', [
            'query' => [
                'key' => $this->key,
                'part' => 'snippet,contentDetails',
                'playlistId' => $playlistId,
                'maxResults' => 50
            ],
        ]);

        return json_decode($youtubeInfo->getBody());
    }
}