@extends('layouts.customerLayout')
{{-- @php
    dd($grid_items[0]['name']);
// dd($gird_items[0]);
@endphp --}}
@section('title', 'Home')

@section('content')

    <!-- Slideshow container -->
    <div class="slideshow-container">
        <div class="text">
            <h3>SALE OFF 30%</h3>
            <h1>Classic 2023 Interior Designs</h1>
            <p>orem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <button>Shop Now <img src="{{asset('image/customer/right-arrow-svgrepo-com 2.svg')}}" alt=""></button>
        </div>
        <!-- Full-width images with number and caption text -->
        <div class="mySlides ">
    
            <img src="{{asset('image/customer/homeSlider.png')}}" alt="">
    
        </div>
    
        <div class="mySlides fade">
    
            <img src="{{asset('image/customer/blog1.png')}}">
    
        </div>
    
        <div class="mySlides fade">
    
            <img src="{{asset('image/customer/blog2.png')}}">
    
        </div>
    
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


    <section class="home-grid">
        <div class="bed home-gird-card">
            <div class="home-grid-text">
                <b>{{$grid_items[0]['name']}}</b>
                <p>{{$grid_items[0]['products_count']}} Products</p>
            </div>
            <img src="image/customer/homeGrid1.png" alt="">
        </div>
        
        @for($i=1;$i<count($grid_items);$i++)
           <div class="home-gird-card">
            <div class="home-grid-text">
                <b>{{$grid_items[$i]['name']}}</b>
            <p>{{$grid_items[$i]['products_count']}} Products</p>
            </div>
            
            <img src="image/customer/homeGrid3.png" alt="">
            {{-- <img src="image/product/"{{$grid_items[$i]['image']}} alt=""> --}}
            </div>
        @endfor
     


        {{-- <div class="sofa home-gird-card">
            <div class="home-grid-text">
                <b>SOFA</b>
                <p>50 Products</p>
            </div>
            <img src="image/customer/homeGrid2.png" alt="">
        </div>
        <div class="lamp home-gird-card">
            <div class="home-grid-text">
                <b>LAMP</b>
                <p>30 Products</p>
            </div>
             <img src="image/customer/homeGrid3.png" alt="">
        </div>
        <div class="cabinet home-gird-card">
            <div class="home-grid-text">
                <b>CABINET</b>
                <p>40 Products</p>
            </div>

            
            <img src="image/customer/homeGrid4.png" alt="">
        </div>
        <div class="table home-gird-card">
            <div class="home-grid-text">
                <b>TABLE</b>
                <p>20 Products</p>
            </div>
            
            <img src="image/customer/homeGrid5.png" alt="">
        </div> --}}
        <a>
            Explore more
            <img src="image/customer/icons.svg" alt="">
        </a>
    </section>
    
    <section class="new-products">
        <h2 class="heading">NEW PRODUCTS</h2>
        <div class="product-nav">
            <button class="" onclick="openMenu('bed')"><a>Bed</a></button>
            <button class="" onclick="openMenu('sofa')"><a>Sofa</a></button>
            <button class="" onclick="openMenu('lamp')"><a>Lamp</a></button>
            <button class="" onclick="openMenu('cabinet')"><a>Cabinet</a></button>
            <button class="" onclick="openMenu('table')"><a>Table</a></button>
            
        </div>
        <div id="bed" class="menu">
            <div class="product-card-container">
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="image/customer/homeProduct1.png" alt="">
                        <span class="sale">Sale</span>
                    </div>
                    <div class="product-card-content">
                        <p>Cylindo Accent Arm Chair</p>
                        <p>$699.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="image/customer/homeProduct2.png" alt="">
                        <span class="sold-out">Sold Out</span>
                    </div>
                    <div class="product-card-content">
                        <p>Cylindo Accent Arm Chair</p>
                        <p>$699.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="image/customer/homeProduct1.png" alt="">
                        <span class="sale">Sale</span>
                    </div>
                    <div class="product-card-content">
                        <p>Cylindo Accent Arm Chair</p>
                        <p>$699.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="image/customer/homeProduct2.png" alt="">
                        <span class="sold-out">Sold Out</span>
                    </div>
                    <div class="product-card-content">
                        <p>Cylindo Accent Arm Chair</p>
                        <p>$699.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="image/customer/homeProduct1.png" alt="">
                        <span class="sale">Sale</span>
                    </div>
                    <div class="product-card-content">
                        <p>Cylindo Accent Arm Chair</p>
                        <p>$699.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="image/customer/homeProduct2.png" alt="">
                        <span class="sold-out">Sold Out</span>
                    </div>
                    <div class="product-card-content">
                        <p>Cylindo Accent Arm Chair</p>
                        <p>$699.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="image/customer/homeProduct1.png" alt="">
                        <span class="sale">Sale</span>
                    </div>
                    <div class="product-card-content">
                        <p>Cylindo Accent Arm Chair</p>
                        <p>$699.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="image/customer/homeProduct2.png" alt="">
                        <span class="sold-out">Sold Out</span>
                    </div>
                    <div class="product-card-content">
                        <p>Cylindo Accent Arm Chair</p>
                        <p>$699.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="sofa" class="menu" style="display:none">
            <h2>sofa menu</h2>
            
        </div>
        <div id="lamp" class=" menu" style="display:none">
            <h2>lamp</h2>
            
        </div>
        <div id="cabinet" class="menu" style="display:none">
            <h2>cabinet menu</h2>
          
        </div>
        <div id="table" class=" menu" style="display:none">
            <h2>table</h2>
            
        </div>


      
    </section>
    <section class="home-banner">
        <div class="banner">
            <div class="banner-content">
                <h2>Up To 60% Off</h2>
                <div class="ellipse">
                    
                        <div class="e-img">
                            <div class="timer">
                                <p>3</p>
                                <p>Days</p>
                            </div>
                            <img src="image/customer/Ellipse 9.svg" alt="">
                        </div>
                    <div class="e-img">
                        <div class="timer">
                            <p>5</p>
                            <p>Hours</p>
                        </div>
                        <img src="image/customer/Ellipse 9.svg" alt="">
                    </div>
                    <div class="e-img">
                        <div class="timer">
                            <p>30</p>
                            <p>Mins</p>
                        </div>
                        <img src="image/customer/Ellipse 9.svg" alt="">
                    </div>
                    <div class="e-img">
                        <div class="timer">
                            <p>30</p>
                            <p>Secs</p>
                        </div>
                        <img src="image/customer/Ellipse 9.svg" alt="">
                    </div>
                        
                    
                   
                </div>
            </div>
            <div class="banner-image">
                <img src="image/customer/homeSofaBanner.png" alt="">
            </div>
        </div>
    </section>
    <section class="blog">
        <h2 class="heading">LATEST BLOG</h2>
        <div class="blog-card-container">
            <div class="blog-card">
                <img src="image/customer/blog1.png" alt="">
                <div class="blog-text">
                    <p>Nov 7,2023</p>
                    <b>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</b>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                    recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <p></p>
            </div>
            <div class="blog-card">
                <img src="image/customer/blog2.png" alt="">
                <div class="blog-text">
                    <p>Nov 7,2023</p>
                    <b>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</b>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                        type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <p></p>
            </div>
        </div>
    </section>

@endsection