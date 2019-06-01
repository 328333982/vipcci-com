<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $topics = factory(Topic::class)
            ->times(100)
            ->make();
        Topic::insert($topics->toArray());
    }
}
