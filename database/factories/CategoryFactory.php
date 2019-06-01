<?php

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    $name = ["应用软件","媒体工具","网络工具","开发工具" ,"图形工具", "行业软件" ,"安全防护" ,"系统工具" ,"游戏", "其他软件" ];
    shuffle($name);
    return [
        'name' => $name[0],
    ];







});
