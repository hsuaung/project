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
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Joining Date</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Sebastian Patterson</td>
            <td>SebastianPatterson@teleworm.us</td>
            <td>918-743-7787</td>
            <td>Nov 30 2023</td>
           
            <td>
                <img src="{{asset('image/admin/edit.svg') }}" alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td>
        </tr>
        <tr>
            <td>Sebastian Patterson</td>
            <td>SebastianPatterson@teleworm.us</td>
            <td>918-743-7787</td>
            <td>Nov 30 2023</td>
           
            <td>
                <img src="{{asset('image/admin/edit.svg') }}" alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td>
        </tr>
    </table>
</div>
           
            <div class="pagination">
                <a href="#">
                    </a>
                        <a href="#">1</a>
                        <a href="#" class="pagination_active">2</a>
                        <a href="#">></a>
            </div>
@endsection