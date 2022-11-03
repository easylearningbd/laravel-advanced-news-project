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







}
 