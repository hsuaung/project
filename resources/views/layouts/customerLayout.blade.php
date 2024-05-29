<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <!-- custom css link  -->
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/customer/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/home.css') }}">
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/customer/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/category.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/login.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/customer/story.css') }}"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
    <nav class="top-nav">
        <div class="left">
            <div><img src="{{asset('image/customer/vector.svg')}}" alt="facebook"></div>
            <div><img src="{{asset('image/customer/instagram 1.svg')}}" alt="instargam"></div>
            <div><img src="{{asset('image/customer/youtube 1.svg')}}" alt="youtube"></div>
            <div><img src="{{asset('image/customer/telegram-original 1.svg')}}" alt="telegram"></div>
        </div>
          <div class="right">
            <span>Up to 40% off best selling furnitures.</span>
            <span>Shop Now</span>
        </div>

    </nav>
    <header class="nav">
        <div class="nav-left">
            <div class="nav-brand">Logo</div>
            <div class="nav-menu">
                <a href="{{route('home')}}" class="{{ Route::currentRouteNamed('home') ? 'home_active_link' : '' }}">Home</a>
                <a href="{{route('shop')}}" class="{{ Route::currentRouteNamed('shop') ? 'home_active_link' : '' }}">Shop</a>
                
                <!-- <a href=""> -->
                    <div class="dropdown">
                        <button class="dropbtn">Category
                            <img src="{{asset('image/customer/caret-down-solid.svg')}}" alt="">
                        </button>
                        <div class="dropdown-content">
                            
                            <div class="row">
                                <div class="column">
                                    <h3>CATEGORY ONE </h3>
                                    <div class="column">
                                        <a href="{{url('/productByCategory/'.'bed')}}">Bed</a>
                                        <a href="{{url('/productByCategory/'.'cabinet')}}">Cabinet</a>
                                        <a href="{{url('/productByCategory/'.'sofa')}}">Sofa</a>
                                        <a href="{{url('/productByCategory/'.'kitchen')}}">Kitchen</a>
                                        <a href="{{url('/productByCategory/'.'office')}}">Office</a>
                                        <a href="{{url('/productByCategory/'.'chair')}}">Chair</a>
                                    </div>
                                    <div class="column">
                                        <a href="{{url('/productByCategory/'.'bed')}}">Bed</a>
                                        <a href="{{url('/productByCategory/'.'cabinet')}}">Cabinet</a>
                                        <a href="{{url('/productByCategory/'.'sofa')}}">Sofa</a>
                                        <a href="{{url('/productByCategory/'.'kitchen')}}">Kitchen</a>
                                        <a href="{{url('/productByCategory/'.'office')}}">Office</a>
                                        <a href="{{url('/productByCategory/'.'chair')}}">Chair</a>
                                
                                    </div>
                                </div>
                                <div class="column">
                                    <img src="{{asset('image/customer/megaMenu1.jpg')}}" alt="" >
                                    <img src="{{asset('image/customer/megaMenu2.jpg')}}" alt="" >
                                </div>
                             
                            </div>
                        </div>
                    </div>
                <!-- </a> -->
                <a href="{{route('blog')}}" class="{{ Route::currentRouteNamed('blog') ? 'home_active_link' : '' }}">Blog</a>
                <a href="{{route('story')}}" class="{{ Route::currentRouteNamed('story') ? 'home_active_link' : '' }}">About Us</a>
               
                <a href="{{route('contact')}}" class="{{ Route::currentRouteNamed('contact') ? 'home_active_link' : '' }}">Contact</a>
            </div>
        </div>
        
        <div class="nav-right">
            <div><img src="{{asset('image/customer/Frame.svg')}}" alt="magnifying glass"></div>
            <div><img src="{{asset('image/customer/Frame(1).svg')}}" alt="user"></div>
            <div><img src="{{asset('image/customer/shoppingBag.png')}}" alt="cart"> <span>10</span></div>
        </div>
       
    </header>

    @yield('content')

    
    <footer class="footer">
        <div class="footer-section">
            <div class="footer-social">
               <img src="image/customer/facebook-f.svg" alt="facebook">
               <img src="image/customer/twitter.svg" alt="twitter">
               <img src="image/customer/flickr.svg" alt="flickr">
               <img src="image/customer/instagram.svg" alt="instagram">
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>

            </div>
            <div class="footer-contact">
                <h3>NEWSLETTER</h3>
                <p>Enjoy our newsletter to stay updated with the latest news and special sales.</p>
                <input type="email" placeholder="Enter your email address">
            </div>
        </div>
        <div class="sub-footer">
            <span>© 2023. All Rights Reserved.</span>
            <span><img src="image/customer/payment-gray-lighter.png.png" alt=""></span>
        </div>
    </footer>
 
<!-- custom js link  -->
<script src="{{asset('js/customer/home.js')}}"></script>
<script src="{{asset('js/customer/shop.js')}}"></script>
<script>



    $(document).ready(function(){
    $('.image-list').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        prevArrow: "<button type='button' class='slick-prev'> &#10094</button>",
        nextArrow: "<button type='button' class='slick-next'> &#10095 </button>"
    });
});
</script>

@stack('scripts')
</body>
   
</html>