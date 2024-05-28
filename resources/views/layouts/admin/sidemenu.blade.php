

<section id="sidebar" class="sidebar">
    <div class="side-item">
       
            <i class="lni lni-menu side-menu-bar"></i>
            <b class="hidden">FURNITURE</b>
            
    </div>
    <ul>
       
        <li >
            <a href="{{route('adminDashboard')}}" class="side-item {{ Route::currentRouteNamed('adminDashboard') ? 'active_link' : '' }} " >
                <i class="lni lni-dashboard"></i>
                <p class="hidden">Dashboard</p>
            </a>
        </li>
        <li >
            <a href="{{route('productList')}}" class="side-item {{ Route::currentRouteNamed('productList') ? 'active_link' : '' }} ">
                <i class="lni lni-shopping-basket"></i>
                <p class="hidden">Products</p>
            </a>
        </li>
        <li >
            <a href="{{route('customerList')}}" class="side-item {{ Route::currentRouteNamed('customerList') ? 'active_link' : '' }} ">
                <i class="lni lni-users"></i>
                <p class="hidden">Customers</p>
            </a>
        </li>
        <li>
            <a href="{{route('orderList')}}" class="side-item {{ Route::currentRouteNamed('orderList') ? 'active_link' : '' }} ">
                <i class="lni lni-notepad"></i>
                <p class="hidden">Orders</p>
            </a>
        </li>
        <li>
            <a href="{{route('staffList')}}" class="side-item {{ Route::currentRouteNamed('staffList') ? 'active_link' : '' }} ">
                <i class="lni lni-users"></i>
                <p class="hidden">Staff</p>
            </a>
        </li>
        <li>
            <a href="{{route('categoryList')}}" class="side-item {{ Route::currentRouteNamed('categoryList') ? 'active_link' : '' }} ">
                <i class="lni lni-layers"></i>
                <p class="hidden">Category

                </p>
            </a>

        </li>
        <li>
            <a href="#" class="side-item {{ Route::currentRouteNamed('') ? 'active_link' : '' }} ">
                <i class="lni lni-stats-up"></i>
                <p class="hidden">Reports</p>
            </a>

        </li>
        
    </ul>
    <ul>
        <li>
            <a href="" class="side-item {{ Route::currentRouteNamed('') ? 'active_link' : '' }} ">
                <i class="lni lni-cog"></i>
                <p class="hidden">Settings</p>
            </a>
        </li>
        <li>
            <a href="/login.html" class="side-item {{ Route::currentRouteNamed('') ? 'active_link' : '' }} ">
                <i class="lni lni-exit"></i>
                <p class="hidden">Logout</p>
            </a>
        </li>
    </ul>
</section>
