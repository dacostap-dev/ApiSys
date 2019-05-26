<?php

use App\Promotion;
use Illuminate\Database\Seeder;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Promotion::class, 9)->create([
           'user_id' => '1',
       ]);

       factory(Promotion::class, 5)->create([
        'user_id' => '2',
    ]);
    }
}
