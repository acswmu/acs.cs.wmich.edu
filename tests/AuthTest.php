<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
  use DatabaseMigrations;

  public function testLogin()
  {
    $user = factory(App\User::class, 1)->create();
    $this->visit('/login')
      ->type($user->email, 'email')
      ->type('password', 'password')
      ->press('Login')
      ->seePageIs('/');
  }

  public function testRegister()
  {
    $name = 'Test Name';
    $email = 'test@wmich.edu';
    $password = 'password';
    $this->visit('/register')
      ->type($name, 'name')
      ->type($email, 'email')
      ->type($password, 'password')
      ->type($password, 'password_confirmation')
      ->press('Register')
      ->seePageIs('/');
  }
}
