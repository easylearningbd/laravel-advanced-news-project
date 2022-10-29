<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsPost;
use Carbon\Carbon; 
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
    public function Index(){
        return view('frontend.index');
    } // End Method 


    public function NewsDetails($id,$slug){

        $news = NewsPost::findOrFail($id);

        return view('frontend.news.news_details',compact('news'));

    }// End Method 









}
  