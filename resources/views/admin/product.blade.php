@php

$updatestatus=false;

if(!empty($product)){
    
    $updatestatus=true;
   
}

@endphp
@extends('layouts.admin.masterLayout')

@section('title')
{{$updatestatus == true? 'Edit Product ': 'Add Product' }}
@endsection
@section('page')
{{$updatestatus == true? 'Edit Product ': 'Add Product' }}
@endsection

@section('content')

    <form action="{{$updatestatus == true ? route('editProductProcess'): route('addProductProcess') }}" method="post" class="form" enctype="multipart/form-data">
    @csrf
      <input type="hidden" name="id" value="{{$updatestatus == true ? $product->id : '' }}">
        <div class="row">
            <div class="col">
                <label for="name">Product Name <span>*</span></label>
                <input type="text" id="name" name="name" required value="{{$updatestatus == true ? $product->name : '' }}">
            </div>
            <div class="col">
                <label for="category">Category <span>*</span></label>
            
            
            <select name="category" id="">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    @isset($product){{ $product->category_id === $category->id ? 'selected' : '' }}
                    @endisset>
                    {{ $category->name }}</option>
                @endforeach
            </select>
            </div>
        </div>
       
        <div class="row">
           
            <div class="col">
                <label for="price">Price <span>*</span></label>
                <input type="text" id="price" name="price" required value="{{$updatestatus == true ? $product->price: '' }}">
                
            </div>
            <div class="col">
                <label for="stock">Stock <span>*</span></label>
                <input type="number" id="stock" name="stock" required value="{{$updatestatus == true ? $product->stock: '' }}">
            </div>
        </div>
        <div class="row">
         
        </div>
               <div class="col image">
            <label for="image">Enter Your Image: <span>*</span></label>
            <input type="file" id="image" name="images[]" placeholder="image" multiple required value="{{$updatestatus == true ? '':'' }}">
        </div>
        <div class="col">
            <label for="description">Description <span>*</span></label>
            <textarea name="description" id="description" cols="30" rows="10">{{$updatestatus == true ? $product->description:'' }}</textarea>
        </div>
            
            
            
       
   
    <div class="btn_gp">
        <a href="{{url('/admin/productList')}}" class="btn cancel_btn">Cancel</a>
        <button type="submit" value="" class="btn add_btn">{{$updatestatus == true ? 'Update Product':'Publish Product' }}</button>
    </div>
    </form>
               
@endsection
