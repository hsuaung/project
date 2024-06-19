@extends('layouts.admin.masterLayout')

@section('title', 'Order Detail')
@push('styles')

@endpush
@section('content')

<section>
    
    {{-- @php
        dd($orderDetail);

    @endphp --}}
    <table>
        <tr>
            <th>Item No</th>
            <th>Image</th>
            <th>Item Name</th>
            {{-- <th>Qty</th> --}}

            <th>Price * Qty</th>
            


        </tr>
        @php
                 $total=0;
        @endphp
       
        @foreach ($orderDetail as $order )
        <tr>
            <td>{{$order->id}}</td>
            <td>
                <img src="{{asset($order->image)}}" alt="" width="100px" height="100px">
            </td>
            <td>{{$order->name}}</td>
            {{-- <td>{{$order->qty}}</td> --}}
            <td>${{$order->productPrice}} * {{$order->qty}}</td>
            @php
                 $total+=$order->price;
            @endphp
        </tr>
        @endforeach
       <tr>
        <td></td>
        <td></td>
        <td></td>
        <td class="totalAmt">Sub Total = ${{$total}}</td>
       </tr>
    </table>
    
</section>
@endsection

