@php
$updatestatus=false;

if(!empty($product)){
    
    $updatestatus=true;
    // dd($product);
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
            {{-- <a href="{{route('addCategory')}}"> --}}
                {{-- <img src="{{asset('image/admin/+.svg') }}"alt=""> --}}
              
                {{-- <p>Edit Category</p> --}}
            {{-- </a> --}}
          
            <select name="category" id="">
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{$updatestatus == true ? 'selected': '' }}>{{$category->name}}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="row">
            
            <div class="col">
                <label for="code"> Choose Code <span>*</span> </label>
                <select name="code" id="" >
                    @foreach ($codes as $code)
                    <option value="{{$code->id}}" {{$updatestatus == true ? 'selected': '' }} >{{$code->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="code_name">Code Number <span>*</span></label>
                <input type="number" name="code_name" placeholder="Code Number" required value="{{$updatestatus == true ? $product->code_name: '' }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="staff_id">Choose Staff <span>*</span></label>
            <select name="staff_id" id="">
                @foreach ($staffs as $staff)
                <option value="{{$staff->id}}" {{$updatestatus == true ? 'selected': '' }}>{{$staff->name}}</option>
                @endforeach
            </select>
            </div>
            <div class="col">
                <label for="price">Price <span>*</span></label>
                <input type="text" id="price" name="price" required value="{{$updatestatus == true ? $product->price: '' }}">
                
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="detail">Detail <span>*</span></label>
                <input type="text" id="detail" name="detail" required value="{{$updatestatus == true ? $product->detail: '' }}">
            </div>
            <div class="col">
                <label for="stock">Stock <span>*</span></label>
                <input type="number" id="stock" name="stock" required value="{{$updatestatus == true ? $product->stock: '' }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="feature">Feature <span>*</span></label>
                <input type="text" id="feature" name="feature" required value="{{$updatestatus == true ? $product->feature:'' }}">
            </div>
            <div class="col">
                <label for="additioninfo">Additioninfo <span>*</span></label>
                <input type="text" id="additioninfo" name="additioninfo" required value="{{$updatestatus == true ? $product->additioninfo:'' }}">
            </div>
        </div>
        <div class="col">
            <label for="image">Enter Your Image: <span>*</span></label>
            <input type="file" id="image" name="images[]" placeholder="image" multiple required value="{{$updatestatus == true ? '':'' }}">
        </div>
        <div class="col">
            <label for="description">Description <span>*</span></label>
            <textarea name="description" id="description" cols="30" rows="10">{{$updatestatus == true ? $product->description:'' }}</textarea>
        </div>
            
            
            
       
   
    <div class="btn_gp">
        <button type="reset" value="" class="btn cancel_btn">Cancel</button>
        <button type="submit" value="" class="btn add_btn">{{$updatestatus == true ? 'Update Product':'Publish Product' }}</button>
    </div>
    </form>
               
@endsection
