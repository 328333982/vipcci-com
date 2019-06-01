<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['category_id','title','description','keywords','introduction','download','avatar'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function app_img_url()
    {
        return $this->hasMany('App\AppImgUrl');
    }

    public function app_version_url()
    {
        return $this->hasMany('App\AppVersion');
    }
}
