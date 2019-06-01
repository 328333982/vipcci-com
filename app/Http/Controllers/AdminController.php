<?php

namespace App\Http\Controllers;

use App\Category;
use App\Topic;
use Illuminate\Http\Request;
use App\Transformers\TopicTransformer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }

//软件列表展示
    public function topic()
    {
        $data = Topic::orderBy('updated_at','desc')->paginate(10);

        $data->map(function($data) {
            $data['category_name'] = $data->category->name;
            return;
        });
        return $this->response->paginator($data,new TopicTransformer());
    }

//软件列表搜索
    public function topic_search($search_content)
    {
        $data = Topic::where('title','like','%' . $search_content . '%')->orderBy('updated_at','desc')->paginate(10);
        $data->map(function($data) {
            $data['category_name'] = $data->category->name;
            return;
        });
        return $this->response->paginator($data,new TopicTransformer());
    }

//从软件列表删除
    public function topic_delete($id)
    {


        $topic = Topic::find($id);
        $topic->app_img_url()->where('topic_id',$id)->delete();
        $topic->app_version_url()->where('topic_id',$id)->delete();
        $topic->delete();
        return $this->response->array(['msg' => 'delete_topic' . '+' . $id]);
    }

//  编辑文章
    public function show($id)
    {
        $topic = Topic::find($id);
        $topic['categories'] = Category::all();
        $topic['app_img_url'] = $topic->app_img_url;
        $topic['app_version_url'] = $topic->app_version_url;

//        dd($topic);
        return $this->response->array($topic,new TopicTransformer());

    }

//    保存编辑后的内容
    public function save($id,Request $request)
    {
        $topic = Topic::find($id);
        $topic->update($request->all());

        $str=$request->input('introduction');
        $t1 = mb_strpos($str,'软件描述')+4;
        $t2 = mb_strpos($str,'软件介绍');
        $topic->description = mb_substr($str,$t1,$t2-$t1);
        $str=$request->input('introduction');
        $t1 = mb_strpos($str,'软件介绍')+4;
        $t2 = mb_strpos($str,'激活方法');
        $topic->introduction = mb_substr($str,$t1,$t2-$t1);
        $str=$request->input('introduction');
        $t1 = mb_strpos($str,'激活方法')+4;
        $t2 = mb_strpos($str,'==到此结束==');
        $topic->crack = mb_substr($str,$t1,$t2-$t1);
        $topic->save();



        $topic->app_img_url()->where('topic_id',$id)->delete();
        $topic->app_version_url()->where('topic_id',$id)->delete();
        $topic->app_img_url()->createMany($request->input('app_img_url'));
        $topic->app_version_url()->createMany($request->input('app_version_url'));


        return $this->response->array($request->input('introduction'));

    }

    public function create_show()
    {
        return $this->response->array(Category::all()->toArray());
    }

//     添加保存软件
    public function create(Request $request,Topic $topic)
    {
        $topic = $topic->create($request->input());

        $topic->app_img_url()->createMany($request->input('app_img_url'));
        return $this->response->array($topic);
    }

}
