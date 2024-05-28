@extends('layouts.customerLayout')
@section('title', 'shop || furniture')
@section('content')
    {{-- 
<section class="shop-slider">
        <div class="slide-container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button ">
                    <img src="{{asset('/image/customer/previous-svgrepo-com 1.svg')}}" alt="">
                </button>
                <div class="image-list">
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(1).png')}}"  width="342px"
                    height="446px" alt="img-1" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(2).png')}}" width="342px"
                    height="446px" alt="img-2" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(3).png')}}" width="342px"
                    height="446px" alt="img-3" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(4).png')}}" width="342px"
                    height="446px" alt="img-4" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(1).png')}}" width="342px"
                    height="446px" alt="img-5" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(2).png')}}"  width="342px"
                    height="446px"alt="img-6" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(3).png')}}"  width="342px"
                    height="446px"alt="img-7" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(4).png')}}" width="342px"
                    height="446px" alt="img-8" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(1).png')}}" width="342px"
                    height="446px" alt="img-9" />
                    <img class="image-item" src="{{asset('/image/customer/IMAGE(2).png')}}" width="342px"
                    height="446px" alt="img-10" />
                </div>
                <button id="next-slide" class="slide-button">
                    <img src="{{asset('/image/customer/previous-svgrepo-com 1(1).svg')}}" alt="">
                </button>
            </div>
        
        </div>
</section> --}}
    <section class="shop">
        <div class="link-connect">
            <span>Home</span>
            <span>Shop</span>
        </div>
        <div class="title">SHOP</div>
        <div class="shop-nav">
            <a href="#">View 16 per page</a>
            <div class="filter">
                <a href="#">CATEGORIES
                    <img src="{{ asset('/image/customer/previous-svgrepo-com 11.svg') }}" alt="">
                </a>
                <a href="#">PRICE
                    <img src="{{ asset('/image/customer/previous-svgrepo-com 11.svg') }}" alt="">
                </a>
                <a href="#">COLOR
                    <img src="{{ asset('/image/customer/previous-svgrepo-com 11.svg') }}" alt="">
                </a>
                <a href="#">MATERIAL
                    <img src="{{ asset('/image/customer/previous-svgrepo-com 11.svg') }}" alt="">
                </a>
                <a href="#" class="selected">SORT BY LATEST
                    <img src="{{ asset('/image/customer/previous-svgrepo-com 11.svg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="shop-card-container">
            @foreach ($productlist as $product)
                <a class="card-link" href="{{ url('/detail/' . $product->id) }}" style="text-decoration: none;color:black">
                    <div class="shop-card">
                        <div class="shop-card-image">
                            <img src="{{ asset("$product->image") }}" width="200px" height="250px">
                            <span class="upperSpan hot">Hot</span>
                        </div>
                        <div class="shop-card-content">
                            <p>{{ $product->name }}</p>
                            <p>{{ $product->price }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>



        <div class="loadMore">
            <p>You're viewed 16 of 50 products</p>
            <a href="#">LOAD MORE</a>
        </div>
    </section>


@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/customer/shop.css') }}">
@endpush
