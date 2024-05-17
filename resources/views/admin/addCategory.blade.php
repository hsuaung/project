@extends('layouts.admin.masterLayout')

@section('title', 'Add Product')

@section('content')
<form action="{{route('addCategoryProcess')}}" method="post" class="form" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Add new Category <span>*</span></label>
        <input type="text" id="name" name="name">
    </div>
    <div class="btn_gp">
        <button type="reset" value="" class="btn cancel_btn">Cancel</button>
        <button type="submit" value="" class="btn add_btn">Publish Category</button>
    </div>
</form>
@endsection