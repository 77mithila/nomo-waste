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
            $storeId = random_int(1,3);

            $id = DB::table('product')->insertGetId([
                'store_id' => $storeId,
                'barcode' => random_int(11111111, 99999999),
                'name' => $faker->word(),
                'category_id' => random_int(1, 8),
            ]);

            DB::table('batch')->insert([
                'store_id' => $storeId,
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

            DB::table('batch')->insert([
                'store_id' => $storeId,
                'quantity' => random_int(10, 50),
                'expiration_date' => sprintf(
                    '%u-%u-%u',
                    2018,
                    random_int(8, 12),
                    random_int(1, 30)
                ),
                'product_id' => $id,
                'retail_price' => random_int(10, 50),
            ]);
        }

        DB::table('manager')->insert(
            [
                'store_id' => 1,
                'store_name' => 'Caribbean Choice',
                'name' => 'Pirate Captain',
                'username' => 'pirate',
                'password' => 'arr'
            ]);
        DB::table('manager')->insert(
            [
                'store_id' => 2,
                'store_name' => 'Lodbrok & Sons',
                'name' => 'Viking Hero',
                'username' => 'viking',
                'password' => 'grr'
            ]);
        DB::table('manager')->insert(
            [
                'store_id' => 3,
                'store_name' => 'The Metal Ship',
                'name' => 'Chief Sailor',
                'username' => 'sailor',
                'password' => 'brr'
            ])
        ;

    }
}
