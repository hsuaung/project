
@push('styles')


@endpush
<section class="topnav">
    <header>
        <h1 class="adminTitle">  @yield('title') </h1>
       
        <a href="{{route('home')}}" target="_blank" >
            <i class="lni lni-home"></i>
        </a>
    </header>
   
    <div class="rightnav">
        <img src="{{Auth::guard('admin')->user()->image}}" alt="admin"  width="50px" height="50px">
        
    </div>
</section>
<div class="rightnav">
  
</div>
@push('scripts')
    <script src="{{asset('js/admin/style.js') }}"></script>
@endpush 
