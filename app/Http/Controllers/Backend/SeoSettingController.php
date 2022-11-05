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

    public function UpdateSeoSetting(Request $request){

        $seo_id = $request->id;

        SeoSetting::findOrFail($seo_id)->update([
            'meta_title' => $request->meta_title,
            'meta_author' => $request->meta_author,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,

        ]);


        $notification = array(
            'message' => 'Seo Setting Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);


    }// End Method 

}
 