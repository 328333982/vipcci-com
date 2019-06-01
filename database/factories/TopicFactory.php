<?php

use Faker\Generator as Faker;

$factory->define(\App\Topic::class, function (Faker $faker) {
    $sentence = $faker->sentence();

    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);
    $avatar = [
        "https://img.xclient.info/attachment/2018/06/19ecfa72-79f8-f17b-1dc6-37fe153f8d63.png",
        "https://img.xclient.info/attachment/2018/07/63220299-9108-81aa-c3f3-1c85bcda303f.png",
        "https://img.xclient.info/attachment/2017/09/3f7c523f-594a-1d88-fa83-97ca21c6dc80.png",
        "https://img.xclient.info/attachment/2018/12/906c23df-d2ae-fc07-238d-912ea926a5df.png",
        "https://img.xclient.info/attachment/2018/09/2e169091-eaf5-6944-70a1-7408dd96f4f3.png",
        "https://img.xclient.info/attachment/2015/11/1c627c6b-4504-368d-fd20-b3fbee14d3d7.png",
        "https://img.xclient.info/attachment/2016/09/33afd851-0b93-9052-3d7a-d9e19c7bcb08.png",
        "https://img.xclient.info/attachment/2015/11/f2e999f8-8baf-1190-f3ed-e093831af7d3.png",
    ];
    shuffle($avatar);
    return [
        'title' => $sentence,
        'keywords' => $sentence,
        'introduction' => $faker->text(),
        'description' => $faker->text(),
        'crack' => $faker->title(),
        'category_id' => random_int(1,10),
        'download' => random_int(1,10000),
        'avatar'=> $avatar[0],
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
