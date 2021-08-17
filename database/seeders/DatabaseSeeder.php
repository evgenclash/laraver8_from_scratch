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


         $user = User::factory()->create([
             'name' => 'John Doe'
         ]);

         Post::factory(15)->create([
             'user_id'=>$user
         ]);

//         $personal = Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal'
//         ]);
//
//         $family = Category::create([
//             'name' => 'Family',
//             'slug' =>'family'
//         ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' =>'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet incidunt perspiciatis quaerat voluptatem? Ab, accusamus adipisci delectus facilis, incidunt ipsam laborum molestiae natus quae quasi quia saepe sunt tempora, voluptas.'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet incidunt perspiciatis quaerat voluptatem? Ab, accusamus adipisci delectus facilis, incidunt ipsam laborum molestiae natus quae quasi quia saepe sunt tempora, voluptas.'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post-2',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet incidunt perspiciatis quaerat voluptatem? Ab, accusamus adipisci delectus facilis, incidunt ipsam laborum molestiae natus quae quasi quia saepe sunt tempora, voluptas.'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My Personal Post',
//            'slug' => 'my-personal-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet incidunt perspiciatis quaerat voluptatem? Ab, accusamus adipisci delectus facilis, incidunt ipsam laborum molestiae natus quae quasi quia saepe sunt tempora, voluptas.'
//
//        ]);


    }
}
