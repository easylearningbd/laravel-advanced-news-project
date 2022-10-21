<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserDashboard(){

         $id = Auth::user()->id;
        $userData = User::find($id);
        return view('frontend.user_dashboard',compact('userData'));

    } // End Method 

 public function UserProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone; 

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

         
        return back()->with("status", "Profile Updated Successfully");

    } // End Method 

    public function UserLogout(Request $request){

         Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with("status", "User Logout Successfully");

    } // End Method 


    public function ChangePassword(){

        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('frontend.change_password',compact('userData'));

    }// End Method 


     public function UserChangePassword(Request $request){

        // Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed', 
        ]);

        // Match The Old Password 
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with('error', "Old Password Doesn't Match!!");
        }
        // Update the new password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('status', "Password Change Successfully");

    } // End Method 



}
 