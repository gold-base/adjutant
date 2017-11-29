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
        $this->users();
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
            'jeremy' => [
                'email' => '',
                'password' => 'jeremy',
            ]
        ];
        foreach ($users as $name => $details) {
            DB::table('users')->insert([
                'name' => $name,
                'email' => $details['email'],
                'password' => bcrypt($details['password']),
            ]);
        }
    }
}
