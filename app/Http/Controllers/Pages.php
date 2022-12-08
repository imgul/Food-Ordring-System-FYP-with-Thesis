<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class Pages extends Controller
{
  public function home()
  {
    $products = Products::orderby('id', 'asc')->limit(10)->paginate(9);
    return view('Home', compact('products'));
  }
  public function category()
  {
    $products = Products::orderby('id', 'asc')->limit(10)->paginate(9);
    return view('Categories', compact('products'));
  }
  public function foods()
  {
    $products = Products::orderby('id', 'asc')->limit(10)->paginate(9);
    return view('Foods', compact('products'));
  }

  public function contact()
  {
    return view('Contact');
  }
}
