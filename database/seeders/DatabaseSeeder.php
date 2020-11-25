<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create()->each(function($user){
            $user->profile()->save(Profile::factory()->make());
        });

       Tag::factory(20)->create();

       Country::factory(20)->create();

       Comment::factory(50)->create();

       Article::factory(50)->create()->each(function($article){
            $ids= range(1, 50);
            shuffle($ids);
            $sliced = array_slice($ids, 1, 20);
            $article->tags()->attach($sliced);
       });

       Role::factory(3)->create()->each(function($role){
            $ids= range(1, 2);
            shuffle($ids);
            $sliced = array_slice($ids, 1, 5);
            $role->users()->attach($sliced);
        });
    }
}
