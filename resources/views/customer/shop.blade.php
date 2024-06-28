@extends('layouts.customerLayout')
@section('title', 'shop || furniture')
@section('content')

<div class="wrapper">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <div class="carousel">
        <div class="card">
            <img src="{{asset('/image/customer/IMAGE(1).png')}}" alt="img" draggable="false">
        </div>
        <div class="card">
            <img src="{{asset('/image/customer/IMAGE(2).png')}}" alt="img" draggable="false">
        </div>
        <div class="card">
            <img src="{{asset('/image/customer/IMAGE(3).png')}}" alt="img" draggable="false">
        </div>
        <div class="card">
            <img src="{{asset('/image/customer/IMAGE(4).png')}}" alt="img" draggable="false">
        </div>
        <div class="card">
            <img src="{{asset('/image/customer/IMAGE(1).png')}}" alt="img" draggable="false">
        </div>
    </div>
    <i id="right" class="fa-solid fa-angle-right"></i>
</div>


  
    <section class="">
        <div class="link-connect">
            <span>Home</span>
            <span>Shop</span>
        </div>
        <div class="title">SHOP</div>
        <div class="shop-nav">
            {{-- <a href="#">View 16 per page</a> --}}
                <form action="{{route('shopSearch')}}" method="get" class="filterForm" id="search">
                    {{-- @csrf --}}
                        <input type="text" name="search" value="{{Request::get('search')? Request::get('search'):''}}" >
                        <button type="submit">Search</button>
                   </form>

            
          
                <form action="{{route('shopFilter')}}" method="post" class="filterForm">
                    @csrf
                    <select name="category" id="" class="selectBox"> 
                        <option value="">Categories</option>
                        @foreach ($categories as $category )
                            <option value="{{$category->id}}" {{Request::get('category') == $category->id ? 'selected':''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    <select name="price" id="" class="selectBox">
                        <option value="">Default</option>                    
                        <option value="below" {{Request::get('price') == "below"? 'selected':''}}>below $500</option>
                        <option value="between" {{Request::get('price') == "between"? 'selected':''}}>between $500 and $1000 </option>
                        <option value="above" {{Request::get('price') == "above"? 'selected':''}}>above $1000</option>
                    </select>
                    <select name="orderby" id="" class="selectBox">
                        <option value="asc" {{Request::get('orderby') == "asc"? 'selected':''}}>Oldest to Latest</option>
                        <option value="desc" {{Request::get('orderby') == "desc"? 'selected':''}}>Latest to Oldest</option>
                        
                    </select>
                   
                   <button type="submit">filter</button>


                </form>
                
            
        </div>
        @if ($productlist->isEmpty())
        <div class="noResult">
            <i class="lni lni-sad"></i> 
            <h2 style="text-align: center">Sorry,We dont have that product you have been searching for. </h2>
        </div>
          
        @else
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
                            <p>$ {{ $product->price }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        {{-- <div class="loadMore">
            <p>You're viewed 16 of 50 products</p>
            <a href="#">LOAD MORE</a>
        </div> --}}
        @endif
        



        
    </section>


@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/customer/shop.css') }}">
@endpush
