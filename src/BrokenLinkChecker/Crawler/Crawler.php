<?php declare(strict_types=1);

namespace BrokenLinkChecker\Crawler;

interface Crawler
{
    public function findHyperlinks();
}
