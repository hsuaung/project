@extends('layouts.adminlayouts')

@php
$updatestatus=false;
if(isset($staff)){
    $updatestatus=true; 
}
// dd($staff->name);
@endphp
@section('title', 'Edit Staff User')
@section('content')


<form action="{{$updatestatus == true ? url('/editStaffProcess'): 'false' }}" method="post" class="staffEditForm">
    @csrf
    <input type="hidden" id="id" name="id"  value="{{$updatestatus == true ? $staff->id : 'false' }}">
    <input type="text" id="name" name="name" placeholder="enter name" value="{{$updatestatus == true ? $staff->name : 'false' }}">
    <input type="text" id="email" name="email" placeholder="enter email"  value="{{$updatestatus == true ? $staff->email : 'false' }}">
    <input type="text" id="address" name="address" placeholder="enter address"  value="{{$updatestatus == true ? $staff->address : 'false' }}">
    <input type="text" id="age" name="age" placeholder="enter age"  value="{{$updatestatus == true ? $staff->age : 'false' }}">
    <input type="text" id="phone" name="phone" placeholder="enter phone"  value="{{$updatestatus == true ? $staff->phone : 'false' }}">
    <input type="text" id="role_id" name="role_id" placeholder="enter role_id"  value="{{$updatestatus == true ? $staff->role_id : 'false' }}">
    <input type="text" id="password" name="password" placeholder="enter password"  value="{{$updatestatus == true ? $staff->password : 'false' }}">
   
   
    

         
    <div class="btn">
        <input type="reset" value="Cancel">
        <input type="submit" value="Update Staff">
    </div>
           
</form>

@endsection
{{-- {{url('/editStaffProcess'.$staff->id)}} --}}
{{-- {{url('/editStaffProcess'.$staff->id)}} --}}