@extends('layouts.admin.masterLayout')
@section('page', 'Staff Management')
@section('title', 'Staff Management')
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
                    <b>Staff List</b>
                    <div class="btn add_btn">
                        <a href="{{route('addStaff')}}">
                            <img src="{{asset('image/admin/staff.png') }}" alt="">
                            <p>New Staff</p>
                        </a>
                    </div>
                   
                </div>
                <table >
                    <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Age</div>
                        <th>Phone</th>
                        <th>Roles(s)</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($stafflist as $staff)
                    <tr>
                        <td>{{$staff->id}}</td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->address}}</td>
                        <td>{{$staff->age}}</td>
                        <td>{{$staff->phone}}</td>
                        <td>{{$staff->rolename}}</td>
                        <td><img width="80" height="80" src="{{asset('image/staff/'.$staff->image)}}" alt="Admin"></td>
       
                        <td>{{$staff->status}}</td>
                        <td>
                            <a href="{{url('/editStaff'.$staff->id)}}"><img src="{{asset('image/admin/edit.svg') }}" alt=""></a>
                            <a href="{{url('/deleteStaffProcess'.$staff->id)}}"> <img src="{{asset('image/admin/trashbin.svg') }}" alt=""></a>
                        
                        </td>
                    </tr>
                
                    
                    @endforeach
                </table>
            </div>
                
                <div class="pagination-links">
                    {{-- {{ $stafflist->links() }} --}}
                </div>
                
               
            </div>
 @endsection