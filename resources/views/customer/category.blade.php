@extends('layouts.customerLayout')
@section('title','Category | Furniture Store')
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
                <form action="{{route('categorySearch')}}" method="get" class="filterForm">
                    @csrf
                        <input type="text" name="search" value="{{Request::get('search')? Request::get('search'):''}}" >
                        <button type="submit">Search</button>
                   </form>

            
          
                <form action="{{route('categoryFilter')}}" method="post" class="filterForm">
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
        </div>
        
        <div class="shop-card-container">
            @foreach ($productlist as $product)
            <a href="{{ url('/detail/' . $product->id)}}" class="shop-card">
                <div class="shop-card-image">
                    <img src="{{asset("$product->image")}}" width="200px" height="250px" alt="">
                        
                </div>
                <div class="shop-card-content">
                    <p>{{$product->name}}</p>
                    <p>$ {{$product->price}}</p>
                </div>
            </a>
            @endforeach
          
        
        </div>
    </section>
@endsection

@push('styles')
<link href="{{ asset('css/customer/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/customer/shop.css') }}" rel="stylesheet">

    <link href="{{ asset('css/customer/category.css') }}" rel="stylesheet">
@endpush