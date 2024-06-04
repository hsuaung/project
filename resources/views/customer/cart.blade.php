@extends('layouts.customerLayout')
@section('title', 'cart || furniture')

@section('content')
    {{-- @dd(session('cart')) --}}
    {{-- @foreach (session('cart') as $id => $detail) --}}
    {{-- <div>{{$detail['quantity']}}</div> --}}
    @if (session('error'))
        <h1>{{ session('error') }}</h1>
    @elseif(session('success'))
        <h1>{{ session('success') }}</h1>
    @endif

    @php
        // dd(session('cart'));
    @endphp

    <div class="top-link">

        <a href="">Home > </a> Shopping cart
    </div>
    <b class="title">Your selection <span>(1 item)</span></b>
    <div class="test-container">

        <div class="row">
            <div class="product">Product</div>
            <div class="price">Price</div>
            <div>Quantity</div>
            <div class="total">Total</div>
        </div>
        @if (session('cart') !== null)
            @php
            // Session::flush();
                $items = session('cart');
                // dd($items);
            @endphp
            @if (is_array($items))
                @if (is_array(current($items)))
                    @foreach ($items as $id=>$detail)
                        <div class="row">
                            <a href="{{ url('/removeItem/' . $detail['product_id']) }}">x</a>
                            {{-- {{ url('/deleteStaffProcess' . $staff->id) }} --}}
                            <button value="cancel" id="cancel">x</button>
                            <div class="product-image-container"><img src="{{ asset($detail['image']) }}" alt="product"
                                    width="120px" height="120px"></div>
                            <div>{{ $detail['product_name'] }}</div>
                            <div>$ {{ $detail['price'] }}</div>
                            <div><input class="quantity-input" type="number" value="{{ $detail['quantity'] }}"></input>
                            </div>
                            <div class="total">$ {{ $detail['total'] }}</div>
                        </div>
                    @endforeach
                @else
                    {{-- <div class="row">
                        <a href="{{ url('/removeItem/' . $items['product_id']) }}">x</a>
                        <button value="cancel" id="cancel">x</button>
                        <div class="product-image-container"><img src="{{ asset($items['image']) }}" alt="product"
                                width="120px" height="120px"></div>
                        <div>{{ $items['product_name'] }}</div>
                        <div>$ {{ $items['price'] }}</div>
                        <div><input class="quantity-input" type="number" value="{{ $items['quantity'] }}"></input></div>
                        <div class="total">$ {{ $items['total'] }}</div>
                    </div> --}}
                @endif
            @endif
        @endif

        <div class="row">
            <button class="checkout">Procced To Checkout</button>
            <a href="{{ route('clearCart') }}" class="clearbtn">Clear All</a>
            <button class="updatebtn">Update Cart</button>

        </div>
    </div>


@endsection

@push('styles')
    <link href="{{ asset('css/customer/cart.css') }}" rel="stylesheet">
@endpush
