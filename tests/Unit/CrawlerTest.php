<?php

namespace Tests\Unit;

use Tests\AppTestCase as TestCase;

class CrawlerTest extends TestCase
{
    /**
     * The crawler is working.
     *
     * @return void
     */
    public function test_the_crawler_is_working()
    {
        $this->crawl('<html><body></body></html>');

        $this->assertEquals(1, $this->crawler->filter('html body')->count());
    }
}
