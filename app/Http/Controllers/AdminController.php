<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{ 
    public function AdminDashboard(){
        return view('admin.index');
    } // End Method 


    public function AdminLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/logout/page');

    } // End Method 

    public function AdminLogin(){

        return view('admin.admin_login');

    } // End Method 

    public function AdminLogoutPage(){
         return view('admin.admin_logout');
    } // End Method 



    public function AdminProfile(){

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));

    } // End Method 





}
 