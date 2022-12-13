@extends('layout')
@section('title')
    Order Placed
@endsection
@section('content')
    <!-- section ordre placed -->
    <section>
        <div class="container orderplaced">
            <h1>Order Has Been Placed</h1>
            <h4>Your Order Id <strong>{{ $p['0']->id }}</strong></h4>
            <p>Thank You For Ordering Foods From Food Order Restaurant</p><br>
            <a href="/" class="btn btn-primary">Continue Shopphing</a>
        </div>
    </section>
@endsection
