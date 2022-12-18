<?php

use Illuminate\Support\Facades\Blade;
use Symfony\Component\DomCrawler\Crawler;

beforeEach(function () {
    $result = Blade::render('<x-auth.forgot-password-form />');
    $this->crawler = new Crawler($result);
    return $this->crawler->filter('form.auth-forgot-password');
});

test('The component renders a form', function () {
    $this->assertEquals(1, $this->crawler->filter('form')->count());
});

test('The form method is post', function () {
    $this->assertEquals(1, $this->crawler->filter('[method=post]')->count());
});

test('The form action targets the forgot password route', function () {
    $this->assertEquals(1, $this->crawler->filter('[action$="forgot-password"]')->count());
});

test('The form has an email field', function () {
    $this->assertEquals(1, $this->crawler->filter('input[name=email]')->count());
});

test('The form has a submit button', function () {
        $this->assertEquals(1, $this->crawler->filter('button[type=submit]')->count());
});
