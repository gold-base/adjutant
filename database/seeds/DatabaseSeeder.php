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

    private function tasks()
    {
        $tasks = [
            '2017-10-28' => "Artanis needs to send important messages secretly to Zeratul, but the Zerg swarm is ever present and picking off their scouts ...\nExecutor, you have been tasked with creating a function/script in PHP to encrypt and decrypt any given sentence(string) for securing communication between them!\nYou have until 11/5/2017 to complete this!\nEn taro adun!",
        ];
        foreach ($tasks as $date => $prompt) {
            DB::table('academy_tasks')->insert([
                'prompt' => $prompt,
                'created_on' => $date,
            ]);
        }
    }
}
