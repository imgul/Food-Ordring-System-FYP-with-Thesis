@extends('layout')
@section('title')
Food Restaurant
@endsection
@section('content')


    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

                @foreach($products as $p)
        
         <form action="search">
            @csrf
                <div class="box-3 float-container">
                    <input type="hidden" name="search" value="{{$p->Category}}">
                    <button type="submit" style="border:none;" ><img src="images/{{$p->Image}}" height="400px" alt="Dumplings" class="img-responsive img-curve"></button>

                    <h3 class="float-text text-white">{{$p->Category}}</h3>
                </div>
                </form>
    @endforeach
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
         
                @foreach($products As $p)
            <div class="food-menu-box">
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

                    <a href="sendorder/{{$p->id}}" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            @endforeach


            <div class="clearfix"></div>



        </div>

        <p class="text-center">
            <a href="foods">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->



@endsection