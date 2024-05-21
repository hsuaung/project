@extends('layouts.admin.masterLayout')
@section('page', 'Product Management')
@section('title','Product Management')
@section('active','product')
@section('content')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin/staff.css') }}">
@endpush

<div class="top_div">
    <div class="btn search_btn">
        <a href="{{route('addProduct')}}" >
            <input type="text" placeholder="search"> 
            <i class="lni lni-search-alt"></i></input>
        </a>
    </div>
    
</div>
                
             
<div class="table" >
    <div class="title">
        <b>Product List</b>
        <div class="btn add_btn">
            <a href="{{route('addProduct')}}" >
                <i class="lni lni-circle-plus"></i>
                <p>New Product</p>
            </a>
        </div>
    </div>
    <table>
        <tr>
            {{-- <th><i class="lni lni-image"></i></th> --}}
            <th>ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach ($productlist as $product)
        <tr>
            {{-- <td><img width="80" height="80" src="{{asset('image/product/'.$product->image)}}" alt="Admin"></td> --}}
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->categoryName}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->stock}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <a href="{{url('/editProduct/'.$product->id)}}"><img src="{{asset('image/admin/edit.svg') }}" alt=""></a>
                <a href="{{url('/deleteProductProcess/'.$product->id)}}"><img src="{{asset('image/admin/trashbin.svg') }}" alt=""></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div class="pagination">
    <a href="#">< </a>
    <a href="#">1</a>
    <a href="#" class="pagination_active">2</a>
    <a href="#">></a>
</div>

@endsection