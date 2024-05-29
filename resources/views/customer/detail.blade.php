@extends('layouts.customerLayout')
@section('title','detail || furniture')
@section('content')

              {{-- @dd($images[0]->image) --}}
<section class="detail-section">

        <div class="link-connect">
            <span>Home</span>
            <span>Shop</span>
            <span>Bed</span>
            <span>Modway Olivia Bed</span>
        </div>
        <div class="detail">
            <div class="detail-img">
                <img width="250" height="200" src="{{$images[0]->image}}" alt="Product">
            </div>
            <div class="detail-content">
                <h1>{{$product[0]->name}}</h1>
                <p>${{$product[0]->price}}</p>
                <p>
                    {{$product[0]->description}}
                    <div class="btn-gp">
                    <input type="number" value="1">
                    <a href="">Add to cart</a>
                    <input type="text">
                    <input type="text">
                </div>
                <p>SKU: BE-006</p>
                <p>Categories: {{$product[0]->categoryName}}</p>
                <p>Tags: theme-sky, upstore, WooCommerce, WordPress</p>
                <div class="social">
                    <img src="{{asset('/image/customer/detail-facebook.png')}}" alt="">
                    <img src="{{asset('/image/customer/detail-twitter.png')}}" alt="">
                    <img src="{{asset('/image/customer/detail-pinterest.png')}}" alt="">
                    <img src="{{asset('/image/customer/detail-linkin.png')}}" alt="">
                    <img src="{{asset('/image/customer/detail-reddit.png')}}" alt="">
                </div>
            </div>
            <div class="detail-img-view">
                <img width="250" height="200" src="{{$images[1]->image}}"  alt="">
                <img width="250" height="200" src="{{$images[2]->image}}"  alt="">
            </div>
        </div>

        <section class="tab-menu">
            <div class="tab-nav">
                <button class="" onclick="openMenu('description')"><a>DESCRIPTION</a></button>
                <button class="" onclick="openMenu('additional')"><a>ADDITIONAL INFORMATION</a></button>
            </div>
            <div id="description" class="menu ">
                <p> {{$product[0]->description}}</p>
                <h3>Features</h3>
                <div class="text-indent cutoff-text">
                    <p> {{$product[0]->feature}}</p>
                    {{-- <p>100% polyster fabric cover</p>
                    <p>plywood panel construction with thick foam padding</p> --}}
                </div>
                
            
                <input class="expand-btn" type="checkbox">
            
            </div>
            <div id="additional" class="menu" style="display: none">
                <p class="cutoff-text">
                    {{$product[0]->additioninfo}}
                </p>
                <input class="expand-btn" type="checkbox">
            </div>
        </section>
        <section class="recommend">
            <h4>YOU MAY ALSO LIKE...</h4>
            <div class="card-container">
                <div class="card">
                    <div class="card-img">
                        <img src="{{asset('/image/customer/detail-card1.png')}}" alt="">
                    </div>
                      <div class="card-content">
                        <p>Haiku 2-Seater Sofa</p>
                        <p>$999.00 -$1,499.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('/image/customer/detail-card2.png')}}" alt="">
                    <div class="card-content">
                        <p>Solid Wood Side Tables</p>
                        <p>$350.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('/image/customer/detail-card3.png')}}" alt="">
                    <div class="card-content">
                        <p>Vipp Wool Pillow</p>
                        <p>$79.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('/image/customer/detail-card4.png')}}" alt="">
                    <div class="card-content">
                        <span class="upperSpan minus">-20%</span>
                        <p>Vipp Wool Blanket</p>
                        <p><span class="mute-text">$100.00</span> $80.00</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    

@endsection

@push('styles')
    <link href="{{ asset('css/customer/detail.css') }}" rel="stylesheet">
@endpush