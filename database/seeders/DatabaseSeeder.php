<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
        ]);

        DB::table('authors')->insert([
            'id' => 1,
            'name' => 'Test User',
            'slug' => 'test-user'     
        ]);

        DB::table('categories')->insert([
            'name' => 'Music',
            'slug' => 'music'   
        ]);

        DB::table('categories')->insert([
            'name' => 'Movies',
            'slug' => 'movies' 
        ]);

        DB::table('categories')->insert([
            'name' => 'Books',
            'slug' => 'books' 
        ]);

        DB::table('posts')->insert([
            'category_id' =>1,
            'author_id' =>1,
            'name' => 'Awesome article about music',
            'slug' => 'awesome-article-about-music',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed enim sapien, 
                       posuere at nisi sed, lobortis mollis felis. Maecenas pharetra eleifend nunc ut dapibus. 
                       Donec molestie fringilla tortor eget varius. Integer finibus, risus non ullamcorper 
                       tincidunt, magna massa feugiat felis, a auctor diam risus quis nulla. Phasellus laoreet 
                       non quam ut faucibus. Quisque in tortor fermentum, fringilla mauris at, tincidunt massa. 
                       Ut sodales interdum lectus eu iaculis. Nulla laoreet id augue ac pulvinar. Integer molestie 
                       sagittis faucibus. Ut pulvinar ut velit et egestas. Duis vel lorem a est euismod pharetra.
                       Curabitur dictum, tortor quis convallis interdum, tortor sapien faucibus nibh, ac lacinia mauris 
                       nunc hendrerit lorem. Vestibulum a auctor ex. Etiam metus orci, elementum non malesuada ac, vehicula 
                       quis neque. Nullam at purus eleifend, euismod enim a, accumsan diam. Suspendisse nulla nisl, varius 
                       et felis eu, mollis pretium ipsum. Aliquam scelerisque justo diam, et porta dui faucibus et. Donec 
                       congue sit amet sem vel vestibulum.',
            'publish_date' => now()
        ]);

        DB::table('posts')->insert([
            'category_id' =>2,
            'author_id' =>1,
            'name' => 'Awesome article about movies',
            'slug' => 'awesome-article-about-movies',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed enim sapien, 
                       posuere at nisi sed, lobortis mollis felis. Maecenas pharetra eleifend nunc ut dapibus. 
                       Donec molestie fringilla tortor eget varius. Integer finibus, risus non ullamcorper 
                       tincidunt, magna massa feugiat felis, a auctor diam risus quis nulla. Phasellus laoreet 
                       non quam ut faucibus. Quisque in tortor fermentum, fringilla mauris at, tincidunt massa. 
                       Ut sodales interdum lectus eu iaculis. Nulla laoreet id augue ac pulvinar. Integer molestie 
                       sagittis faucibus. Ut pulvinar ut velit et egestas. Duis vel lorem a est euismod pharetra.
                       Curabitur dictum, tortor quis convallis interdum, tortor sapien faucibus nibh, ac lacinia mauris 
                       nunc hendrerit lorem. Vestibulum a auctor ex. Etiam metus orci, elementum non malesuada ac, vehicula 
                       quis neque. Nullam at purus eleifend, euismod enim a, accumsan diam. Suspendisse nulla nisl, varius 
                       et felis eu, mollis pretium ipsum. Aliquam scelerisque justo diam, et porta dui faucibus et. Donec 
                       congue sit amet sem vel vestibulum.',
            'publish_date' => now()
        ]);

        DB::table('posts')->insert([
            'category_id' =>3,
            'author_id' =>1,
            'name' => 'Awesome article about books',
            'slug' => 'awesome-article-about-books',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed enim sapien, 
                       posuere at nisi sed, lobortis mollis felis. Maecenas pharetra eleifend nunc ut dapibus. 
                       Donec molestie fringilla tortor eget varius. Integer finibus, risus non ullamcorper 
                       tincidunt, magna massa feugiat felis, a auctor diam risus quis nulla. Phasellus laoreet 
                       non quam ut faucibus. Quisque in tortor fermentum, fringilla mauris at, tincidunt massa. 
                       Ut sodales interdum lectus eu iaculis. Nulla laoreet id augue ac pulvinar. Integer molestie 
                       sagittis faucibus. Ut pulvinar ut velit et egestas. Duis vel lorem a est euismod pharetra.
                       Curabitur dictum, tortor quis convallis interdum, tortor sapien faucibus nibh, ac lacinia mauris 
                       nunc hendrerit lorem. Vestibulum a auctor ex. Etiam metus orci, elementum non malesuada ac, vehicula 
                       quis neque. Nullam at purus eleifend, euismod enim a, accumsan diam. Suspendisse nulla nisl, varius 
                       et felis eu, mollis pretium ipsum. Aliquam scelerisque justo diam, et porta dui faucibus et. Donec 
                       congue sit amet sem vel vestibulum.',
            'publish_date' => now()
        ]);
    }
}
