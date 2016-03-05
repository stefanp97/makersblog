<?php

namespace Makersblog;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Makersblog\Database\Seeds\PostTableSeeder;
/**
 *
 */
class PostTableSeeder extends Seeder
{

  public function run()
  {
    Post::truncate();
    factory(Post::class, 20)->create();
  }
}
