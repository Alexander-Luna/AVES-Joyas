@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                @foreach (['Laptop Collection', 'Accessories Collection', 'Cameras Collection'] as $collection)
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{ asset('img/shop01.png') }}" alt="Shop Image">
                            </div>
                            <div class="shop-body">
                                <h3>{{ $collection }}</h3>
                                <a href="#" class="cta-btn">Comprar ahora <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('home.new-products')
    @include('home.hot-deal')
    @include('home.top-selling')
@endsection
