<?php

use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder
 * @author ntd1712
 */
class UserTableSeeder extends Seeder
{
    public function data(Faker\Generator $faker)
    {
        return [
            [
                'name' => 'sysadmin',
                'email' => 'sysadmin@example.com',
                'password' => bcrypt('@sysadmin*'),
                'force_password_change' => true,
                'profile' => json_encode([
                    'DisplayName' => $faker->name,
                    'Photo' => 'no_photo.jpg',
                    'About' => $faker->text
                ]),
                'remember_token' => str_random(10)
            ],[
                'name' => 'demo',
                'email' => 'demo@example.com',
                'password' => bcrypt('@demo*'),
                'force_password_change' => true,
                'profile' => json_encode([
                    'DisplayName' => $faker->name,
                    'Photo' => 'no_photo.jpg',
                    'About' => $faker->text
                ]),
                'remember_token' => str_random(10)
            ]
        ];
    }
}