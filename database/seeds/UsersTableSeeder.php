<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //shop user
        $user = new \App\User;
        $user->name = "Shopuser_Tom";
        $user->email = "test@gmail.com";
        $user->password = bcrypt('secret');
        $user->isAdmin = false;
        $user->firstname = "Thomas";
        $user->lastname = "Achatz";
        $user->street = "Uniallee";
        $user->street_number = 19;
        $user->city = "Hagenberg";
        $user->zip_code = 4083;
        $user->country = "Austria";
        $user->save();


        //admin
        $user1 = new \App\User;
        $user1->name = "Admin_Mike";
        $user1->email = "test1@gmail.com";
        $user1->password = bcrypt('secret');
        $user1->isAdmin = true;
        $user1->firstname = "Michael";
        $user1->lastname = "Schütz";
        $user1->street = "Windhag";
        $user1->street_number = 19;
        $user1->city = "St.Veit";
        $user1->zip_code = 4173;
        $user1->country = "Austria";
        $user1->save();


        $user2 = new \App\User;
        $user2->name = "Shopuser_Dani";
        $user2->email = "test@gmail.com";
        $user2->password = bcrypt('secret');
        $user2->isAdmin = false;
        $user2->firstname = "Daniel";
        $user2->lastname = "Kroiss";
        $user2->street = "Rudolfstrasse";
        $user2->street_number = 4;
        $user2->city = "Linz";
        $user2->zip_code = 4020;
        $user2->country = "Austria";
        $user2->save();
    }
}