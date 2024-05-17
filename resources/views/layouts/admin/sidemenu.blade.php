

<section class="sidebar">
    <div class="side-item">
        {{-- <a  >  --}}
            <i class="lni lni-menu side-menu-bar"></i>
            <b class="hidden">FURNITURE</b>
            
      
        {{-- </a> --}}
    </div>
    <ul>
        {{-- <li>
            <div class="tooltip">Hover over me
                <span class="tooltiptext">Tooltip text</span>
              </div>
        </li> --}}
        <li >
            <a href="{{route('adminDashboard')}}" class="side-item tooltip">
                <i class="lni lni-dashboard"></i>
                {{-- <p class="tooltiptext">Dashboard</p> --}}
                <p class="hidden">Dashboard</p>
            </a>
        </li>
        <li >
            <a href="{{route('productList')}}" class="side-item">
                <i class="lni lni-shopping-basket"></i>
                <p class="hidden">Products</p>
            </a>
        </li>
        <li >
            <a href="{{route('customerList')}}" class="side-item">
                <i class="lni lni-users"></i>
                <p class="hidden">Customers</p>
            </a>
        </li>
        <li>
            <a href="{{route('orderList')}}" class="side-item">
                <i class="lni lni-notepad"></i>
                <p class="hidden">Orders</p>
            </a>
        </li>
        <li>
            <a href="{{route('staffList')}}" class="side-item">
                <i class="lni lni-users"></i>
                <p class="hidden">Staff List</p>
            </a>
        </li>
        <li>
            <a href="{{route('categoryList')}}" class="side-item">
                <i class="lni lni-layers"></i>
                <p class="hidden">Category List</p>
            </a>

        </li>
        <li>
            <a href="#" class="side-item">
                <i class="lni lni-book"></i>
                <p class="hidden">Reports</p>
            </a>

        </li>
        
    </ul>
    <ul>
        <li>
            <a href="" class="side-item">
                <i class="lni lni-cog"></i>
                <p class="hidden">Settings</p>
            </a>
        </li>
        <li>
            <a href="/login.html" class="side-item">
                <i class="lni lni-exit"></i>
                <p class="hidden">Logout</p>
            </a>
        </li>
    </ul>
</section>
