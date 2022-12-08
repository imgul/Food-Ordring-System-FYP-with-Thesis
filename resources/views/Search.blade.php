@extends('layout')
@section('title')
Products 
@endsection
@section('content')
<!-- fOOD MEnu Section Starts Here --><section class="food-menu" >
<div class="container">
<h2 class="text-center">Foods</h2>
@foreach($data As $p)
<div class="food-menu-box ">
<div class="food-menu-img">
<img src="../images/{{$p->Image}}" alt="Chicken Hawain Dumplings" height="100px" class="img-responsive img-curve">
</div>
<div class="food-menu-desc">
<h4>{{$p->Product_name}}</h4>
<p class="food-price">${{$p->Price}}</p>
<p class="food-detail">
{{$p->Description}}
</p>
<br>
<a href="{{url('sendorder/'.$p->id)}}" class="btn btn-primary">Order Now</a>
</div>
</div>
@endforeach
</div>
</section>
<br>
@endsection