<?php

use Illuminate\Database\Seeder;
use App\State;


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
        State::create(array('state'=>'pruebis'));
    }
}
