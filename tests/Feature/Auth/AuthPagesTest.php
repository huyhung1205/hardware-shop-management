<?php

use App\Models\User;

test('guests can view login and register pages', function () {
    $this->get('/login')->assertOk();
    $this->get('/register')->assertOk();
});

test('authenticated users can view dashboard', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/dashboard')
        ->assertOk()
        ->assertSee($user->email);
});
