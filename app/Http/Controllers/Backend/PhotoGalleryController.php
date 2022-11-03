<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhotoGallery;
use Carbon\Carbon; 
use Intervention\Image\Facades\Image;

class PhotoGalleryController extends Controller
{
    public function AllPhotoGallery(){

        $photo = PhotoGallery::latest()->get();
        return view('backend.photo.all_photo',compact('photo'));

    } // End Method 


    public function AddPhotoGallery(){
        return view('backend.photo.add_photo');
    }// End Method 


    public function StorePhotoGallery(Request $request){

        $image = $request->file('multi_image');

        foreach($image as $mulit_image){
 
        $name_gen = hexdec(uniqid()).'.'.$mulit_image->getClientOriginalExtension();
        Image::make($mulit_image)->resize(700,400)->save('upload/multi/'.$name_gen);
        $save_url = 'upload/multi/'.$name_gen;
        
        PhotoGallery::insert([
            'photo_gallery' => $save_url,
            'post_date' => Carbon::now()->format('d F Y'),

        ]); 
        } // End Foreach

        $notification = array(
            'message' => 'Photo Gallery Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.photo.gallery')->with($notification);

    }// End Method 













}
 