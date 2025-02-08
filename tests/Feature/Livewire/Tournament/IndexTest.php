<?php

use App\Livewire\Tournament\Index;
use App\Models\User;
use Livewire\Livewire;

it('can see the page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('tournament.index'));

    $response->assertStatus(200);

    Livewire::test(Index::class)
        ->assertStatus(200);
});

it('can not see the page if logged out', function () {
    $response = $this->get(route('tournament.index'));

    $response->assertRedirect(route('login'));
});
