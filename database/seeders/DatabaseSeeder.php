<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        DB::table('books')->insert([
            'title' => 'War of the Worlds',
 
            'description' => 'A science fiction masterpiece about Martians invading London',

            'author' => 'H. G. Wells',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'title' => 'A Wrinkle in Time',

            'description' => 'A young girl goes on a mission to save her father who has gone missing after working on a mysterious project called a tesseract',

            'author' => 'Madeleine L\'Engle',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('authors')->insert([
            'name' => 'H.G. Wells',
 
            'gender' => 'Male',

            'biography' => 'H. G. Wells was a prolific writer of both fiction and non-fiction. His writing career spanned more than sixty years, and his early science fiction novels earned him the title (along with Jules Verne and Hugo Gernsback) of "The Father of Science Fiction".',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('authors')->insert([
            'name' => 'Madeleine L\'Engle',
 
            'gender' => 'Female',

            'biography' => 'Madeleine L\'Engle published her first novel, The Small Rain, in 1945. Four years later, she published her first children\'s book, And Both Were Young (1949). After struggling for several years, L’Engle began a series of juvenile fictional works about the Austin family with 1960\'s Meet the Austins. Two years later, she earned acclaim for A Wrinkle in Time, introducing a group of young children who engage in a cosmic battle against a great evil that abhors individuality; it spawned four sequels, as well as a 2018 big screen adaptation. L\'Engle also wrote several books of fiction and poetry for adults. She died in 2007.',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
