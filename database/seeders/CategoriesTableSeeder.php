<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id'=>'1','name'=>'T-Shirt','parent_category'=>'0','url'=>'t-shirt','status'=>0],
            ['id'=>'2','name'=>'Casual T-Shirt','parent_category'=>'1','url'=>'casual-t-shirt','status'=>0],
        ];
        Category::insert($categories);
    }
}
