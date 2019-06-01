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
//        $categories = factory(Category::class)
//            ->times(10)
//            ->make();
//        Category::insert($categories->toArray());
        $categories = [
            ['id'=>1,'name'=>"应用软件"],
            ['id'=>2,'name'=>"媒体工具"],
            ['id'=>3,'name'=>"网络工具"],
            ['id'=>4,'name'=>"开发工具"],
            ['id'=>5,'name'=>"图形工具"],
            ['id'=>6,'name'=>"行业软件" ],
            ['id'=>7,'name'=>"安全防护" ],
            ['id'=>8,'name'=>"系统工具" ],
            ['id'=>9,'name'=>"游戏软件"],
            ['id'=>10,'name'=>"其他软件" ]
        ];
        Category::insert($categories);
    }
}
