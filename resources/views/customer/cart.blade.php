@extends('layouts.customerLayout')
@section('title', 'cart || furniture')

@section('content')
    {{--     
    @if (session('error'))
        <h1>{{ session('error') }}</h1>
    @elseif(session('success'))
        <h1>{{ session('success') }}</h1>
    @endif

    @php
      
    @endphp --}}

    <div class="top-link">

        <a href="">Home > </a> Shopping cart
    </div>
    <b class="title">Your selection <span>
            {{ session('cart') !== null ? count(session('cart')) . ' items' : ' 0 item' }}


        </span></b>
    <section class="table">
        <table>
            <tr>
                <th colspan="3" style="background-color: green">Product</th>
                <th>Price</th>
                <th style="background-color:paleturquoise">Quantity</th>
                <th>Total</th>
            </tr>
            @if (session('cart') !== null)
                @php
                    $items = session('cart');
                @endphp
                @if (is_array($items))
                    @if (is_array(current($items)))
                        @foreach ($items as $id => $detail)
                            <tr>
                                <td style="background-color: pink"><a href="{{ url('/removeItem/' . $detail['product_id']) }}"
                                        id="cancel">x</a></td>
                                <td style="background-color: blue" class=""><img src="{{ asset($detail['image']) }}"
                                        alt="product" width="120px" height="120px"></td>
                                {{-- product-image-container --}}
                                <td style="background-color: yellow">{{ $detail['product_name'] }}</td>
                                <td>$ {{ $detail['price'] }}</td>
                                <td style="background-color: green">
                                    <form action="{{ route('updateCart') }}">
                                        <input class="quantity-input" type="number" value="{{ $detail['quantity'] }}"
                                            name="quantity" id="quantity">
                                        </input>
                                </td>
                                <td class="total">$ {{ $detail['quantity'] * $detail['price'] }}</td>
                            </tr>
                            <tr>
                                <td> <button class="checkout">Procced To Checkout</button></td>
                                <td><a href="{{ route('clearCart') }}" class="clearbtn">Clear All</a></td>
                                <td><button type="submit" class="updatebtn">Update Cart</button></td>
                                </form>
                            </tr>
                        @endforeach
                    @else
                    @endif
                @endif
            @endif
        </table>


        {{-- <div class="row">
            <button class="checkout">Procced To Checkout</button>
            <a href="{{ route('clearCart') }}" class="clearbtn">Clear All</a>
            <form action="{{ route('updateCart') }}">
                <input type="hidden" value="">
                <button type="submit" class="updatebtn">Update Cart</button>
            </form>
            

        </div> --}}
    </section>


@endsection

@push('styles')
    <link href="{{ asset('css/customer/cart.css') }}" rel="stylesheet">
@endpush
