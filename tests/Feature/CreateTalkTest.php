<?php

use App\Models\User;
use App\Models\Talk;
use App\Enums\TalkType;

test('a user can create a talk', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->post(route('talks.store'), [
            'title' => $title = fake()->sentence(),
            'type' => TalkType::Keynote->value,
        ]);


    $response->assertRedirect(route('talks.index'));

    Talk::where('title', $title)->count();
    $this->assertDatabaseHas('talks', [
        'title' => $title,
    ]);
});
