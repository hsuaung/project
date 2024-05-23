@extends('layouts.admin.masterLayout')
@section('page', 'Funiture Store Dashboard')
@section('title', 'Dashboard')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
@endpush
@section('content')
<div class="dashboardrow ">
    <div class="box">
        <div class="content">
            <p>Todays Revenue</p>
            <h1>$8.2K</h1>
            <p>Availabale to payout</p>
        </div>
    </div>

    <div class="box">
        <div class="content">
            <p>Todays Revenue</p>
            <h1>$8.2K</h1>
            <p>Availabale to payout</p>
        </div>
    </div>

    <div class="box">
        <div class="content">
            <p>Todays Revenue</p>
            <h1>$8.2K</h1>
            <p>Availabale to payout</p>
        </div>
    </div>
</div>

<div class="dashboardrow ">
    <div class="bar-chart">
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                    datasets: [{
                            label: 'Profit',
                            data: [18000, 22000, 19000, 12000, 22000, 25000, 22000, 22000, 22000],
                            backgroundColor: 'rgba(51, 51, 102, 1)', // Color for profit bars
                            borderColor: 'rgba(51, 51, 102, 1)', // Border color for profit bars
                            borderWidth: 1
                        },
                        {
                            label: 'Loss',
                            data: [11000, 10000, 9000, 2000, 19000, 5000, 2000, 2000, 1500],
                            backgroundColor: 'rgba(232, 246, 240, 1)', // Color for loss bars
                            borderColor: 'rgba(232, 246, 240, 1)', // Border color for loss bars
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

    </div>

    <div class="pie-chart">
        <canvas id="myPie" style="width:100%;max-width:600px"></canvas>
        <script>
            var ctx = document.getElementById('myPie').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['One time', 'Account'],
                    datasets: [{
                        data: [ 500 , 350 ],
                        backgroundColor: [
                            'rgba(232, 246, 240, 1)', // Color for 'One time'
                            'rgba(51, 51, 102, 1)' // Color for 'Account'
                        ],
                        borderColor: [
                            'rgba(232, 246, 240, 1)', // Border color for 'One time'
                            'rgba(51, 51, 102, 1)' // Border color for 'Account'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Monthly Order'
                    }
                }
            });
        </script>
    </div>

</div>

<div class="table">
    <div class="title">
        <b>Latest Orders</b>
    </div>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Order ID</th>
            <th>Date</th>
            <th>Customer Name</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Morden Sofa</td>
            <td>EE72823</td>
            <td>2023 Nov 22</td>
            <td>Sofia Mia</td>
            <td>
                <span class="dot dot-deliver"></span> Delivered
            </td>
            <td>250.000 MMK</td>
            <td>
                <img src="{{asset('image/admin/edit.svg') }}"alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td>
        </tr>
        <tr>
            <td>Morden Sofa</td>
            <td>EE72823</td>
            <td>2023 Nov 22</td>
            <td>Sofia Mia</td>
            <td>
                <span class="dot dot-deliver"></span> Delivered
            </td>
            <td>250.000 MMK</td>
            <td>
                <img src="{{asset('image/admin/edit.svg') }}"alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td>
        </tr>
        <tr>
            <td>Morden Sofa</td>
            <td>EE72823</td>
            <td>2023 Nov 22</td>
            <td>Sofia Mia</td>
            <td>
                <span class="dot dot-deliver"></span> Delivered
            </td>
            <td>250.000 MMK</td>
            <td>
                <img src="{{asset('image/admin/edit.svg') }}"alt="">
                <img src="{{asset('image/admin/trashbin.svg') }}" alt="">
            </td>
        </tr>
    </table>
</div>



</div>
  
@endsection
