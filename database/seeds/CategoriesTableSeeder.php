<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Category::insert([
			['categ_name' => 'COMEDIA', 'slug' => 'comedia', 'type' => 'ANIME',],
			['categ_name' => 'GORE', 'slug' => 'gore', 'type' => 'ANIME',],
			['categ_name' => 'DEPORTE', 'slug' => 'deporte', 'type' => 'ANIME',],
			['categ_name' => 'ACCION', 'slug' => 'accion', 'type' => 'ANIME',],
			['categ_name' => 'ECCHI', 'slug' => 'ecchi', 'type' => 'ANIME',],
			['categ_name' => 'YAOI', 'slug' => 'yaoi', 'type' => 'ANIME',],
		]);
		// factory(Category::class, 30)->create();
    }
}
