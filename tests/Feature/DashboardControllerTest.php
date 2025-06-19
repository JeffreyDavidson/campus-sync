<?php

use App\Models\User;

use function Pest\Laravel\get;

test('dashboard returns a successful response', function () {
    $response = get(route('dashboard'));

    $response->assertOk();
    $response->assertViewIs('dashboard');
});
