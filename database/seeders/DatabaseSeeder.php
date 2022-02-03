<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Object_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call([
//            UserSeeder::class,
//           // ArticlesSeeder::class
//
//        ]);
        User::factory(10)->create()->each(function ($user) {
            $user->articles()->saveMany(Article::factory(5)->make());
        });


    }
}
