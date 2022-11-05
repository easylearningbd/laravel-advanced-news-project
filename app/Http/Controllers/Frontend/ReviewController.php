<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Review;
use Carbon\Carbon;

class ReviewController extends Controller
{
    public function StoreReview(Request $request){

        $news = $request->news_id;

        $request->validate([
            'comment' => 'required',
        ]);

        Review::insert([

            'news_id' => $news,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'created_at' => Carbon::now(), 
        ]);

        return back()->with("status","Review Will Approve By Admin");


    } // End Method



}
 