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


}
 