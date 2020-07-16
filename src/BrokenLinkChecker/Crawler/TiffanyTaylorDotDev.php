<?php declare(strict_types=1);


namespace BrokenLinkChecker\Crawler;


class TiffanyTaylorDotDev implements Crawler
{
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function findHyperlinks()
    {
        // call request Html
    }
}