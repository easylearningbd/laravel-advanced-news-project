<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function AllCategory(){

        $categories = Category::latest()->get();
        return view('backend.category.category_all',compact('categories'));

    } // End Mehtod 



    public function AddCategory(){
         return view('backend.category.category_add');
    }// End Mehtod 



}
 