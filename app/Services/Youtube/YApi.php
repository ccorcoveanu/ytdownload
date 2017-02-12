<?php
class YApi
{
    /**
     * @var string
     */
    protected $key = 'AIzaSyCJ0NaWuUeFPmw3tRwJRBWscwDE2YAFKNw';
    protected $baseUrl = 'https://www.googleapis.com/youtube/v3';

    /**
     * YApi constructor.
     * @param $curlClient
     * @param array $settings
     */
    public function __construct($curlClient, array $settings = [])
    {
        if ( isset($settings['key']) ) $this->key = $settings['key'];
    }

    /**
     * @param $url
     *
     * @return array
     */
    public function getPlaylistInfo($url)
    {

    }
}