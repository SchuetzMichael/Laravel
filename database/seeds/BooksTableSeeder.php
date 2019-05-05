<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    public function run()
    {

       $book = new \App\Book;
       $book->title = 'Herr der Ringe';
       $book->isbn = '1234567890';
       $book->subtitle = 'Rückkehr des Königs';
       $book->rating = 10;
       $book->description = 'Letzter Teil der Trilogie';
       $book->price = 14.50;
       $book->published = new DateTime();

        $user = \App\User::all()->first();
        $book->user()->associate($user);
        $book->save();

        $authors = \App\Author::all()->pluck("id");
        $book->authors()->sync($authors);

        $image1 = new \App\Image;
        $image1->title = "Cover 1";
        $image1->url ="https://images-na.ssl-images-amazon.com/images/I/81E9dOg9fuL.jpg";
        $image1->book()->associate($book);
        $image1->save();

        $image2 = new \App\Image;
        $image2->title = "Cover 2";
        $image2->url ="https://images-na.ssl-images-amazon.com/images/I/719MfH43ZTL.jpg";
        $image2->book()->associate($book);
        $image2->save();

        $book2 = new \App\Book;
        $book2->title = 'Herr der Fischer';
        $book2->isbn = '1234563390';
        $book2->subtitle = 'Rückkehr des Wixers';
        $book2->rating = 4;
        $book2->description = 'Letzter Teil der Trilologie';
        $book2->price = 30.50;
        $book2->published = new DateTime();

        $user = \App\User::all()->last();
        $book2->user()->associate($user);
        $book2->save();

        $authors = \App\Author::all()->pluck("id");
        $book2->authors()->sync($authors);

        $image1 = new \App\Image;
        $image1->title = "Cover 1";
        $image1->url ="https://images-na.ssl-images-amazon.com/images/I/81E9dOg9fuL.jpg";
        $image1->book()->associate($book2);
        $image1->save();

        $image2 = new \App\Image;
        $image2->title = "Cover 2";
        $image2->url ="https://images-na.ssl-images-amazon.com/images/I/719MfH43ZTL.jpg";
        $image2->book()->associate($book2);
        $image2->save();

    }
}
