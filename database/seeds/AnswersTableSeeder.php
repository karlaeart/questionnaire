<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'text' => 'I am 28 years old',
            'question_id' => 1
        ]);

        DB::table('answers')->insert([
            'text' => 'I have lived in Chalkis, Patras and Athens cities in Greece',
            'question_id' => 2
        ]);
    }
}
