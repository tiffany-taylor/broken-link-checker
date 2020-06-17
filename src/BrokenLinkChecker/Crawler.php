<?php declare(strict_types=1);

namespace BrokenLinkChecker;

class Crawler
{
    private string $url;
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function crawl()
    {

    }
}