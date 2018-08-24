<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // $this->call(UsersTableSeeder::class);
        for($n = 0; $n < 100; $n++) {
            $id = DB::table('product')->insertGetId([
                'barcode' => random_int(11111111, 99999999),
                'name' => $faker->text(30),
                'category_id' => random_int(1, 12),
            ]);

            DB::table('batch')->insert([
                'quantity' => random_int(10, 50),
                'expiration_date' => sprintf(
                    '%u-%u-%u',
                    2018,
                    random_int(8, 12),
                    random_int(1, 30)
                ),
                'product_id' => $id,
                'retail_price' => random_int(50, 500),
            ]);
        }

        DB::table('manager')->insert([
                'store_id' => 12,
                'name' => 'Pirate Captain',
                'username' => 'pirate',
                'password' => 'arr'
            ],
            [
                'store_id' => 34,
                'name' => 'Viking Hero',
                'username' => 'viking',
                'password' => 'grr'
            ],
            [
                'store_id' => 56,
                'name' => 'Chief Sailor',
                'username' => 'sailor',
                'password' => 'brr'
            ])
        ;

    }
}
