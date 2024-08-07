@extends('layouts.admin.masterLayout')
@section('page', 'Customer List')
@section('title', 'Customer List')
@section('content')

<div class="top_div">
    {{-- dateForm --}}
    <form action="{{route('customerDateSearch')}}" class="" method="get">
        <input type="date" name="date1" value="{{Request::get('date1')? Request::get('date1'):''}}" class="dateButton">
        <input type="date" name="date2" value="{{Request::get('date2')? Request::get('date2'):''}}" class="dateButton">
        <button type="submit" class="dateButton"><i class="lni lni-search-alt "></i></button>
    </form>
    <div class="right_div">
        {{-- searchForm --}}
            <form action="{{route('searchCustomer')}}" class="button" >
                <input type="text" name="search" value="{{Request::get('search')? Request::get('search'):''}}" placeholder="Search Customers">
                <button type="submit"><i class="lni lni-search-alt"></i></button>
            </form>
           
            {{-- orderBy --}}
        <form action="{{route('customerOrderBy')}}" method="get" class="button">
            @csrf
            <select name="sort" onchange="this.form.submit()"  >
                {{-- <option value="" {{Request::get('sort') == "null"? 'selected':''}}>default</option> --}}
                <option value="asc"  {{Request::get('sort') == "asc"? 'selected':''}}>Old to New</option>
                <option value="desc" {{Request::get('sort') == "desc"? 'selected':''}} >New to Old</option>
            </select>
        </form>
        

        
    </div>
                
                
</div>
@if ($customerlist->isEmpty())
    <div class="noResult">
        <i class="lni lni-sad"></i> 
        <h2 style="text-align: center">Sorry,We dont have that customer you have been searching for. </h2>
    </div>
@else
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
@endif
           
@endsection