<?php declare(strict_types=1);

namespace BrokenLinkChecker;

use BrokenLinkChecker\HttpClient;

class Crawler
{
    private string $url;
    private HttpClient $httpClient;

    public function __construct(string $url, HttpClient $httpClient)
    {
        $this->url = $url;
        $this->httpClient = $httpClient;
    }

    public function crawl()
    {

    }
}