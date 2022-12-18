<?php

use App\Models\User;

test('Guests don\'t see a logout option', function () {
    $response = $this->get('/');
    $response->assertDontSee('Logout', false);
});

test('Logged in users see a logout option', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get('/');
    $response->assertSee('Logout', false);
});
