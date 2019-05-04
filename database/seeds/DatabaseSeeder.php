<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@wisudapknstan.id',
            'password' => \Hash::make('sandiaman'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
