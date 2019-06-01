<?php

use Illuminate\Database\Seeder;
use App\AppImgUrl;

class AppImgUrlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app_img_url = factory(AppImgUrl::class)
            ->times(200)
            ->make();
        AppImgUrl::insert($app_img_url->toArray());
    }
}
