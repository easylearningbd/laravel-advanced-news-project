<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsPost;
use Carbon\Carbon; 
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function Index(){
        return view('frontend.index');
    } // End Method 


    public function NewsDetails($id,$slug){

        $news = NewsPost::findOrFail($id);

        $tags = $news->tags;
        $tags_all = explode(',', $tags);

        $cat_id = $news->category_id;
        $relatedNews = NewsPost::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(6)->get();

        $newsKey = 'blog' . $news->id;
        if (!Session::has($newsKey)) {
           $news->increment('view_count');
           Session::put($newsKey,1);
        }


        return view('frontend.news.news_details',compact('news','tags_all','relatedNews'));

    }// End Method 









}
  