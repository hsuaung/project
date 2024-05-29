@extends('layouts.customerLayout')
@section('title','category || furniture')
@section('content')

    <section class="category">
        <div class="link-connect">
            <span>Home</span>
            <span>Shop</span>
            <span>Bed</span>
        </div>
        <div class="title">{{$category}}</div>
        <div class="shop-nav">
            <div class="left-nav">
                <a href="#">View 16 per page</a>
                <a href="#">Zoom in</a>

            </div>
            
            <div class="filter">
                <a href="#">CATEGORIES
                    <img src="{{asset('/image/customer/previous-svgrepo-com 11.svg')}}" alt="">
                </a>
                <a href="#">PRICE
                    <img src="{{asset('/image/customer/previous-svgrepo-com 11.svg')}}" alt="">
                </a>
                <a href="#">COLOR
                    <img src="{{asset('/image/customer/previous-svgrepo-com 11.svg')}}" alt="">
                </a>
                <a href="#">MATERIAL
                    <img src="{{asset('/image/customer/previous-svgrepo-com 11.svg')}}" alt="">
                </a>
                <a href="#" class="selected">SORT BY LATEST
                    <img src="{{asset('/image/customer/previous-svgrepo-com 11.svg')}}" alt="">
                </a>
            </div>
        </div>
        <div class="shop-card-container">
            @foreach ($productlist as $product)
            <div class="shop-card">
                <div class="shop-card-image">
                    <img src="{{asset("$product->image")}}" width="200px" height="250px" alt="">
                        
                </div>
                <div class="shop-card-content">
                    <p>{{$product->name}}</p>
                    <p>$ {{$product->price}}</p>
                </div>
            </div>
            @endforeach
          
        
        </div>
    </section>
@endsection

@push('styles')
<link href="{{ asset('css/customer/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/customer/shop.css') }}" rel="stylesheet">

    <link href="{{ asset('css/customer/category.css') }}" rel="stylesheet">
@endpush