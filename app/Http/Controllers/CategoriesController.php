<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function addcatepro(Request $req){
        $category=new Categories;
        $category->Category_name=$req->name;
        $category->save();
        return redirect()->back();
    }
// showing data in dashboard
    public function showcategories(){
        $category=Categories::all();
        return view('Admin.AddCategories',compact('category'));
    }

// delete function for categories
    public function deletecat($id){    
        
        $cate=Categories::find($id);
        $cate->delete();
      
        return redirect()->back();

    }


}
