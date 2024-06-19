@extends('layouts.admin.masterLayout')

@section('page', 'Product Management')
@section('title','Product Management')
@section('active','product')
@section('content')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin/staff.css') }}">
@endpush
                
             
<div class="table" >
    <div class="title">
        <form action="{{ route('searchProduct') }}" method="GET" class="btn search_btn">
            <input type="text" name="search" placeholder="Search Products" value="{{Request::get('search')? Request::get('search'):''}}">
            <button type="submit"><i class="lni lni-search-alt"></i></button>
        </form>

        <div class="btn add_btn">
            <a href="{{route('addProduct')}}" >
                <i class="lni lni-circle-plus"></i>
                <p>New Product</p>
            </a>
        </div>
    </div>

    @if ($productlist->isEmpty())
    <div class="noResult">
        <i class="lni lni-sad"></i> 
        <h2 style="text-align: center">Sorry,We dont have that product you have been searching for. </h2>
    </div>
        
        @else 
            <table>
                <tr>
                    <th><i class="lni lni-image"></i></th>
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
                    <td><img width="80" height="80" src="{{asset("$product->image")}}" alt="Product"></td>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->categoryName}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->stock}}</td>
                    <td>$ {{$product->price}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>
                        <a href="{{url('/admin/editProduct/'.$product->id)}}"><img src="{{asset('image/admin/edit.svg') }}" alt=""></a>
                        <a href="{{url('/admin/deleteProductProcess/'.$product->id)}}"><img src="{{asset('image/admin/trashbin.svg') }}" alt=""></a>
                    </td>
                </tr>
                @endforeach
                
            </table>
            
            {{$productlist->links()}}
       
        @endif

   
    
    
</div>



{{-- <div class="pagination">
    <a href="#">< </a>
    <a href="#">1</a>
    <a href="#" class="pagination_active">2</a>
    <a href="#">></a>
</div> --}}

@endsection