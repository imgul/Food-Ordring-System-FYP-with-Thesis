@extends('layout')
@section('title')
    Categories
@endsection
@section('content')
    <!-- Categories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
            @foreach ($products as $p)
                <form action="search">
                    @csrf
                    <div class="box-3 float-container">
                        <input type="hidden" name="search" value="{{ $p->Category }}">
                        <button type="submit" style="border:none;"><img src="images/{{ $p->Image }}" height="400px"
                                alt="Dumplings" class="img-responsive img-curve"></button>
                        <h3 class="float-text text-white">{{ $p->Category }}</h3>
                    </div>
                </form>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </section>
@endsection
