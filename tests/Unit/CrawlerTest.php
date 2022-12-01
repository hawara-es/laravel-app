<?php

namespace Tests\Unit;

use Tests\AppTestCase as TestCase;

class CrawlerTest extends TestCase
{
    /**
     * A basic test example:
     * check that the crawler is
     * working in the test environment.
     *
     * @return void
     */
    public function test_that_the_crawler_is_working()
    {
        $this->crawl('<html><body></body></html>');

        $this->assertEquals(1, $this->crawler->filter('html body')->count());
    }
}
