<?php

use Illuminate\Database\Seeder;
use App\AppVersion;

class AppVersionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app_version = factory(AppVersion::class)
            ->times(100)
            ->make();
        AppVersion::insert($app_version->toArray());
    }
}
