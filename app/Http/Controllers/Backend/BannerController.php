<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Carbon\Carbon; 
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function AllBanners(){
        
        $banner = Banner::findOrFail(1);
        return view('backend.banner.banner_update',compact('banner'));
    } // End Method 




}
 