@php
$updatestatus=false;

if(!empty($staff)){
    $updatestatus=true;
    // dd($staff);
}
@endphp
@extends('layouts.admin.masterLayout')
@section('page')
{{$updatestatus == true? 'Edit Staff ': 'Add Staff' }}
@endsection
@section('title')
{{$updatestatus == true? 'Edit Staff ': 'Add Staff' }}
@endsection
@push('styles')

@endpush
@section('content')
<form action="{{$updatestatus == true? route('editStaffProcess'): route('addStaffProcess')}}" method="post" class="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$updatestatus == true? $staff->id: '' }}">
    <div class="row">
        <div class="col">
            <label for="name">Name <span>*</span></label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required value="{{$updatestatus == true? $staff->name: '' }}">
        </div>
        <div class="col">
            <label for="bd">Enter Your Birth-date <span>*</span></label>
            <input type="date" id="bd" name="bd" required>
        </div>
    </div>
    <div class="col">
        <label for="address">Address <span>*</span></label>
        <input type="text" id="address" name="address" placeholder="Enter your address" required value="{{$updatestatus == true? $staff->address :'' }}">
    </div>
    <div class="row">
        <div class="col">
            <label for="email">Email <span>*</span></label>
            <input type="text" id="email" name="email" placeholder="enter email" required value="{{$updatestatus == true? $staff->email :'' }}">
        </div>
        <div class="col">
            <label for="phone">Phone Number <span>*</span></label>
            <input type="text" id="phone" name="phone" placeholder="enter phone" required value="{{$updatestatus == true? $staff->phone :'' }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="password">Password <span>*</span></label>
            <input type="text" id="password" name="password" placeholder="{{$updatestatus == true? 'password cant be changed': 'Enter Your Password' }}" {{$updatestatus == true? 'disabled ': '' }} >
        </div>
        <div class="col">
            <label for="role">Choose Your Role: <span>*</span></label>
            <select name="role" id="" >
            @foreach ($roles as $role)
            <option value="{{$role->id}}" {{$updatestatus == true? 'selected ': '' }}>{{$role->name}}</option>
            @endforeach
    </select>
        </div>
    </div>
    <div class="col">
        <label for="image">Image <span>*</span></label>
        <input type="file" id="image" name="image" placeholder="image">
    </div>
    
   
    <div class="btn_gp">
        <button type="reset" value="" class="btn cancel_btn">Cancel</button>
        <button type="submit" value="" class="btn add_btn">{{$updatestatus == true? 'Edit Staff ': 'Add Staff' }}</button>
    </div>
    
    
</form>
@endsection