<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    public function run()
    {

        $user1 = new \App\User;
        $user1->username = "Admin_Mike";
        $user1->email = "admin@gmail.com";
        $user1->password = bcrypt('secret');
        $user1->firstname = "Michael";
        $user1->lastname = "Schütz";
        $user1->street = "Windhag";
        $user1->street_number = 19;
        $user1->city = "St.Veit";
        $user1->plz = 4173;
        $user1->country = "Austria";
        $user1->isAdmin = true;
        $user1->save();

        //shopuser 1
        $user2 = new \App\User;
        $user2->username = "Shopuser_Tom";
        $user2->email = "user@gmail.com";
        $user2->password = bcrypt('secret');
        $user2->firstname = "Thomas";
        $user2->lastname = "Achatz";
        $user2->street = "Uniallee";
        $user2->street_number = 19;
        $user2->city = "Hagenberg";
        $user2->plz = 4083;
        $user2->country = "Austria";
        $user2->isAdmin = false;
        $user2->save();


        //shopuser 2
        $user3 = new \App\User;
        $user3->username = "Shopuser_Dani";
        $user3->email = "user2@gmail.com";
        $user3->password = bcrypt('secret');
        $user3->isAdmin = false;
        $user3->firstname = "Daniel";
        $user3->lastname = "Kroiss";
        $user3->street = "Rudolfstrasse";
        $user3->street_number = 4;
        $user3->city = "Linz";
        $user3->plz = 4020;
        $user3->country = "Austria";
        $user2->isAdmin = false;
        $user3->save();
    }
}