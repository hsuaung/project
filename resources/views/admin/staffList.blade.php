@extends('layouts.admin.masterLayout')
@section('page', 'Staff Management')
@section('title', 'Staff Management')

@section('content')
    <div class="top_div">
        <form action="{{ route('dateFilter') }}" class="dateFilter">
            <input type="date" id="startDate" name="startDate" value="2024-06-3" class="date-picker" />
            <input type="date" id="endDate" name="endDate" class="date-picker" />
            <button type="submit"> <i class="lni lni-search-alt"></i></button>
     
          
          
            {{-- <div class="date">
                <label for="startDate">Start Date: </label>
                <input type="date" id="startDate" name="startDate" value="2024-06-3" class="date-picker" />
            </div>
            <div class="date">
               
                <label for="endDate">End Date: </label>
                <input type="date" id="endDate" name="endDate" class="date-picker" />
                
            </div> --}}
               </form>
        
        <div class="right_div">
            <form action="{{ route('searchStaff') }}" method="GET" class="btn search_btn">
                <input type="text" name="search" placeholder="Search Staff">
                <button type="submit"><i class="lni lni-search-alt"></i></button>
            </form>

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
                <a href="{{ route('addStaff') }}">
                    <i class="lni lni-circle-plus"></i>
                    <p>New Staff</p>
                </a>
            </div>

        </div>
        <table>
            <tr>
                <th>Staff ID</th>
                <th>Staff Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Age
    </div>
    <th>Phone</th>
    <th>Roles(s)</th>
    <th><i class="lni lni-image"></th>
    <th>Status</th>
    <th>Action</th>
    </tr>
    @foreach ($stafflist as $staff)
        <tr>
            <td>{{ $staff->id }}</td>
            <td>{{ $staff->name }}</td>
            <td>{{ $staff->email }}</td>
            <td>{{ $staff->address }}</td>
            <td>{{ $staff->age }}</td>
            <td>{{ $staff->phone }}</td>
            <td>{{ $staff->rolename }}</td>
            <td><img width="80" height="80" src="{{ asset("$staff->image") }}" alt="Admin"></td>

            <td>{{ $staff->status }}</td>
            <td>
                <a href="{{ url('/editStaff' . $staff->id) }}"><img src="{{ asset('image/admin/edit.svg') }}"
                        alt=""></a>
                <a href="{{ url('/deleteStaffProcess' . $staff->id) }}"> <img src="{{ asset('image/admin/trashbin.svg') }}"
                        alt=""></a>

            </td>
        </tr>
    @endforeach
    </table>
    </div>

    {{-- <div class="pagination"> --}}
    {{ $stafflist->links() }}
    {{-- </div> --}}
    {{-- <div class="pagination-links">
                    {{-- {{ $stafflist->links() }} --}}
    {{-- </div>  --}}


    </div>
@endsection
