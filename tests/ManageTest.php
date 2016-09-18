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
}
