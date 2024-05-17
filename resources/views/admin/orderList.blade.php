@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin/order.css') }}">
@endpush
@extends('layouts.admin.masterLayout')
@section('page', 'Order List')
@section('title', 'Order List')
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
                <option value="">Status</option>
                <option value="A">A-Z</option>
                <option value="A">A-Z</option>
                <option value="A">A-Z</option>
            </select>
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
<div class="order-overall">
    <div class="order-deliver order">
        <div>
            <p>Orders Delivered</p>
            <h1>648K</h1>
        </div>
        <div>
        <input type="checkbox">
        </div>
    </div>
    <div class="order-pending order">
        <div>
            <p>Orders Pending</p>
            <h1>650</h1>
        </div>
        <div>
            <input type="checkbox">
        </div>
    </div>
    <div class="order-cancel order">
        <div>
            <p>Orders Cancel</p>
            <h1>56</h1>
        </div>
        <div>
            <input type="checkbox">
        </div>
    </div>
</div>
<div class="table">
    <div class="title">

    </div>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Order ID</th>
            <th>Date</th>
            <th>Customer Name</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Morden Sofa</td>
            <td>EE72823</td>
            <td>2023 Nov 22</td>
            <td>Sofia Mia</td>
            <td>
                <span class="dot dot-deliver"></span> Delivered
            </td>
            <td >250.000 MMK</td>
            <td>
                <img src="{{asset('image/admin/edit.svg') }}" alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td>
        </tr>
        <tr>
            <td>Morden Sofa</td>
            <td>EE72823</td>
            <td>2023 Nov 22</td>
            <td>Sofia Mia</td>
            <td>
                <span class="dot dot-pending"></span> Delivered
            </td>
            <td >250.000 MMK</td>
            <td>
                <img src="{{asset('image/admin/edit.svg') }}" alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td>
        </tr>
        <tr>
            <td>Morden Sofa</td>
            <td>EE72823</td>
            <td>2023 Nov 22</td>
            <td>Sofia Mia</td>
            <td>
                <span class="dot dot-cancel"></span> Delivered
            </td>
            <td >250.000 MMK</td>
            <td>
                <img src="{{asset('image/admin/edit.svg') }}" alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td>
        </tr>
    </table>
</div>
<div class="pagination">
    <a href="#">< </a>
    <a href="#">1</a>
    <a href="#" class="pagination_active">2</a>
    <a href="#">></a>
</div>
@endsection