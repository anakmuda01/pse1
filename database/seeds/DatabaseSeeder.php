<?php

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
      $posts = App\Models\Post::all();
      $tags = App\Models\Tag::pluck('id')->all();

      foreach ($posts as $post) {
        $post->tags()->attach(array_random($tags));
      }
    }
}
