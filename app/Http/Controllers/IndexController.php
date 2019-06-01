<?php

namespace App\Http\Controllers;

use App\Category;
use App\Topic;
use Illuminate\Http\Request;
use App\Transformers\TopicTransformer;

class IndexController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $topics = Topic::orderBy('updated_at', 'desc')->get();
        return view('index',compact('topics','categories'));
    }

    public function topic(Topic $topic)
    {

        $topics = Topic::where('category_id','=',$topic->category_id)->get();
        $topics_by_download = Topic::orderBy('download', 'desc')->paginate(5);
        $app_img_url = $topic->app_img_url()->get();
        return view('topic',compact('topic','app_img_url','topics','topics_by_download'));
    }

    public function category(Category $category)
    {
        $categories = Category::all();
        $topics = $category->topics()->get();

        return view('index',compact('topics','categories'));
    }
}
