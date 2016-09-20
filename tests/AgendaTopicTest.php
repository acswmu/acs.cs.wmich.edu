<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AgendaTopicTest extends TestCase
{
    use DatabaseMigrations;

    /* This test asserts that the agenda topic adding form did not cause an
     * error, and that it added and can display the new topic. */
    public function testAddAgendaTopic()
    {
      $user = factory(App\User::class, 'admin')->create();
      $topic = 'Test Topic';
      $description = 'Test Description';

      $this->actingAs($user)
        ->visit('/manage')
        ->type($topic, 'topic')
        ->type($description, 'description')
        ->check('important')
        ->press('add_agenda_topic')
        ->seePageIs('/manage')
        ->see($topic);
    }

    /* This test asserts that the non-admin user will not see agenda topics
     * that they don't own. */
    public function testAgendaTopicVisibility()
    {
      $user = factory(App\User::class)->create();
      $agendaTopic = factory(App\AgendaTopic::class)->create();
      $agendaTopicOwned = factory(App\AgendaTopic::class)->create();
      $agendaTopicOwned->user_id = $user->id;
      $agendaTopicOwned->save();

      $this->actingAs($user)
        ->visit('/manage')
        ->see($agendaTopicOwned->topic)
        ->dontSee($agendaTopic->topic);
    }
}
