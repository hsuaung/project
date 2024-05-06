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
                    <a href="/pages/staffAdd.html">
                        <img src="{{asset('image/admin/+.svg') }}" alt="">
                        <p>New Staff</p>
                    </a>
                </div>
                <div class="staffListTable">
                    <div class="row staffListHeader">
                        <div><input type="checkbox"></div>
                        <div>Staff ID</div>
                        <div>Staff Name</div>
                        <div>Address</div>
                        <div>Email</div>
                        <div>Roles(s)</div>
                        <div>Status</div>
                        <div>Action</div>
                    </div>
                    <div class="row ">
                        <div><input type="checkbox"></div> <div>HFJ7784872</div>
                        <div>Leronado Luris</div>
                        <div>331 Wright Court</div>
                        <div>leronado@gmail.com</div>
                        <div>
                            <select id="role" class="role">
                                <option value="">Super Admin</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                            </select>
                        </div>
                        <div class="active">Active</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div><input type="checkbox"></div>
                        <div>HFJ7784872</div>
                        <div>Leronado Luris</div>
                        <div>331 Wright Court</div>
                        <div>leronado@gmail.com</div>
                        <div>
                            <select id="role" class="role">
                                <option value="">Product Manager</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                            </select>
                        </div>
                        <div class="inactive">Inactive</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div><input type="checkbox"></div>
                        <div>HFJ7784872</div>
                        <div>Leronado Luris</div>
                        <div>331 Wright Court</div>
                        <div>leronado@gmail.com</div>
                        <div>
                            <select id="role" class="role">
                                <option value="">Order Manager</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                            </select>
                        </div>
                        <div class="suspended">Suspended</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div><input type="checkbox"></div>
                        <div>HFJ7784872</div>
                        <div>Leronado Luris</div>
                        <div>331 Wright Court</div>
                        <div>leronado@gmail.com</div>
                        <div>
                            <select id="role" class="role">
                                <option value="">Customer Support</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                            </select>
                        </div>
                        <div class="active">Active</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div><input type="checkbox"></div>
                        <div>HFJ7784872</div>
                        <div>Leronado Luris</div>
                        <div>331 Wright Court</div>
                        <div>leronado@gmail.com</div>
                        <div>
                            <select id="role" class="role">
                                <option value="">Marketing Manager</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                            </select>
                        </div>
                        <div class="active">Active</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div><input type="checkbox"></div>
                        <div>HFJ7784872</div>
                        <div>Leronado Luris</div>
                        <div>331 Wright Court</div>
                        <div>leronado@gmail.com</div>
                        <div>
                            <select id="role" class="role">
                                <option value="">Super Admin</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                            </select>
                        </div>
                        <div class="active">Active</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div><input type="checkbox"></div>
                        <div>HFJ7784872</div>
                        <div>Leronado Luris</div>
                        <div>331 Wright Court</div>
                        <div>leronado@gmail.com</div>
                        <div>
                            <select id="role" class="role">
                                <option value="">Super Admin</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                                <option value="A">A-Z</option>
                            </select>
                        </div>
                        <div class="active">Active</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    

                </div>
             
            </div>
            <div class="pagination">
                <a href="#">
                    < </a>
                        <a href="#">1</a>
                        <a href="#" class="pagination_active">2</a>
                        <a href="#">></a>
@endsection