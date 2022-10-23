<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class CategoryController extends Controller
{
    public function AllCategory(){

        $categories = Category::latest()->get();
        return view('backend.category.category_all',compact('categories'));

    } // End Mehtod 



    public function AddCategory(){
         return view('backend.category.category_add');
    }// End Mehtod 


    public function StoreCategory(Request $request){

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),

        ]); 


         $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.category')->with($notification);


    }// End Mehtod 


    public function EditCategory($id){
        $category = Category::findOrFail($id);
        return view('backend.category.category_edit',compact('category'));
    }// End Mehtod 


    public function UpdateCategory(Request $request){

        $cat_id = $request->id;

        Category::findOrFail($cat_id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),

        ]); 


         $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.category')->with($notification);


    }// End Mehtod 


    public function DeleteCategory($id){

        Category::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }// End Mehtod 

    ////////////// Sub Category All ///////////////


     public function AllSubCategory(){

        $subcategories = Subcategory::latest()->get();
        return view('backend.subcategory.subcategory_all',compact('subcategories'));

    } // End Mehtod 


}
 