<?php

test('the application returns a successful response', function () {
    $response = $this->get('/skim');

    $response->assertStatus(302)
        ->assertLocation('/skim/dashboard');
});
