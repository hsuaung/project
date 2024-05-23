<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page')</title>
    
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/admin/global.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/order.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/add.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    
</head>
<body>
    
<section class="main">
    @include('layouts.admin.sidemenu')
    <div class="right">
        @include('layouts.admin.header')
        @yield('content')
    </div>
</section>

</body>
</html>



@yield('styles')
@stack('scripts')