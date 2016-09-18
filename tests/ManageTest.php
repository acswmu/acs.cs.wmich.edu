<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ManageTest extends TestCase
{
    use DatabaseMigrations;

    public function testIndex()
    {
      $user = factory(App\User::class)->create();

      $this->actingAs($user)
        ->visit('/manage')
        ->see('<title>Manage');
    }

    public function testAdmin()
    {
      $user = factory(App\User::class, 'admin')->create();

      $this->actingAs($user)
        ->visit('/manage')
        ->see('id="column-administration"');
    }

    public function testNonAdmin()
    {
      $user = factory(App\User::class)->create();

      $this->actingAs($user)
        ->visit('/manage')
        ->dontSee('id="column-administration"');
    }

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
}
