<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testEditUser()
    {
      $adminUser = factory(App\User::class, 'admin')->create();
      $user = factory(App\User::class)->create();
      $this->actingAs($adminUser)
        ->visit('manage/')
        ->see($user->name)
        ->click('edit_user_' . $user->id)
        ->seePageIs('manage/user/' . $user->id . '/edit');
    }

    public function testConfirmUser()
    {
      $adminUser = factory(App\User::class, 'admin')->create();
      $user = factory(App\User::class)->create();

      $this->actingAs($adminUser)
        ->visit('manage/user/' . $user->id . '/edit')
        ->check('confirmed')
        ->press('Update')
        ->seePageIs('manage/')
        ->see('Member</span>');
    }

    public function testUpdateUser()
    {
      $adminUser = factory(App\User::class, 'admin')->create();
      $user = factory(App\User::class)->create();

      $testName = 'Test Name';
      $testBio = 'Test Bio';

      $this->actingAs($adminUser)
        ->visit('manage/user/' . $user->id . '/edit')
        ->check('confirmed')
        ->check('admin')
        ->type($testName, 'name')
        ->type($testBio, 'bio')
        ->press('Update')
        ->seePageIs('manage/');

      $updatedUser = App\User::find($user->id);
      $this->assertEquals($updatedUser->confirmed, 1);
      $this->assertEquals($updatedUser->admin, 1);
      $this->assertEquals($updatedUser->name, $testName);
      $this->assertEquals($updatedUser->bio, $testBio);
    }
}
