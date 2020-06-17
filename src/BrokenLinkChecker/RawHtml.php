<?php declare(strict_types=1);

namespace BrokenLinkChecker;

class RawHtml
{
    public string $rawHtml;

    public function __construct(string $rawHtml)
    {
        $this->rawHtml = $rawHtml;
    }
}