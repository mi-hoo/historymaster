<?php

use Illuminate\Database\Seeder;
use App\Category;

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
    		[ 'name' => '古 代' , 'icon' => 'fas fa-crow'],
    		[ 'name' => '中 世' , 'icon' => 'fas fa-horse-head'],
    		[ 'name' => '近 世' , 'icon' => 'fas fa-vihara'],
    		[ 'name' => '近 代' , 'icon' => 'fas fa-industry'],
    		[ 'name' => '現 代' , 'icon' => 'fas fa-space-shuttle'],
        ]);
    }
}
