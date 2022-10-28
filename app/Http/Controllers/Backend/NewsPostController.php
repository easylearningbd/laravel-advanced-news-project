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


    public function EditNewsPost($id){

         $categories = Category::latest()->get();
         $subcategories = Subcategory::latest()->get();
         $adminuser = User::where('role','admin')->latest()->get();
         $newspost = NewsPost::findOrFail($id);
         return view('backend.news.edit_news_post',compact('categories','subcategories','adminuser','newspost'));
    }// End Method

    public function UpdateNewsPost(Request $request){

        $newspost_id = $request->id;

        if ($request->file('image')) {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(784,436)->save('upload/news/'.$name_gen);
        $save_url = 'upload/news/'.$name_gen;

        NewsPost::findOrFail($newspost_id)->update([

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
            'updated_at' => Carbon::now(),  

        ]);

         $notification = array(
            'message' => 'News Post Updated with Image Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.news.post')->with($notification);


        }else{

             NewsPost::findOrFail($newspost_id)->update([

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
            'updated_at' => Carbon::now(),  

        ]);

         $notification = array(
            'message' => 'News Post Updated without Image Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.news.post')->with($notification);

        } 

    }// End Method


    public function DeleteNewsPost($id){

        $post_image = NewsPost::findOrFail($id);
        $img = $post_image->image;
        unlink($img);

        NewsPost::findOrFail($id)->delete();

         $notification = array(
            'message' => 'News Post Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }// End Method


    public function InactiveNewsPost($id){

        NewsPost::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'News Post InActive',
            'alert-type' => 'info'

        );
        return redirect()->back()->with($notification);

    }// End Method

    public function ActiveNewsPost($id){

        NewsPost::findOrFail($id)->update(['status' => 1]);

        $notification = array(
            'message' => 'News Post Active',
            'alert-type' => 'info'

        );
        return redirect()->back()->with($notification);

    }// End Method



 

} 
 