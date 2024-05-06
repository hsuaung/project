@extends('layouts.adminlayouts')

@section('title', 'Product List')

@section('content')
<div class="staffList">
                <div class="staffListTitle">
                    <div class="search">
                        <p>Search...</p>
                        <p><img src="{{asset('image/admin/search.png') }}" alt=""></p>
                    </div>
                    <a href="/pages/addProduct.html">
                        <img src="{{asset('image/admin/+.svg') }}"alt="">
                        <p>New Product</p>
                    </a>
                </div>
                <div class="staffListTable">
                    <div class="product-row staffListHeader">
                        <div><input type="checkbox"></div>
                        <div><img src="{{asset('image/admin/image.svg') }}" alt=""></div>
                        <div>ID</div>
                        <div>Product Name</div>
                        <div>Category</div>
                        <div>Description</div>
                        <div>Stock</div>
                        <div>Price</div>
                        <div>Date</div>
                        <div>Action</div>
                    </div>
                    <div class="product-row ">
                        <div><input type="checkbox"></div>
                        <div><img src="{{asset('image/admin/productList1.png') }}" alt=""></div>
                        <div>EE72823</div>
                        <div>Plush-Paradise Sofa</div>
                        <div>Sofa</div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                        <div >In stock</div>
                        <div>205</div>
                        <div>2023 Nov 22</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="product-row ">
                        <div><input type="checkbox"></div>
                        <div><img src="{{asset('image/admin/productList2.png') }}" alt=""></div>
                        <div>EE72823</div>
                        <div>Plush-Paradise Sofa</div>
                        <div>Sofa</div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                        <div>In stock</div>
                        <div>205</div>
                        <div>2023 Nov 22</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="product-row ">
                        <div><input type="checkbox"></div>
                        <div><img src="{{asset('image/admin/productList3.png') }}" alt=""></div>
                        <div>EE72823</div>
                        <div>Plush-Paradise Sofa</div>
                        <div>Sofa</div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                        <div>In stock</div>
                        <div>205</div>
                        <div>2023 Nov 22</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="product-row ">
                        <div><input type="checkbox"></div>
                        <div><img src="{{asset('image/admin/productList4.png') }}" alt=""></div>
                        <div>EE72823</div>
                        <div>Plush-Paradise Sofa</div>
                        <div>Sofa</div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                        <div>In stock</div>
                        <div>205</div>
                        <div>2023 Nov 22</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="product-row ">
                        <div><input type="checkbox"></div>
                        <div><img src="{{asset('image/admin/productList5.png') }}" alt=""></div>
                        <div>EE72823</div>
                        <div>Plush-Paradise Sofa</div>
                        <div>Sofa</div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                        <div>In stock</div>
                        <div>205</div>
                        <div>2023 Nov 22</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="product-row ">
                        <div><input type="checkbox"></div>
                        <div><img src="{{asset('image/admin/productList6.png') }}" alt=""></div>
                        <div>EE72823</div>
                        <div>Plush-Paradise Sofa</div>
                        <div>Sofa</div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                        <div>In stock</div>
                        <div>205</div>
                        <div>2023 Nov 22</div>
                        <div>
                            <img src="{{asset('image/admin/edit.svg') }}" alt="">
                            <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="product-row ">
                        <div><input type="checkbox"></div>
                        <div><img src="{{asset('image/admin/productList7.png') }}" alt=""></div>
                        <div>EE72823</div>
                        <div>Plush-Paradise Sofa</div>
                        <div>Sofa</div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                        <div>In stock</div>
                        <div>205</div>
                        <div>2023 Nov 22</div>
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
            </div>

@endsection