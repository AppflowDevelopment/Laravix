<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
        	[
	            'id' => 1,
	            'parentid' => 0,
	            'alias' => 'home',
	            'title' => 'Home',
	            'author' => 'Laravix',
				'robots' => 'index, follow',
				'tags' => '',
				'meta_description' => '',
	            'meta_keywords' => '',
				'content' => '',
	            'priority' => 1,
	            'featured' => 0,
	            'published' => 1
        	],[
	            'id' => 2,
	            'parentid' => 0,
	            'alias' => 'about',
	            'title' => 'About',
	            'author' => 'Laravix',
				'robots' => 'index, follow',
				'tags' => '',
				'meta_description' => '',
	            'meta_keywords' => '',
				'content' => '<p>Laravix is simple quick start Laravel 5 skeleton application</p>',
	            'priority' => 2,
	            'featured' => 0,
	            'published' => 1
        	],[
	            'id' => 3,
	            'parentid' => 0,
	            'alias' => 'links',
	            'title' => 'Help links',
	            'author' => 'Laravix',
				'robots' => 'index, follow',
				'tags' => '',
				'meta_description' => '',
	            'meta_keywords' => '',
				'content' => '<ul> <li><a href="https://laravel.com" target="_blank">Laravel</a></li> <li><a href="https://laravel.com/docs/" target="_blank">Documentation</a></li> <li><a href="https://laracasts.com/" target="_blank">LaraCasts</a></li> <li><a href="http://laravel-recipes.com/" target="_blank">Laravel Recipes</a></li> <li><a href="http://laravelcoding.com/" target="_blank">Laravel Coding</a></li> <li><a href="https://laravel-news.com" target="_blank">Laravel News</a></li> </ul>',
	            'priority' => 3,
	            'featured' => 0,
	            'published' => 1
        	]
        ]);
    }
}
