@php
$updatestatus=false;

if(!empty($product)){
    
    $updatestatus=true;
    // dd($product);
}


@endphp
@extends('layouts.admin.masterLayout')

@section('title')
{{$updatestatus == true? 'Add Post ': 'Edit Post' }}
@endsection
@section('page')
{{$updatestatus == true?  'Add Post ': 'Edit Post'  }}
@endsection

@section('content')


    <form action="{{$updatestatus == true ? route('editProductProcess'): route('addProductProcess') }}" method="post" class="form" enctype="multipart/form-data">
    <div class="row">
        <label for="title">Title For Your Blog</label>
        <input type="text" id="title" name="title" >
    
    </div>
    <label for="title">Title For Your Blog</label>
    <input type="text" id="title" name="title" >

     <div class="btn_gp">
        <button type="reset" value="" class="btn cancel_btn">Cancel</button>
        <button type="submit" value="" class="btn add_btn">{{$updatestatus == true ? 'Update Product':'Publish Product' }}</button>
    </div>
    </form>
               
@endsection
