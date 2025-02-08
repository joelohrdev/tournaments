<?php

use App\Models\User;

it('renders successfully', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('tournament.create'));

    $response->assertStatus(200);
});
