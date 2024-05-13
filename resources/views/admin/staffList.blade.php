@extends('layouts.adminlayouts')

@section('title', 'Staff Management')
@section('content')
<div class="top-div">
                <div class="date">
                    <p>01/01/2023 - 01/01/2023</p>
                    <img src="{{asset('image/admin/calendar.png') }}" alt="">
                </div>
                <div class="filter">
                    <div class="search">
                        <p>Search...</p>
                        <p><img src="{{asset('image/admin/search.png') }}" alt=""></p>
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
            <div class="staffList">
                <div class="staffListTitle">
                    <p>Staff List</p>
                    <a href="{{route('addStaff')}}">
                        <img src="{{asset('image/admin/+.svg') }}" alt="">
                        <p>New Staff</p>
                    </a>
                </div>
                <table class="staffTable">
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
            <div class="pagination">
                <a href="#">
                    < </a>
                        <a href="#">1</a>
                        <a href="#" class="pagination_active">2</a>
                        <a href="#">></a>
@endsection