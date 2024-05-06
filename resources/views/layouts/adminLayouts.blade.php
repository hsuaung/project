<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Store | Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/addProduct.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/customerList.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/editStaff.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/orderList.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/productList.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/staffList.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <!-- chart.css cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/charts.css/dist/charts.min.css">
  

</head>
<body>

<section class="main">

    <section class="sidemenu">

        <div class="sidemenu-title">
            <a href="{{route('adminDashboard')}}">
                <img src="{{asset('image/admin/sideMenu1.png') }}"alt="">
                <b>FURNITURE</b>
                <img src="{{asset('image/admin/sideMenu2.png') }}"alt="" class="side-menu-bar">
            </a>
        </div>
        <div class="sidemenu-container">
            <div class="sidemenu-item">
                <a href="{{route('productList')}}"><img src="{{asset('image/admin/products.png') }}" alt="">
                    <p>Products</p>
                </a>
            </div>
            <div class="sidemenu-item">
                <a href="{{route('customerList')}}"><img src="{{asset('image/admin/customer.png') }}" alt="">
                    <p>Customers</p>
                </a>
            </div>
            <div class="sidemenu-item">
                <a href="{{route('orderList')}}"><img src="{{asset('image/admin/order.png') }}" alt="">
                    <p>Orders</p>
                </a>
            </div>
            <div class="sidemenu-item">
                <a href="{{route('staffList')}}"><img src="{{asset('image/admin/staff.png') }}"alt="">
                    <p>Staff List</p>
                </a>
            </div>
            <div class="sidemenu-item">
                <a href="#">
                    <img src="{{asset('image/admin/report.png') }}" alt="">
                    <p>Reports</p>
                </a>

            </div>

        </div>
        <div class="sidemenu-container">
            <div class="sidemenu-item">
                <a href="">
                    <img src="{{asset('image/admin/setting.png') }}" alt="">
                    <p>Settings</p>
                </a>

            </div>
            <div class="sidemenu-item">
                <a href="/login.html">
                    <img src="{{asset('image/admin/logout.png') }}" alt="">
                    <p>Logout</p>
                </a>
            </div>


        </div>

    </section>
    <div class="right">
        <section class="topnav">
            <b>@yield('title')</b>
            <div class="rightnav">
                <img src="{{asset('image/admin/noti.png') }}"alt="">
                <img src="{{asset('image/admin/admin.png') }}" alt="">
            </div>
        </section>
        @yield('content')
        
    </div>

</section>

   <script src="/js/style.js"></script>
</body>
</html>