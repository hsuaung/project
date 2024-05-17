{{-- @push('styles')



@endpush --}}

<section class="topnav">
    <header>
        @yield('title')
        <a href="{{route('home')}}" >
            <i class="fa-solid fa-house"></i>
            {{-- <img src="{{asset('image/admin/search.png') }}"alt=""> --}}
        </a>
    </header>
   
    <div class="rightnav">
        <i class="lni lni-alarm"></i>
        <img src="{{asset('image/admin/admin.png') }}" alt="">
    </div>
</section>
<div class="rightnav">
  
</div>
@push('scripts')
    <script src="{{asset('js/admin/style.js') }}"></script>
@endpush 
