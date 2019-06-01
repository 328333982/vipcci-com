<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppImgUrl extends Model
{
    protected $fillable=['topic_id','name','url'];
}
