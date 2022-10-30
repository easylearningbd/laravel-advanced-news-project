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


    public function UpdateBanners(Request $request){

    $banner_id = $request->id;

    if ($request->file('home_one')) {

        $image1 = $request->file('home_one');
        $name_gen1 = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
        Image::make($image1)->resize(725,100)->save('upload/banner/'.$name_gen1);
        $save_url1 = 'upload/banner/'.$name_gen1;

        Banner::findOrFail($banner_id)->update([
            'home_one' => $save_url1,
        ]);

        $notification = array(
            'message' => 'Banner Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);  
    } // End If 


     if ($request->file('home_two')) {

        $image2 = $request->file('home_two');
        $name_gen2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
        Image::make($image2)->resize(725,100)->save('upload/banner/'.$name_gen2);
        $save_url2 = 'upload/banner/'.$name_gen2;

        Banner::findOrFail($banner_id)->update([
            'home_two' => $save_url2,
        ]);

        $notification = array(
            'message' => 'Banner Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);  
    } // End If 

     if ($request->file('home_three')) {

        $image3 = $request->file('home_three');
        $name_gen3 = hexdec(uniqid()).'.'.$image3->getClientOriginalExtension();
        Image::make($image3)->resize(725,100)->save('upload/banner/'.$name_gen3);
        $save_url3 = 'upload/banner/'.$name_gen3;

        Banner::findOrFail($banner_id)->update([
            'home_three' => $save_url3,
        ]);

        $notification = array(
            'message' => 'Banner Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);  
    } // End If 

     if ($request->file('home_four')) {

        $image4 = $request->file('home_four');
        $name_gen4 = hexdec(uniqid()).'.'.$image4->getClientOriginalExtension();
        Image::make($image4)->resize(725,100)->save('upload/banner/'.$name_gen4);
        $save_url4 = 'upload/banner/'.$name_gen4;

        Banner::findOrFail($banner_id)->update([
            'home_four' => $save_url4,
        ]);

        $notification = array(
            'message' => 'Banner Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);  
    } // End If 


if ($request->file('news_category_one')) {

        $image5 = $request->file('news_category_one');
        $name_gen5 = hexdec(uniqid()).'.'.$image5->getClientOriginalExtension();
        Image::make($image5)->resize(725,100)->save('upload/banner/'.$name_gen5);
        $save_url5 = 'upload/banner/'.$name_gen5;

        Banner::findOrFail($banner_id)->update([
            'news_category_one' => $save_url5,
        ]);

        $notification = array(
            'message' => 'Banner Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);  
    } // End If 


    if ($request->file('news_details_one')) {

        $image6 = $request->file('news_details_one');
        $name_gen6 = hexdec(uniqid()).'.'.$image6->getClientOriginalExtension();
        Image::make($image6)->resize(725,100)->save('upload/banner/'.$name_gen6);
        $save_url6 = 'upload/banner/'.$name_gen6;

        Banner::findOrFail($banner_id)->update([
            'news_details_one' => $save_url6,
        ]);

        $notification = array(
            'message' => 'Banner Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);  
    } // End If 
 

    } // End Method 



    

}
 