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
    }

    private function users()
    {
        $users = [
            'talandar' => [
                'email' => '',
                'password' => 'talandar',
            ],
            'raynor' => [
                'email' => '',
                'password' => 'raynor',
            ],
        ];
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
