<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase
{
    use DatabaseMigrations;

    public function testGetHome()
    {
      $this->visit('/')
        ->see('<title>Home');
    }

    public function testGetMembers()
    {
      $this->visit('/members')
        ->see('<title>Members');
    }

    public function testGetProjects()
    {
      $this->visit('/projects')
        ->see('<title>Projects');
    }

    public function testGetMeetings()
    {
      $this->visit('/meetings')
        ->see('<title>Meetings');
    }

    public function testGetSchedule()
    {
      $this->visit('/schedule')
        ->see('<title>Schedule');
    }

    public function testGetLogin()
    {
      $this->visit('/login')
        ->see('<title>Login');
    }

    public function testGetRegister()
    {
      $this->visit('/register')
        ->see('<title>Register');
    }
}
