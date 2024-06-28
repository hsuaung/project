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
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  
    <nav class="top-nav">
        <div class="left">
            <div><i class="lni lni-facebook-fill"></i></div>
            <div><i class="lni lni-instagram-fill"></i></div>
            <div><i class="lni lni-youtube"></i></div>
            <div><i class="lni lni-telegram-original"></i></div>
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
                <div class="close-menu"><i class="lni lni-close"></i></div>
                <a href="{{ route('home') }}"
                    class="{{ Route::currentRouteNamed('home') ? 'home_active_link' : '' }} active">Home</a>
                <a href="{{ route('shop') }}"
                    class="{{ Route::currentRouteNamed('shop') ? 'home_active_link' : '' }} active">Shop</a>


                <div class="dropdown">
                    <button class="dropbtn">Category
                        <img src="{{ asset('image/customer/caret-down-solid.svg') }} active" alt="">
                    </button>

                    <div class="dropdown-content ">

                        <div class="row">
                            <div class="column">
                                <h3>CATEGORY ONE </h3>
                                <div class="column">
                                    <a href="{{ url('/productByCategory/' . 'sofa') }}">Sofa</a>
                                    <a href="{{ url('/productByCategory/' . 'bed') }}">Bed</a>
                                    <a href="{{ url('/productByCategory/' . 'lamp') }}">Lamp</a>
                                    <a href="{{ url('/productByCategory/' . 'table') }}">Table</a>
                                    <a href="{{ url('/productByCategory/' . 'cabinet') }}">Cabinet</a>
                                    <a href="{{ url('/productByCategory/' . 'shelf') }}">Shelf</a>
                                </div>
                                {{-- <div class="column">
                                    @foreach ($categories as $category )
                                    <a href="">{{$category->name}}</a>
                                        
                                    @endforeach
                                </div> --}}
                              
                            </div>
                            <div class="column">
                                <img src="{{ asset('image/customer/megaMenu1.jpg') }}" alt="">
                                <img src="{{ asset('image/customer/megaMenu2.jpg') }}" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="categoryMenu">
                        <a href="{{ url('/productByCategory/' . 'bed') }}">Bed</a>
                        <a href="{{ url('/productByCategory/' . 'cabinet') }}">Cabinet</a>
                        <a href="{{ url('/productByCategory/' . 'sofa') }}">Sofa</a>
                        <a href="{{ url('/productByCategory/' . 'kitchen') }}">Kitchen</a>
                        <a href="{{ url('/productByCategory/' . 'office') }}">Office</a>
                        <a href="{{ url('/productByCategory/' . 'chair') }}">Chair</a>
                    </div>
                </div>

                <a href="{{ route('blog') }}"
                    class="{{ Route::currentRouteNamed('blog') ? 'home_active_link' : '' }} active">Blog</a>
                <a href="{{ route('story') }}"
                    class="{{ Route::currentRouteNamed('story') ? 'home_active_link' : '' }} active">About Us</a>

                <a href="{{ route('contact') }}"
                    class="{{ Route::currentRouteNamed('contact') ? 'home_active_link' : '' }} active">Contact</a>

            </div>
        </div>

        <div class="nav-right">

            <div><i class="lni lni-search-alt"></i></div>
            <a href="{{route('customer.login')}}"> <i class="lni lni-user"></i></a> 
            
            <div class="ham-menu"><i class="lni lni-menu"> </i></div>
            <a href="{{ url('/cart') }}" class="cart">
                <i class="lni lni-cart" ></i>

                @if (session('cart') !== null)
                    <span>{{ count(session('cart')) }}</span>
                @else
                    <span>0</span>
                @endif
                </a>

        </div>

    </header>

    @yield('content')


    <footer class="footer">
        <div class="footer-section">
            <div class="footer-social">
                <div><i class="lni lni-facebook-fill" style="color:white"></i></div>
                <div><i class="lni lni-instagram-fill" style="color:white"></i></div>

                <div><i class="lni lni-youtube" style="color:white"></i></div>
                <div><i class="lni lni-telegram-original" style="color:white"></i></div>

            </div>

            <ul class="footer-links">
                <li><a href="">Home</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>

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
    <script src="{{ asset('js/customer/home.js') }}"></script>
    <script src="{{ asset('js/customer/shop.js') }}"></script>
    <script src="{{ asset('js/customer/style.js') }}"></script>
    <script>
        $(document).ready(function() {
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
