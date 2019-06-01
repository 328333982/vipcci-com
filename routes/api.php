<?php

use Illuminate\Http\Request;


$api = app('Dingo\Api\Routing\Router');

$api -> version('v1',[
    'namespace' => 'App\Http\Controllers',
    'middleware'=>'cors'
],function($api) {
    $api -> get('topics','AdminController@topic');
    $api -> get('topics/{id}','AdminController@show');
    $api -> get('topic_search/{search_content}','AdminController@topic_search');
    $api -> post('topics/{id}','AdminController@save');
    $api -> delete('topic_delete/{id}','AdminController@topic_delete');
    $api -> get('create','AdminController@create_show');
    $api -> post('create','AdminController@create');
    $api -> post('imgupload','ImgUploadController@img_upload');
});


$api -> version('v2',function($api) {
    $api -> get('version',function() {
        return response('this is version v2');
    });
});