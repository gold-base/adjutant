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
            '2017-12-04' => "Raynor is constantly bored on the Hyperion. He wants a guess the number game ... build it!",
            // '0000-00-00' => "Zeratul wants to see the NutCracker performance, but he forgot his wallet at home, but home I mean his spceship the Voidseeker .. which is on permanent warp jump ... the formula for the next destination is x*(x^9)+x/x(x%2) where x is used for the next destination; find the 40th destination...",
            // '0000-00-00' => "Mojo is baking pies for a weekend party with the conclave. He wants to make sure he has enough doughnuts for eveyone. But he is not sure how many protoss bretheren will warp to his party .. assuming each protoss will eat (p*rand(1-4)); come up with the most cost efficient doughnut counts(least # doughnuts left over + least amount of $ spent)",
        ];
        foreach ($tasks as $date => $prompt) {
            DB::table('academy_tasks')->insert([
                'prompt' => $prompt,
                'created_on' => $date,
            ]);
        }
    }
}
