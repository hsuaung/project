@extends('layouts.admin.masterLayout')
@section('page', 'Staff Management')
@section('title', 'Staff Management')

@section('content')
    <div class="top_div">
        <form action="{{ route('dateFilter') }}" class="dateForm" >
            <input type="date" id="startDate" name="date1" value="2024-06-3" class="date-picker" />
            <input type="date" id="endDate" name="date2" class="date-picker" />
            <button type="submit"> search</button>
            {{-- <i class="lni lni-search-alt"></i> --}}
     
          
          
            
               </form>
        
        <div class="right_div">
            <form action="{{ route('searchStaff') }}" method="GET" class="searchForm" >
                <input type="text" name="search" placeholder="Search Staff">
                <button type="submit">search</button>
            </form>

            <form action="{{route('sortStaff')}}" method="get">
                @csrf
                <select name="sort" onchange="this.form.submit()"  >
                    {{-- <option value="" {{Request::get('sort') == "null"? 'selected':''}}>default</option> --}}
                    <option value="asc"  {{Request::get('sort') == "asc"? 'selected':''}}>Oldest to Latest</option>
                    <option value="desc" {{Request::get('sort') == "desc"? 'selected':''}} >Latest to Oldest</option>
                </select>
            </form>
        </div>


    </div>
    @if ($stafflist->isEmpty())
    <div class="noResult">
        <i class="lni lni-sad"></i> 
        <h2 style="text-align: center">Sorry,We dont have that staff you have been searching for. </h2>
    </div>
@else

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
                <a href="{{ url('/admin/editStaff' . $staff->id) }}"><img src="{{ asset('image/admin/edit.svg') }}"
                        alt=""></a>
                <a href="{{ url('/admin/deleteStaffProcess' . $staff->id) }}"> <img src="{{ asset('image/admin/trashbin.svg') }}"
                        alt=""></a>

            </td>
        </tr>
    @endforeach
    </table>
    </div>

    {{-- <div class="pagination"> --}}
    {{ $stafflist->links() }}
    @endif
    {{-- </div> --}}
    {{-- <div class="pagination-links">
                    {{-- {{ $stafflist->links() }} --}}
    {{-- </div>  --}}


    </div>
@endsection
