<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Who;
use App\Models\User;
use Livewire\Livewire;

it('can render', function() {

    $component = Livewire::test(Who::class);

    $component->assertStatus(200);
});

it('uses custom name if provided when guest', function() {
    Livewire::test(Who::class, ['name' => 'Sarah'])
        ->assertSet('name', "Sarah");
});

it('uses custom name if provided when logged in', function() {
    $this->actingAs(User::factory()->create());

    Livewire::test(Who::class, ['name' => 'Fox'])
        ->assertSet('name', "Fox");
});

it('uses default value when custom name not provided for guest', function() {
    Livewire::test(Who::class)
        ->assertSet('name', "Guest");
});

it('uses default value when custom name not provided for authenticated user', function() {
    $this->actingAs($user = User::factory()->create());

    Livewire::test(Who::class)
        ->assertSet('name', $user->name);
});

it('outputs expected component text', function() {
    $name = 'My Good Man';
    Livewire::test(Who::class, ['name' => $name])
        ->assertSee(__('Hey there, :name', ['name' => $name]));
});
