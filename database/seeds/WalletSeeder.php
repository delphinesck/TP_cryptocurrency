<?php

use App\Wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Wallet::truncate();

        for($i=0; $i<10;$i++){
            $wallet = Wallet::create(array(
                'user_id' => $faker->numberBetween(1,5),
                'address' => sha1(rand()),
                'solde' => 5
            ));
        }
    }
}
