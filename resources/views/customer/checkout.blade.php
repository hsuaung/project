@extends('layouts.customerLayout')
@section('title', 'checkout || furniture')
@section('content')
    <section class="">
        <a href="">Home > </a> Checkout
    </section>
    {{-- @dd(session('cart')) --}}


    <section class="container">
        <div class="detail">
            <b>Billing Details</b>
            <form action="/stripe" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form">
                    <div><label for="firstName">First name <span>*</span> </label></div>
                    <div><input type="text" id="firstName" name="firstName"></div>
                    <div><label for="lastName" id="lastName" >Last name <span>*</span> </label></div>
                    <div><input type="text" id="lastName" name="lastName" required></div>
                    <div><label for="country" id="lastName">Country / Region <span>*</span> </label>
                    </div>
                    <div>
                        <select type="text" id="country" required name="country">
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Japan">Japan</option>
                        </select>
                    </div>
                    <div><label for="address">Address <span>*</span> </label></div>
                    <div>
                        <textarea id="address" cols="21" rows="5" name="address"></textarea>
                    </div>
                    <div><label for="email">Email <span>*</span> </label></div>
                    <div><input type="email" id="email" name="email"></div>
                    <div><label for="phno">Phone<span>*</span> </label></div>
                    <div><input type="number" id="phno" name="phno"></div>
                </div>

        </div>
        @php
            $items = session('cart');

        @endphp
        @if (is_array($items))
            @if (is_array(current($items)))


                <div class="order">

                    <div class="order-detail">
                        <div class="title"><b>Your Order</b></div>
                        <div>PRODUCT</div>
                        <div></div>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($items as $id => $detail)
                            <div>{{ $detail['product_name'] }} x {{ $detail['quantity'] }}</div>
                            <div> $ {{ $detail['price'] }} x {{ $detail['quantity'] }}</div>
                            @php
                                $total += $detail['price'] * $detail['quantity'];
                            @endphp
                        @endforeach
                        <div>TOTAL</div>
                        <div>$ {{ $total }}</div>
                        <div>Shipping</div>
                        <div></div>
                        <div>TYPE OF PAYMENT</div>
                        <div>
                            <select name="payment" id="payment">
                                <option value="COD">Cash on delivery</option>
                                <option value="card">Card</option>

                            </select>
                        </div>




                        <div class="button"><button>Place Order</button></div>

                    </div>
                </div>

            @endif
        @endif
        </form>


    </section>
@endsection
@push('styles')
    <link href="{{ asset('css/customer/checkout.css') }}" rel="stylesheet">
@endpush
