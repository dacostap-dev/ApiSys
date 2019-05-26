<?php

use App\Modul;
use App\Student;
use Illuminate\Database\Seeder;

class ModulTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::select('id')->get();

        for($i=0; $i<200; $i++){
            factory(Modul::class)->create([
                'student_id' => $students->random()->id,
            ]);
        }
    }
}
