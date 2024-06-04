@extends('layouts.admin.masterLayout')
@section('page', 'Customer List')
@section('title', 'Customer List')
@section('content')
<div class="top_div">
    <div class="date">
        <input type="date">
    </div>
    <div class="right_div">
        <div class="btn search_btn">
            <a href="{{route('addProduct')}}" >
                <img src="{{asset('image/admin/search.png') }}"alt="">
                <p>search</p>
            </a>
        </div>
        <div class="sort">
            <select id="sort">
                <option value="">Deafult Sorting</option>
                <option value="A">A-Z</option>
                <option value="A">A-Z</option>
                <option value="A">A-Z</option>
            </select>
        </div>
    </div>
                
                
</div>
<div class="table">
    <div class="title">
        <b>Customer List</b>

    </div>
    
    <table>
        <tr>
            <th><i class="lni lni-image"></th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Joining Date</th>
            {{-- <th>Action</th> --}}
        </tr>
        @foreach ($customerlist as  $customer)
        <tr>
            <td><img width="80" height="80" src="{{asset("$customer->image")}}" alt="customer"></td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->created_at}}</td>
{{--            
            <td>
                <img src="{{asset('image/admin/edit.svg') }}" alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td> --}}
        </tr>
        
        @endforeach
        
        
    </table>
    {{$customerlist->links()}}
</div>
           
@endsection