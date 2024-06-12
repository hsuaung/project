@extends('layouts.customerLayout')
@section('title','checkout || furniture')
@section('content')
<section class="">
        <a href="">Home > </a> Checkout
</section>
{{-- @dd(session('cart')) --}}


    <section class="container">
        <div class="detail">
            <b>Billing Details</b>
            <form action="">
                <div><label for="firstName" >First name <span>*</span> </label></div>
                <div><input type="text" id="firstName"></div>
                <div><label for="lastName" id="lastName">Last name <span>*</span> </label></div>
                <div><input type="text" id="lastName" required></div>
                <div><label for="country" id="lastName">Country / Region <span>*</span> </label>
                </div>
                <div>
                    <select type="text" id="country" required>
                        <option value="">United Kingdom</option>
                        <option value="">Singapore</option>
                        <option value="">Japan</option>
                    </select>
                </div>
                <div><label for="address">Address  <span>*</span> </label></div>
                <div><textarea name="" id="address" cols="21" rows="5"></textarea></div>
                <div><label for="email">Email <span>*</span> </label></div>
                <div><input type="email" id="email"></div>
                <div><label for="phno">Phone<span>*</span> </label></div>
                <div><input type="number" id="phno"></div>
            </form>

        </div>
        @php
$items = session('cart');
@endphp
@if (is_array($items))
@if (is_array(current($items)))
    @foreach ($items as $id => $detail)
    <div class="order">
            
        <div class="order-detail">
            <div class="title"><b>Your Order</b></div>
            <div>PRODUCT</div>
            <div>SUBTOTAL</div>
            <div>{{ $detail['product_name'] }} x {{ $detail['quantity'] }}</div>
            <div> $ {{ $detail['price'] }}</div>
            <div>Subtotal</div>
            <div> $ {{ $detail['price']* $detail['quantity'] }}</div>
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
    @endforeach
@endif
@endif
       
    </section>
@endsection
@push('styles')
    <link href="{{ asset('css/customer/checkout.css') }}" rel="stylesheet">
@endpush
