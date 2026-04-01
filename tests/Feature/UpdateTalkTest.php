<?php

use App\Enums\TalkType;
use App\Models\Talk;
use App\Models\User;

test('as user can update a talk', function () {
    $talk = Talk::factory()->create();

    $response = $this
        ->actingAs($talk->author)
        ->patch(route('talks.update', $talk), [
            'title' => $title = 'Updated Title',
            'type' => TalkType::Keynote->value,
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect(route('talks.show', $talk));

    $this->assertEquals('Updated Title', $talk->refresh()->title);

});

test('users cannot update talks that are not theirs', function () {
    $talk = Talk::factory()->create();
    $otherUser = User::factory()->create();
    $originalTitle = $talk->title;

    $response = $this
        ->actingAs($otherUser)
        ->patch(route('talks.update', $talk), [
            'title' => $title = 'Updated Title',
            'type' => TalkType::Keynote->value,
        ]);

    $response->assertForbidden();
    $this->assertEquals($originalTitle, $talk->refresh()->title);
});
