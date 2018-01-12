<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        for($i=0; $i<10;$i++){
            $user = User::create(array(
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('guimauve'),
                'remember_token' => $faker->colorName,
            ));
        }
    }
}
