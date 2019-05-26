<?php

use App\Student;
use App\Promotion;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotions = Promotion::select('id')->get();

        for($i=0; $i<500; $i++){
            factory(Student::class)->create([
                'promotion_id' => $promotions->random()->id,
            ]);
        }
    }
}
