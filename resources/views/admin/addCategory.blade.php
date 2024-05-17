@php
$updatestatus=false;

if(!empty($category)){
    
    $updatestatus=true;
    // dd($category);
}
// dd("false")

@endphp

@extends('layouts.admin.masterLayout')

@section('title', 'Add Product')

@section('content')
<form action="{{$updatestatus == true ? route('editCategoryProcess') : route('addCategoryProcess')}}" method="post" class="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$updatestatus == true ? $category->id : '' }}">
    <div>
        <label for="name">Add new Category <span>*</span></label>
        <input type="text" id="name" name="name" value="{{$updatestatus == true ? $category->name : '' }}">
    </div>
    <div class="btn_gp">
        <button type="reset" value="" class="btn cancel_btn">Cancel</button>
        <button type="submit" value="" class="btn add_btn">{{$updatestatus == true ? 'Update Category' : 'Publish Category'}}</button>
    </div>
</form>
@endsection