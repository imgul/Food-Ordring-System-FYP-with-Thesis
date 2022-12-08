<?php

namespace App\Http\Controllers;

use App\Models\Orders;

use App\Models\Products;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
public function sendorder($id){

    $product=Products::where(['id'=>$id])->get();
    return view('Orders',['p'=> $product]);
}
// adding products to controller
public function orderplace(Request $req){
    $order=new Orders;
   
    $order->Product_name=$req->input('Product_name');
    $order->Price=$req->input('Price');
    $order->Quantity=$req->input('qty');
    $order->Name=$req->username;
    $order->Phone=$req->contact;
    $order->Email=$req->email;
    $order->Address=$req->address;
    $order->save();
    $orders=Orders::where(['id'=>$order->id])->get();
    return view('OrderPlaced',['p'=>$orders]);



}
// dashboard show
public function showorders(){
    $orders=Orders::all();
    return view('Admin.Order',compact('orders'));
}

// delete orders

public function deleteorders($id)
{
    $delete=Orders::find($id);
    $delete->delete();
    return redirect()->back()->with('success' , 'Order Has been Sent');
} 



}
