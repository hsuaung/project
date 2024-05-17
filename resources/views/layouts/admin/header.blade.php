@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/order.css') }}">
<link rel="stylesheet" href="{{ asset('css/ad
min/add.css') }}">
@endpush
<title>@yield('page')</title>
<section class="topnav">
    <header>
        @yield('title')
        <a href="{{route('home')}}" >
            <img src="{{asset('image/admin/search.png') }}"alt="">
        </a>
    </header>
   
    <div class="rightnav">
        <img src="{{asset('image/admin/noti.png') }}"alt="">
        <img src="{{asset('image/admin/admin.png') }}" alt="">
    </div>
</section>
<div class="rightnav">
  
</div>
@push('scripts')
    <script src="{{asset('js/admin/style.js') }}"></script>
@endpush 
