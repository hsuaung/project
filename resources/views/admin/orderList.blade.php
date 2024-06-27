@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin/order.css') }}">
@endpush
@extends('layouts.admin.masterLayout')
@section('page', 'Order List')
@section('title', 'Order List')
@section('content')
<div class="top_div">
    <form action="{{route('orderDateSearch')}}" class="dateForm" method="get">
        <input type="date" name="date1" value="{{Request::get('date1')? Request::get('date1'):''}}">
        <input type="date" name="date2" value="{{Request::get('date2')? Request::get('date2'):''}}">
        <button type="submit">search</button>
    </form>
    <form action="{{route('orderSearch')}}" class="searchForm" method="post" >
        @csrf
        <input type="text" name="search" value="{{Request::get('search')? Request::get('search'):''}}">
        <button type="submit">Search</button>
    </form>
    <div class="">
       
        <div >
            <form action="{{route('orderStatus')}}" method="get" >
                @csrf
                <select name="status" onchange="this.form.submit()"  >
                    <option value="status" {{Request::get('status') == "status"? 'selected':''}}> All Orders</option>
                    <option value="pending"  {{Request::get('status') == "pending"? 'selected':''}}>Pending</option>
                    <option value="delivered" {{Request::get('status') == "delivered"? 'selected':''}} >Delivered</option>
                    <option value="cancel" {{Request::get('status') == "cancel"? 'selected':''}} >Cancel</option>
                   
                </select>
            </form>
            <form action="{{route('orderOrderBy')}}" method="get">
                @csrf
                <select name="sort" onchange="this.form.submit()"  >
                    {{-- <option value="" {{Request::get('sort') == "null"? 'selected':''}}>default</option> --}}
                    <option value="asc"  {{Request::get('sort') == "asc"? 'selected':''}}>Old to New</option>
                    <option value="desc" {{Request::get('sort') == "desc"? 'selected':''}} >New to Old</option>
                </select>
            </form>
            
        </div>  
       
    </div>
</div>
<div class="top_div">
   
    <div class="right_div">
        {{-- <div class="btn search_btn"> --}}
           
            {{-- <form action="{{route('orderSearch')}}" method="post" class="searchForm">
                @csrf
                <input type="text" name="search">
                <button type="submit">Search</button>
            </form> --}}
           
        {{-- </div> --}}
       
       
    </div>
                
                
</div>
<div class="order-overall">
    <div class="order-deliver order">
        <div>
            <p>Orders Delivered</p>
            <h1>{{$orderDelivered}}</h1>
        </div>
        <div>
        <input type="checkbox">
        </div>
    </div>
    <div class="order-pending order">
        <div>
            <p>Orders Pending</p>
            <h1>{{$orderPending}}</h1>
        </div>
        <div>
            <input type="checkbox">
        </div>
    </div>
    <div class="order-cancel order">
        <div>
            <p>Orders Cancel</p>
            <h1>{{$orderCancel}}</h1>
        </div>
        <div>
            <input type="checkbox">
        </div>
    </div>
   
</div>
@if ($orders->isEmpty())
    <div class="noResult">
        <i class="lni lni-sad"></i> 
        <h2 style="text-align: center">Sorry,We dont have that order you have been searching for. </h2>
    </div>
@else

<div class="table">
    <div class="title">

    </div>

    <table>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Phone</th>
            <th>Address</th>
            <th>Payment Type</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->buyername}}</td>
            <td>{{$order->buyeremail}}</td>
            <td>{{$order->buyerphone}}</td>
            <td>{{$order->deliveryaddress}}</td>
            <td>{{$order->paymenttype}}</td>
            <td>{{$order->totalprice}}</td>
          
            <td>
                <form action="{{route('orderUpdate')}}" method="">
                    <input type="hidden" name="id" value="{{$order->id}}">
                   
                    <input type="radio" class="deliverRadio" onchange="this.form.submit()" name="status" value="delivered" {{$order->status=='delivered'? 'checked':''}} >deliver
                    <input type="radio" class="pendingRadio" onchange="this.form.submit()" name="status" value="pending" {{$order->status=='pending'? 'checked':''}} >pending
                    <input type="radio" class="cancelRadio" onchange="this.form.submit()" name="status" value="cancel" {{$order->status=='cancel'? 'checked':''}} >cancel
    

                </form>
            </td>
            <td>
                <a href="orderDetail/{{$order->id}}"> detail</a>
            </td>
        </tr>
        @endforeach
    </table>
    
</div>
{{$orders->links()}}
@endif


@endsection


