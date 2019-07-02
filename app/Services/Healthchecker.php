<?php


namespace App\Services;



use GuzzleHttp\Client;

class Healthchecker
{
    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client();
    }
}
