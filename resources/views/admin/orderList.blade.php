@extends('layouts.adminlayouts')

@section('title', 'Order List')

@section('content')
<div class="top-div">
                <div class="date">
                    <p>01/01/2023 - 01/01/2023</p>
                    <img src="/image/calendar.png" alt="">
                </div>
                <div class="filter">
                    <div class="search">
                        <p>Search...</p>
                        <p><img src="/image/search.png" alt=""></p>
                    </div>
                    <div class="sort">
                        <select id="sort">
                            <option value="">Deafult Sorting</option>
                            <option value="A">A-Z</option>
                            <option value="A">A-Z</option>
                            <option value="A">A-Z</option>
                        </select>
                    </div>
                    <div class="sort">
                        <select id="sort">
                            <option value="">Status</option>
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
            <div class="staffList">
                <div class="staffListTitle">
                    <p>Orders</p>
                    <!-- <button>
                        <img src="/image/+.svg" alt="">
                        <p>New Staff</p>
                    </button> -->
                </div>
                <div class="staffListTable">
                    <div class="order-row staffListHeader">
                        <div><input type="checkbox"></div>
                        <div>Product Name</div>
                        <div>Order ID</div>
                        <div>Date</div>
                        <div>Customer Name</div>
                        <div>Status</div>
                        <div>Amount</div>
                        <div>Action</div>
                    </div>
                    <div class="order-row ">
                        <div><input type="checkbox"></div>
                        <div>Morden Sofa</div>
                        <div>EE72823</div>
                        <div>2023 Nov 22</div>
                        <div>Sofia Mia</div>
                        <div>
                            <span class="dot dot-deliver"></span> Delivered
                        </div>
                        <div >250.000 MMK</div>
                        <div>
                            <img src="/image/edit.svg" alt="">
                            <img src="/image/trashbin.svg" alt="">
                        </div>
                    </div>
                    <div class="order-row ">
                        <div><input type="checkbox"></div>
                        <div>Morden Sofa</div>
                        <div>EE72823</div>
                        <div>2023 Nov 22</div>
                        <div>Sofia Mia</div>
                        <div>
                            <span class="dot dot-pending"></span> Pending
                        </div>
                        <div>250.000 MMK</div>
                        <div>
                            <img src="/image/edit.svg" alt="">
                            <img src="/image/trashbin.svg" alt="">
                        </div>
                    </div>
                    <div class="order-row ">
                        <div><input type="checkbox"></div>
                        <div>Morden Sofa</div>
                        <div>EE72823</div>
                        <div>2023 Nov 22</div>
                        <div>Sofia Mia</div>
                        <div>
                            <span class="dot dot-pending"></span> Pending
                        </div>
                        <div>250.000 MMK</div>
                        <div>
                            <img src="/image/edit.svg" alt="">
                            <img src="/image/trashbin.svg" alt="">
                        </div>
                    </div>
                    <div class="order-row ">
                        <div><input type="checkbox"></div>
                        <div>Morden Sofa</div>
                        <div>EE72823</div>
                        <div>2023 Nov 22</div>
                        <div>Sofia Mia</div>
                        <div>
                            <span class="dot dot-deliver"></span> Delivered
                        </div>
                        <div>250.000 MMK</div>
                        <div>
                            <img src="/image/edit.svg" alt="">
                            <img src="/image/trashbin.svg" alt="">
                        </div>
                    </div>
                    <div class="order-row ">
                        <div><input type="checkbox"></div>
                        <div>Morden Sofa</div>
                        <div>EE72823</div>
                        <div>2023 Nov 22</div>
                        <div>Sofia Mia</div>
                        <div>
                            <span class="dot dot-pending"></span> Pending
                        </div>
                        <div>250.000 MMK</div>
                        <div>
                            <img src="/image/edit.svg" alt="">
                            <img src="/image/trashbin.svg" alt="">
                        </div>
                    </div>
                    <div class="order-row ">
                        <div><input type="checkbox"></div>
                        <div>Morden Sofa</div>
                        <div>EE72823</div>
                        <div>2023 Nov 22</div>
                        <div>Sofia Mia</div>
                        <div>
                            <span class="dot dot-cancel"></span> Canceled
                        </div>
                        <div>250.000 MMK</div>
                        <div>
                            <img src="/image/edit.svg" alt="">
                            <img src="/image/trashbin.svg" alt="">
                        </div>
                    </div>
                    <div class="order-row ">
                        <div><input type="checkbox"></div>
                        <div>Morden Sofa</div>
                        <div>EE72823</div>
                        <div>2023 Nov 22</div>
                        <div>Sofia Mia</div>
                        <div>
                            <span class="dot dot-deliver"></span> Delivered
                        </div>
                        <div>250.000 MMK</div>
                        <div>
                            <img src="/image/edit.svg" alt="">
                            <img src="/image/trashbin.svg" alt="">
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
            </div>
@endsection