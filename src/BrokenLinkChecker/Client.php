<?php declare(strict_types=1);

namespace BrokenLinkChecker;

use Amp\Http\Client\HttpClient;
use Amp\Http\Client\Request;
use Amp\Http\Client\Response;
use Amp\Promise;
use function Amp\call;

class Client
{
    private HttpClient $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function makeRequest(Request $request): Promise
    {
        return call(function() use ($request) {
            $response = yield $this->httpClient->request($request);

            if ($response->getStatus() !== 200) {
                throw new \Exception("Response from site was not 200");
            }
            return $response;
        });
    }



}