<?php

use Faker\Generator as Faker;

$factory->define(\App\AppVersion::class, function (Faker $faker) {
    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);

    $version = [
        "1.0.0",
        "2.0.0",
        "3.0.0",
        "4.0.0",
        "5.0.0",
        "6.0.0",
        "7.0.0",
        "8.0.0",
        "9.0.0",
    ];


    shuffle($version);
    return [
        'topic_id' => random_int(1,100),
        'app_version' => 'version_'.$version[0],
        'app_name' => 'app_name__'.random_int(1,100000),
        'baidu_pan_url' => 'baidu_pan_url__'.random_int(1,100000),
        'baidu_pan_secret' => 'baidu_pan_secret__'.random_int(1,100000),
        'other_pan_url' => 'other_pan_url__'.random_int(1,100000),

        'created_at' => $created_at,
        'updated_at' => $updated_at,
        'update_time' => $updated_at,
    ];
});
