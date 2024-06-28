@extends('layouts.customerLayout')
@section('title', 'detail || furniture')
@section('content')


    <section class="detail-section">

        {{-- <div class="link-connect">
            <span>Home</span>
            <span>Shop</span>
            <span>Bed</span>
            <span>Modway Olivia Bed</span>
        </div> --}}
        <div class="detail">
            <div class="detail-img">
                <img src="{{ $images[0]->image }}" alt="Product" id="mainImage">
            </div>
            <div class="detail-content">
                <h1>{{ $product[0]->name }}</h1>
                <p>${{ $product[0]->price }}</p>
                <p>
                    {{ $product[0]->description }}
                <div class="btn-gp">
                    <form action="{{ route('addtocart') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $product[0]->id }}" name="id">
                        <input type="number" value="1" min="1" max="100" name="quantity">
                        <button type="submit" class="cart-btn">Add to cart</button>

                    </form>
                    <form action="{{ route('buynow') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $product[0]->id }}" name="id">
                        <input type="hidden" value="1" min="1" max="100" name="quantity">
                        <button type="submit" class="cart-btn">Buy Now</button>

                    </form>
                 

                </div>
                <p>SKU: BE-006</p>
                <p>Categories: {{ $product[0]->categoryName }}</p>
                <p>Tags: theme-sky, upstore, WooCommerce, WordPress</p>
                <div class="social">
                    <img src="{{ asset('/image/customer/detail-facebook.png') }}" alt="">
                    <img src="{{ asset('/image/customer/detail-twitter.png') }}" alt="">
                    <img src="{{ asset('/image/customer/detail-pinterest.png') }}" alt="">
                    <img src="{{ asset('/image/customer/detail-linkin.png') }}" alt="">
                    <img src="{{ asset('/image/customer/detail-reddit.png') }}" alt="">
                </div>
            </div>
            <div class="detail-img-view">
                
                    <img width="250" height="200" src="{{ $images[0]->image }}" alt=""
                    onclick="changeMainImage('{{ $images[0]->image }}')">
                
                
                    <img width="250" height="200" src="{{ $images[1]->image }}" alt=""
                    onclick="changeMainImage('{{ $images[1]->image }}')">
                
                
                    <img width="250" height="200" src="{{ $images[2]->image }}" alt=""
                    onclick="changeMainImage('{{ $images[2]->image }}')">

              
               
            </div>
        </div>

        <section class="tab-menu">
            <div class="tab-nav">
                <button class="" onclick="openMenu('description')"><a>DESCRIPTION</a></button>
                <button class="" onclick="openMenu('additional')"><a>ADDITIONAL INFORMATION</a></button>
            </div>
            <div id="description" class="menu ">
                <p> {{ $product[0]->description }}</p>
                <h3>Features</h3>
                <div class="text-indent cutoff-text">
                    <p> {{ $product[0]->feature }}</p>
                </div>
                <input class="expand-btn" type="checkbox">

            </div>
            <div id="additional" class="menu" style="display: none">
                <p class="cutoff-text">
                    {{ $product[0]->additioninfo }}
                </p>
                <input class="expand-btn" type="checkbox">
            </div>
        </section>
        <section class="recommend">
            <h4>YOU MAY ALSO LIKE...</h4>
            <div class="card-container">
                @foreach ($productlist as $product)
                <a href="{{ url('/detail/' . $product->id)}}"  class="card">
                    <div class="card-img">
                        <img src="{{ asset("$product->image") }}" alt="">
                    </div>
                    <div class="card-content">
                        <p>{{$product->name}}</p>
                        <p> $ {{$product->price}}</p>
                    </div>
                </a>
                @endforeach
            </div>

        </section>
    
    </section>

    <script>
        function changeMainImage(image) {
            const mainImg = document.getElementById('mainImage');
            mainImg.src = image;
        }

        // document.addEventListener('DOMContentLoaded', function())
    </script>
@endsection

@push('styles')
    <link href="{{ asset('css/customer/detail.css') }}" rel="stylesheet">
@endpush
