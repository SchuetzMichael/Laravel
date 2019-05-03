<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    public function run()
    {
        //$this->call(BooksTableSeeder::class);
       /* \Illuminate\Support\Facades\DB::table('books')->insert([
            'title' => 'Herr der Ringe',
            'isbn' => '1234567890',
            'subtitle' => 'Rückkehr des Königs',
            'rating' => 10,
            'description' => 'Letzter Teil der Trilogie',
            'published' => new DateTime()
        ]);*/

       $book = new \App\Book;
       $book->title = 'Herr der Ringe';
       $book->isbn = '1234567890';
       $book->subtitle = 'Rückkehr des Königs';
       $book->rating = 10;
       $book->description = 'Letzter Teil der Trilogie';
       $book->price = 144.44;
       $book->published = new DateTime();

        //get the first user
        $user = \App\User::all()->first();
        $book->user()->associate($user);
        //speichern in der DB
        $book->save();

        $authors = \App\Author::all()->pluck("id");
        $book->authors()->sync($authors);

        //add images to book
        $image1 = new \App\Image;
        $image1->title = "Cover 1";
        $image1->url ="https://images-na.ssl-images-amazon.com/images/I/81E9dOg9fuL.jpg";
        $image1->book()->associate($book);
        $image1->save();

        //add images to book
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
        $book2->description = 'Letzter Teil der Fickologie';
        $book2->price = 333.44;
        $book2->published = new DateTime();

        //get the first user
        $user = \App\User::all()->last();
        $book2->user()->associate($user);
        //speichern in der DB
        $book2->save();

        $authors = \App\Author::all()->pluck("id");
        $book2->authors()->sync($authors);

        //add images to book
        $image1 = new \App\Image;
        $image1->title = "Cover 1";
        $image1->url ="https://images-na.ssl-images-amazon.com/images/I/81E9dOg9fuL.jpg";
        $image1->book()->associate($book2);
        $image1->save();

        //add images to book
        $image2 = new \App\Image;
        $image2->title = "Cover 2";
        $image2->url ="https://images-na.ssl-images-amazon.com/images/I/719MfH43ZTL.jpg";
        $image2->book()->associate($book2);
        $image2->save();


       /* //update
        $book = App\Book::find(1);
        $book->title = "Neuer Title";
        $book->save();

        //delete
        $book->delete();

        //findOrCreate updateOrCreate
        //$book = App\Book::findOrCreate(['title'=>"Buchtitel"]);

        //$book = App\Book::updateOrCreate(['title'=>"Buchtitel"], ['description'=>'Neue Beschreibung']);
       */

        /*
        //Element in Beziehung einfügen
       $book->images()->save($image);
       $book->images()->saveMany([$image1, $image2]);

       $book->user()->associate($user1);
       $book->save();

       $book->user()->dissociate($user1);
       $book->save();

       //m:n Beziehungen
        $book->authors()->attach($authorId);
        $book->authors()->dettach($authorId);

        //delete all authors from relationship
        $book->authors()->dettach();

        $book->authors()->sync([1,2,3]); */


    }
}
