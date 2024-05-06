@extends('layouts.adminlayouts')

@section('title', 'Customer List')

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
                    <p>Customers</p>
                    <!-- <button>
                        <img src="/image/+.svg" alt="">
                        <p>New Staff</p>
                    </button> -->
                </div>
                <div class="staffListTable">
                    <div class="customer-row staffListHeader">
                        <div><input type="checkbox"></div>
                        
                        <div>Name</div>
                        <div>Email</div>
                        <div>Phone</div>
                        <div>Joining Date</div>
                        <div>Action</div>
                    </div>
                    <div class="customer-row ">
                        <div><input type="checkbox"></div>
                        <div>Sebastian Patterson</div>
                        <div>SebastianPatterson@teleworm.us</div>
                        <div>918-743-7787</div>
                        <div>Nov 30 2023</div>
                       
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="customer-row ">
                        <div><input type="checkbox"></div>
                        <div>Sebastian Patterson</div>
                        <div>SebastianPatterson@teleworm.us</div>
                        <div>918-743-7787</div>
                        <div>Nov 30 2023</div>
                    
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="customer-row ">
                        <div><input type="checkbox"></div>
                        <div>Sebastian Patterson</div>
                        <div>SebastianPatterson@teleworm.us</div>
                        <div>918-743-7787</div>
                        <div>Nov 30 2023</div>
                    
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="customer-row ">
                        <div><input type="checkbox"></div>
                        <div>Sebastian Patterson</div>
                        <div>SebastianPatterson@teleworm.us</div>
                        <div>918-743-7787</div>
                        <div>Nov 30 2023</div>
                    
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="customer-row ">
                        <div><input type="checkbox"></div>
                        <div>Sebastian Patterson</div>
                        <div>SebastianPatterson@teleworm.us</div>
                        <div>918-743-7787</div>
                        <div>Nov 30 2023</div>
                    
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="customer-row ">
                        <div><input type="checkbox"></div>
                        <div>Sebastian Patterson</div>
                        <div>SebastianPatterson@teleworm.us</div>
                        <div>918-743-7787</div>
                        <div>Nov 30 2023</div>
                    
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>

                    <div class="customer-row ">
                        <div><input type="checkbox"></div>
                        <div>Sebastian Patterson</div>
                        <div>SebastianPatterson@teleworm.us</div>
                        <div>918-743-7787</div>
                        <div>Nov 30 2023</div>
                    
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>

                </div>
               
            </div>
            <div class="pagination">
                <a href="#">
                    </a>
                        <a href="#">1</a>
                        <a href="#" class="pagination_active">2</a>
                        <a href="#">></a>
            </div>
@endsection