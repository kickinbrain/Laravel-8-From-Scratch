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

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
           'title' => 'My Work Post',
           'slug' => 'my-work-post',
           'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, animi asperiores blanditiis doloremque et incidunt laudantium placeat praesentium saepe sapiente?',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda dignissimos facere hic iste minima neque nihil placeat, porro vel voluptas voluptatem. Aliquid explicabo porro quo repellendus temporibus. Accusamus adipisci aliquid ducimus esse ipsa ipsam tempore. Commodi debitis libero maiores maxime possimus. Asperiores consequuntur delectus ea et expedita itaque odio, quas recusandae totam veniam. Ab accusamus adipisci amet animi asperiores atque dolorem ducimus ea error excepturi expedita explicabo illo illum laboriosam, libero minus molestias natus nihil non odit officia praesentium, quae quas qui quibusdam quidem rem reprehenderit sit sunt suscipit, tempora tempore temporibus tenetur unde ut veniam vitae. Eius, sit.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
           'title' => 'My Family Post',
           'slug' => 'my-first-post',
           'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, animi asperiores blanditiis doloremque et incidunt laudantium placeat praesentium saepe sapiente?',
           'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda dignissimos facere hic iste minima neque nihil placeat, porro vel voluptas voluptatem. Aliquid explicabo porro quo repellendus temporibus. Accusamus adipisci aliquid ducimus esse ipsa ipsam tempore. Commodi debitis libero maiores maxime possimus. Asperiores consequuntur delectus ea et expedita itaque odio, quas recusandae totam veniam. Ab accusamus adipisci amet animi asperiores atque dolorem ducimus ea error excepturi expedita explicabo illo illum laboriosam, libero minus molestias natus nihil non odit officia praesentium, quae quas qui quibusdam quidem rem reprehenderit sit sunt suscipit, tempora tempore temporibus tenetur unde ut veniam vitae. Eius, sit.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
           'title' => 'My Other Post',
           'slug' => 'my-other-post',
           'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, animi asperiores blanditiis doloremque et incidunt laudantium placeat praesentium saepe sapiente?',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda dignissimos facere hic iste minima neque nihil placeat, porro vel voluptas voluptatem. Aliquid explicabo porro quo repellendus temporibus. Accusamus adipisci aliquid ducimus esse ipsa ipsam tempore. Commodi debitis libero maiores maxime possimus. Asperiores consequuntur delectus ea et expedita itaque odio, quas recusandae totam veniam. Ab accusamus adipisci amet animi asperiores atque dolorem ducimus ea error excepturi expedita explicabo illo illum laboriosam, libero minus molestias natus nihil non odit officia praesentium, quae quas qui quibusdam quidem rem reprehenderit sit sunt suscipit, tempora tempore temporibus tenetur unde ut veniam vitae. Eius, sit.'
        ]);

    }
}
 ?>

