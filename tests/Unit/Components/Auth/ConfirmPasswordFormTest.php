<?php

use Illuminate\Support\Facades\Blade;
use Symfony\Component\DomCrawler\Crawler;

beforeEach(function () {
    $result = Blade::render('<x-auth.confirm-password-form />');
    $this->crawler = new Crawler($result);
    return $this->crawler->filter('form.auth-confirm-password');
});

test('The component renders a form', function () {
    $this->assertEquals(1, $this->crawler->filter('form')->count());
});

test('The form method is post', function () {
    $this->assertEquals(1, $this->crawler->filter('[method=post]')->count());
});

test('The form action targets the confirm password route', function () {
    $this->assertEquals(1, $this->crawler->filter('[action$="confirm-password"]')->count());
});

test('The form has a password field', function () {
    $this->assertEquals(1, $this->crawler->filter('input[name=password]')->count());
});

test('The form has a submit button', function () {
        $this->assertEquals(1, $this->crawler->filter('button[type=submit]')->count());
});
