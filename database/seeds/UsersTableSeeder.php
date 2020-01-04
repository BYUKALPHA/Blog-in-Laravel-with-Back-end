<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table

        $faker = Factory::create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "Byuku Alpha",
                'slug' => "Byuku-Alpha",
                'email' => "alpha@gmail.com",
                'password' => bcrypt('alpha@123'),
                'bio'      => $faker->text(rand(250,300))
            ],
            [
                'name' => "Niyo Rider",
                'slug' => "Niyo-Rider",
                'email' => "rider@gmail.com",
                'password' => bcrypt('rider'),
                'bio'      => $faker->text(rand(250,300))
            ],
            [
                'name' => "Kim Vincent",
                'slug' => "Kim-Vincent",
                'email' => "vincent@gmail.com",
                'password' => bcrypt('vincent'),
                'bio'      => $faker->text(rand(250,300))
            ],
        ]);
    }
}
