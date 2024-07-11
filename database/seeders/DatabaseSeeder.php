<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'username' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // $user = new User();
        // $user->username = 'Doflamingo ';
        // $user->email = 'don@doffy.jokesr';
        // $user->password = 'hashThisIsHashedOnlyAndSample';
        // $user->save();


        // dump(User::all()->toArray());

        // Post::factory(10)->create();
        // $doffy = User::find(3);

        $post = new Post();
        $post->title = 'Got Smoked by Gear 4 Luffy';
        $post->content = 'Sample Content Sample Content Sample Content Sample Content Sample Content';
        $post->user()->associate(1);
        $post->save();

        dump(Post::all()->toArray());
    }
}
