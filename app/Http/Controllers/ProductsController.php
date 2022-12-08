<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

// addproducts

public function Addproducts(Request $req){
    $product=new Products;
    $product->Product_name=$req->name;
    $product->Price=$req->Price;
    $product->Category=$req->category;
    $product->Description=$req->description;
    // image section
    $imagecategory=$req->file("image");
    $extcategory = time().".".$imagecategory->getClientOriginalName();
    $imagecategory->move("./images",$extcategory);
    $product->image=$extcategory;
    // end of image section
    $product->save();
    return redirect()->back()->with('success' ,'Product has been added');

}
// product delete
public function deleteproduct($id){
    $delete=Products::find($id);
    $delete->delete();
    return redirect()->back()->with('success' , 'product has been deleted');
}

// product show on website
public function showProducts(){
    $product=Products::Paginate(8);
    return view('Products',compact('product'));
}
// search function
public function search(){
    $search=$_GET['search'];
    $data=Products::where('Product_name','LIKE','%'.$search.'%')->orwhere('Category','LIKE','%'.$search.'%' )->get();
    return view('Search',compact('data'));
}

}
