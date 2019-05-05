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
        $author1->firstname = 'Max';
        $author1->lastname = 'Maier';
        $author1->save();

        $author2 = new \App\Author;
        $author2->firstname = 'Tom';
        $author2->lastname = 'Black';
        $author2->save();

        $author3 = new \App\Author;
        $author3->firstname = 'Black';
        $author3->lastname = 'Jack';
        $author3->save();

        $author1 = new \App\Author;
        $author1->firstname = 'Franz';
        $author1->lastname = 'Kafka';
        $author1->save();

        $author1 = new \App\Author;
        $author1->firstname = 'Max';
        $author1->lastname = 'Frisch';
        $author1->save();

    }
}
