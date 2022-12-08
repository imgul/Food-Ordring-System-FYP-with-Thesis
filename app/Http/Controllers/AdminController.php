<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Orders;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function loginpage(){
        return view('Admin.Login');
    }
// admin login
    public function login(Request $req){
    
        $email=$req->email;
        $password=$req->password;
        session()->get('admin');
        $r=Admin::where(['email'=>$email,'password'=>$password])->get();
            
        if(isset($r['0']->id)){
            $data=Admin::find($r['0']->id);
            session()->put('admin',$data);
            return redirect('Dashboard');
            }
        else{
            return back()->with('error','INvalid');
        }
        

    }
// admin logout
    public function logout(){
        session()->flush();
        return redirect('login')->with('success','successfully logout');
    }

    // dashboard
    public function dashboard(){
        $products=Products::all();
        $count=Products::count();
        $countorders=Orders::count();
        $category=Categories::all();
        return view('Admin.Dashboard',compact('products','category','count','countorders'));
    }
    // addproduct page
    public function showproduct(){
        $products=Products::all();
        $category=Categories::all();
        return view('Admin.ProductAdd',compact('products','category'));
    }
}
