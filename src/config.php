<?php declare(strict_types=1);

use BrokenLinkChecker\Crawler;
use BrokenLinkChecker\RawHtml;

error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

$crawler = new Crawler('https://tiffanytaylor.dev');
$rawHtml = $crawler->crawl();
