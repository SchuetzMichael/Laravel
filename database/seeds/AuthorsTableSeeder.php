<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = new \App\Author;
        $author1->firstName = 'Max';
        $author1->lastName = 'Maier';
        $author1->save();

        $author2 = new \App\Author;
        $author2->firstName = 'Tom';
        $author2->lastName = 'Black';
        $author2->save();

        $author3 = new \App\Author;
        $author3->firstName = 'Black';
        $author3->lastName = 'Jack';
        $author3->save();
    }
}
