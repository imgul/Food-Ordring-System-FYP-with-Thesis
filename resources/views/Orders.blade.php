@extends('layout')
@section('title')
Orders 
@endsection
@section('content')
<section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="/orderplaced" class="order" method="Post">
                @csrf
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="../images/{{$p['0']->Image}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>{{$p['0']->Product_name}}</h3>
                        <p class="food-price">{{$p['0']->Price}}</p>

                        <div class="order-label">Quantity</div>
                        <input type="hidden" name="Product_name" value="{{$p['0']->Product_name}}">
                        <input type="hidden" name="Price" value="{{$p['0']->Price}}">
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="username" placeholder="CHEF101" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="0322XXXX" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="CHEF101@" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="House #, Street, City." class="input-responsive" required></textarea>

             <button type="submit" class="btn btn-primary">Confirm order</button>
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   
    @endsection
