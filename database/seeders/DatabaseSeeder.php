<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $computers = Category::create([
           'name' => 'Computers',
           'slug' => 'computers'
        ]);
        $work = Category::create([
           'name' => 'Work',
           'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My first post',
            'slug' => 'my-first-post',
            'excerpt' => 'My first post excerpt',
            'body' => 'My first post body content example'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My second post',
            'slug' => 'my-second-post',
            'excerpt' => 'My second post excerpt',
            'body' => 'My second post body content example'
        ]);
    }
}
