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
            // '0000-00-00' => "Raynor is constantly bored on the Hyperion. He wants a guess the number game ... build it!",
            // '0000-00-00' => "Zeratul wants to see the NutCracker performance, but he forgot his wallet at home, but home I mean his spceship the Voidseeker .. which is on permanent warp jump ... the formula for the next destination is x*(x^9)+x/x(x%2) where x is used for the next destination; find the 40th destination...",
            // '0000-00-00' => "Mojo is baking pies for a weekend party with the conclave. He wants to make sure he has enough doughnuts for eveyone. But he is not sure how many protoss bretheren will warp to his party .. assuming each protoss will eat (p*rand(1-4)); come up with the most cost efficient doughnut counts(least # doughnuts left over + least amount of $ spent)",
            // abathur -> most efficient random proble, he x2 on production of rand(x-x) use abathur the most proficiently as possible
            // '0000-00-00' => "Abathur is building a new zerg nest. A fully complete zerge next requires 30000 units of work. Assuming each drone can do rand(1-10) units of work, and if abathur pairs with a drone the production is x2, write a script/loop/function/whatever to come up with the most efficient drone usage to construct a new nest.",
            // '0000-00-00' => "Matt is fighting with Mira, they need to take some time away from each other. But all their stuff is on Matt's hyperion. Assuming an Hyperion array contains 10000 numbers that represents items. Where matt's items are ONLY divisible by 7 and Mira's items are all prime. If a number satisfies both rules, it will be round robbened between the 2. Please divide up the items in the hyperion between the once happy couple",
            // '0000-00-00' => "It's new years and Kerrigan is throwing a party, she wants to send invitation to 300000 zerglings; but the lings are all grouped together anywhere between 5-13, assuming each invitation costs 100 vespean gas, whats the least amount of gas kerrigan can spend to ensure the MOST lings show up to the party?",
            // '0000-00-00' => "write a fork bomb for Zeratul",
            // '0000-00-00' => "write a tic tac toe game in console",
            // '0000-00-00' => "bmi calculator for kerrigan",
            // '0000-00-00' => "Fahrenheit to Celcius conversion function for raynor",
        ];
        foreach ($tasks as $date => $prompt) {
            DB::table('academy_tasks')->insert([
                'prompt' => $prompt,
                'created_on' => $date,
            ]);
        }
    }
}
