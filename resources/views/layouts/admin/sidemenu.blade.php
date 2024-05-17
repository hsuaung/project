

<section class="sidebar">
    <div>
        <a href="" class="side-item"> 
            <img src="{{asset('image/admin/sideMenu1.png') }}"alt="">
            <b>FURNITURE</b>
            <img src="{{asset('image/admin/sideMenu2.png') }}"alt="" class="side-menu-bar">
      
        </a>
    </div>
    <ul>
        <li >
            <a href="{{route('productList')}}" class="side-item">
                <img src="{{asset('image/admin/products.png') }}" alt="">
                <p>Products</p>
            </a>
        </li>
        <li >
            <a href="{{route('customerList')}}" class="side-item">
                <img src="{{asset('image/admin/customer.png') }}" alt="">
                <p>Customers</p>
            </a>
        </li>
        <li>
            <a href="{{route('orderList')}}" class="side-item">
                <img src="{{asset('image/admin/order.png') }}" alt="">
                <p>Orders</p>
            </a>
        </li>
        <li>
            <a href="{{route('staffList')}}" class="side-item">
                <img src="{{asset('image/admin/staff.png') }}"alt="">
                <p>Staff List</p>
            </a>
        </li>
        <li>
            <a href="{{route('categoryList')}}" class="side-item">
                <img src="{{asset('image/admin/report.png') }} " alt="">
                <p>Category List</p>
            </a>

        </li>
        <li>
            <a href="#" class="side-item">
                <img src="{{asset('image/admin/report.png') }} " alt="">
                <p>Reports</p>
            </a>

        </li>
        
    </ul>
    <ul>
        <li>
            <a href="" class="side-item">
                <img src="{{asset('image/admin/setting.png') }}" alt="">
                <p>Settings</p>
            </a>
        </li>
        <li>
            <a href="/login.html" class="side-item">
                <img src="{{asset('image/admin/logout.png') }}" alt="">
                <p>Logout</p>
            </a>
        </li>
    </ul>
</section>
