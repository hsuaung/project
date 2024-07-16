@extends('layouts.customerLayout')

@section('title', 'Home')

@section('content')


    <!-- Slideshow container -->
    <div class="slideshow-container">
        <div class="text">
            <h3>SALE OFF 30%</h3>
            <h1>Classic 2023 Interior Designs</h1>
            <p>orem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="{{ route('shop') }}" id="home_shop_btn"><span>Shop Now</span> <img src="{{ asset('image/customer/right-arrow-svgrepo-com 2.svg') }}" alt=""></a>
        </div>
       
        <div class="mySlides ">

            <img src="{{ asset('image/customer/homeSlider.png') }}" alt="">

        </div>

        <div class="mySlides fade">

            <img src="{{ asset('image/customer/blog1.png') }}">

        </div>

        <div class="mySlides fade">

            <img src="{{ asset('image/customer/blog2.png') }}">

        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    {{-- Home Grid  --}}
    @if (!@empty($grid_items))
        <section class="home-grid">
            @for ($i = 0; $i < count($grid_items); $i++)
                <a href="{{ url('/productByCategory/' . $grid_items[$i]['name']) }}"
                    class="grid{{ $i}} home-gird-card">
                    <div class="home-grid-text">
                        <b>{{ $grid_items[$i]['name'] }}</b>
                        <p>{{ $grid_items[$i]['products_count'] }} Products</p>
                    </div>
                    <img src="{{ asset($grid_items[$i]['image']) }}" alt="">
                </a>
            @endfor
            <a href="{{ route('shop') }}">
                Explore more
                <img src="image/customer/icons.svg" alt="">
            </a>
        </section>
    @endif
    
    <div class="new-products">
        <h2 class="heading">NEW PRODUCTS</h2>
        <ul class="tab-menu">
            @foreach ($categories as $category)
                <li data-category-id="{{ $category->id }}">{{ $category->name }}</li>
            @endforeach
        </ul>

        <div class="products">
            @foreach ($products as $product)
                <a href="{{ url('/detail/' . $product->id)}}" >
                    <div class="product" data-category-id="{{ $product->category_id }}" >
                        <img src="{{ asset("$product->image") }}" alt="{{ $product->name }}"
                            width="200px" height="250px">
                        <h3>{{ $product->name }}</h3>
                        <p>${{ $product->price }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

 


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
    <div class="blog">
        <h2 class="heading">LATEST BLOG</h2>
        <div class="blog-card-container">
            <div class="blog-card">
                <img src="image/customer/blog1.png" alt="">
                <div class="blog-text">
                    <p>Nov 7,2023</p>
                    <b>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</b>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
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
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a
                        type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining
                        essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum
                        passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <p></p>
            </div>
        </div>
    </div>

@endsection



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.tab-menu li');
        const products = document.querySelectorAll('.product');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-category-id');

                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active'));

                // Add active class to the clicked tab
                this.classList.add('active');

                // Show/hide products based on the selected category
                products.forEach(product => {
                    if (product.getAttribute('data-category-id') === categoryId) {
                        product.style.display = 'block';
                    } else {
                        product.style.display = 'none';
                    }
                });
            });
        });

        // Trigger click on the first tab to display the initial set of products
        if (tabs.length > 0) {
            tabs[0].click();
        }
    });
</script>
@push('scripts')
    <link rel="stylesheet" href="{{ asset('js/customer/home.js') }}">
@endpush

@push('styles')
    <link href="{{ asset('css/customer/homepage.css') }}" rel="stylesheet">
@endpush
