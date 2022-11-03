<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoGallery;
use Carbon\Carbon; 
use Intervention\Image\Facades\Image;

class VideoGalleryController extends Controller
{
    public function AllVideoGallery(){

        $video = VideoGallery::latest()->get();
        return view('backend.video.all_video',compact('video'));

    } // End Method 


    public function AddVideoGallery(){
        return view('backend.video.add_video');
    } // End Method 


   public function StoreVideoGallery(Request $request){

        $image = $request->file('video_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(784,436)->save('upload/video/'.$name_gen);
        $save_url = 'upload/video/'.$name_gen;

        VideoGallery::insert([

            'video_title' => $request->video_title,
            'video_url' => $request->video_url,  
            'post_date' => Carbon::now()->format('d F Y'),
            'video_image' => $save_url, 

        ]);

         $notification = array(
            'message' => 'Video Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.video.gallery')->with($notification);


    }// End Method



    public function EditVideoGallery($id){

        $video = VideoGallery::findOrFail($id);
        return view('backend.video.edit_video',compact('video'));

    }// End Method


    public function UpdateVideoGallery(Request $request){

        $video_id = $request->id;

        if ($request->file('video_image')) {

        $image = $request->file('video_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(784,436)->save('upload/video/'.$name_gen);
        $save_url = 'upload/video/'.$name_gen;

        VideoGallery::findOrFail($video_id)->update([

            'video_title' => $request->video_title,
            'video_url' => $request->video_url,  
            'post_date' => Carbon::now()->format('d F Y'),
            'video_image' => $save_url, 

        ]);

         $notification = array(
            'message' => 'Video Update With Image Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.video.gallery')->with($notification);

        } else{

            VideoGallery::findOrFail($video_id)->update([

            'video_title' => $request->video_title,
            'video_url' => $request->video_url,  
            'post_date' => Carbon::now()->format('d F Y'), 

        ]);

         $notification = array(
            'message' => 'Video Update Without Image Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.video.gallery')->with($notification);

        }

    }// End Method


     public function DeleteVideoGallery($id){

        $photo = VideoGallery::findOrFail($id);
        $img = $photo->video_image;
        unlink($img);

        VideoGallery::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Video Gallery Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification); 


    }// End Method 


}
 