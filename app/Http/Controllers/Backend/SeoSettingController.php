<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoSetting;

class SeoSettingController extends Controller
{
    public function SeoSiteSetting(){

        $seo = SeoSetting::find(1);
        return view('backend.seo.seo_data',compact('seo'));
        
    } // End Method 



}
 