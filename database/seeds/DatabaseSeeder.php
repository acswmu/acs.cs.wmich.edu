<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 'base_admin', 1)->create();
        factory(App\User::class, 3)->create();
        factory(App\AgendaTopic::class, 5)->create();
        factory(App\AgendaTopic::class, 'important', 2)->create();
    }
}
