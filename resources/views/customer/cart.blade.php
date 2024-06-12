@extends('layouts.customerLayout')
@section('title', 'cart || furniture')

@section('content')
  

    <section class="">

        <a href="">Home > </a> Shopping cart
    </section>
    <section class=""> <b>Your selection </b><span>
            {{ session('cart') != null ? count(session('cart')) . ' items' : ' 0 item' }}</span>
    </section>
    @if (session('cart') != null)
    
        <section class="table">
            <table class="cart-table">
                <tr>
                    <th colspan="3" >Product</th>
                    <th>Price</th>
                    <th >Quantity</th>
                    <th>Total</th>
                   
                </tr>
                <hr>
                    @php
                        $items = session('cart');
                    @endphp
                    @if (is_array($items))
                        @if (is_array(current($items)))
                            @foreach ($items as $id => $detail)
                           
                                <tr>
                                    <td ><a href="{{ url('/removeItem/' . $detail['product_id']) }}"
                                            id="cancel">x</a></td>
                                    <td  class=""><img src="{{ asset($detail['image']) }}"
                                            alt="product" width="120px" height="120px"></td>
                                    {{-- product-image-container --}}
                                    <td >{{ $detail['product_name'] }}</td>
                                    <td>$ {{ $detail['price'] }}</td>
                                    <td>
                                        <form action="{{ route('updateCart') }}">
                                            <input type="hidden" value="{{$detail['product_id']}}" name="product_id[]">
                                            <input class="quantity-input" type="number" value="{{ $detail['quantity']}}"
                                                name="quantity[]" id="quantity">
                                            </input>
                                    </td> 
                                    <td class="total">$ {{ $detail['quantity'] * $detail['price'] }}</td>
                                </tr>
                                
                              
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <a  href="{{ route('checkout') }}" class="checkout">Procced To Checkout</a></td>
                                <td><a href="{{ route('clearCart') }}" class="clearbtn">Clear All</a></td>
                                <td><button type="submit" class="updatebtn">Update Cart</button></td>
                                </form>
                            </tr>
                        @endif
                    @endif
              
            </table>
           
        </section>
    
    
    
    
    @else
    <a href="{{route('shop')}}" >
        <button>Shop Now <img src="{{ asset('image/customer/right-arrow-svgrepo-com 2.svg') }}" alt=""></button>
    </a>
    @endif


@endsection

@push('styles')
    <link href="{{ asset('css/customer/cart.css') }}" rel="stylesheet">
@endpush
