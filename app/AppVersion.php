<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppVersion extends Model
{
    protected $fillable=['topic_id','app_name','app_version','baidu_pan_url','baidu_pan_secret','other_pan_url','update_time'];
}
