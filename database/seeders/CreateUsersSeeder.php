<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('11111111'),
            ], 
            [
               'name'=>'User1',
               'email'=>'user1@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('11111111'),
            ],
            [
                'name'=>'User2',
                'email'=>'user2@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User3',
                'email'=>'user3@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User4',
                'email'=>'user4@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User5',
                'email'=>'user5@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],            
             [
                'name'=>'User6',
                'email'=>'user6@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User7',
                'email'=>'user7@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User8',
                'email'=>'user8@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User9',
                'email'=>'user9@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User10',
                'email'=>'user10@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User11',
                'email'=>'user11@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User12',
                'email'=>'user12@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User13',
                'email'=>'user13@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User14',
                'email'=>'user14@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User15',
                'email'=>'user15@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
             [
                'name'=>'User16',
                'email'=>'user16@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('11111111'),
             ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
