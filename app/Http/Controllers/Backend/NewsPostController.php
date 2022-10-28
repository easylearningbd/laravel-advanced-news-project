<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\NewsPost;
use Carbon\Carbon; 
use Intervention\Image\Facades\Image;

class NewsPostController extends Controller
{
    public function AllNewsPost(){

        $allnews = NewsPost::latest()->get();
        return view('backend.news.all_news_post',compact('allnews'));
    } // End Method


    public function AddNewsPost(){
         
         $categories = Category::latest()->get();
         $subcategories = Subcategory::latest()->get();
         $adminuser = User::where('role','admin')->latest()->get();
        return view('backend.news.add_news_post',compact('categories','subcategories','adminuser'));
    }// End Method


    public function StoreNewsPost(Request $request){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(784,436)->save('upload/news/'.$name_gen);
        $save_url = 'upload/news/'.$name_gen;

        NewsPost::insert([

            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'user_id' => $request->user_id,
            'news_title' => $request->news_title,
            'news_title_slug' => strtolower(str_replace(' ','-',$request->news_title)),

            'news_details' => $request->news_details,
            'tags' => $request->tags,

            'breaking_news' => $request->breaking_news,
            'top_slider' => $request->top_slider,
            'first_section_three' => $request->first_section_three,
            'first_section_nine' => $request->first_section_nine,

            'post_date' => date('d-m-Y'),
            'post_month' => date('F'),
            'image' => $save_url,
            'created_at' => Carbon::now(),  

        ]);

         $notification = array(
            'message' => 'News Post Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.news.post')->with($notification);


    }// End Method


} 
 