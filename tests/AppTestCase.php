<?php

namespace Tests;

use Symfony\Component\DomCrawler\Crawler;

class AppTestCase extends TestCase
{
    public $crawler;

    public function crawl($html)
    {
        $this->crawler = new Crawler($html);
    }
}