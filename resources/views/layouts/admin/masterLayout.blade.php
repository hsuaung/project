
<section class="main">
    @include('layouts.admin.sidemenu')
    <div class="right">
        @include('layouts.admin.header')
        @yield('content')
    </div>
</section>



@stack('styles')
@stack('scripts')