<?php declare(strict_types=1);

namespace BrokenLinkChecker;

use GuzzleHttp\Client;

class HttpClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function makeRequest(): bool
    {
        return true; // TODO write code ...
    }
}
