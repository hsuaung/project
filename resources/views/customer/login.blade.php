@extends('layouts.customerLayout')
@section('title', 'Log in || furniture')
@section('content')

    <section class="link-connect">
        <span>Home</span>
        <span>My Account</span>
    </section>
    <section class="form-container">
        <div class="login-form">
            <h1>Log In</h1>
            <form action="">
                <label for="username">Username or email address <span>*</span></label>
                <input type="text" id="username">

                <label for="password">Username or email address <span>*</span></label>
                <input type="password" id="password">
                <div>
                    <button>LOG IN</button>
                    <!-- <p>Remember me</p> -->
                </div>
                <p>Lost your password?</p>
            </form>
        </div>
        <div class="register-form">
            <h1>Register</h1>
            <form action="{{route('customer.register.process') }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
        
                <label for="name">Name<span>*</span></label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email  <span>*</span></label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number  <span>*</span></label>
                <input type="text" id="phone" name="phone" required>

                <label for="password">Password <span>*</span></label>
                <input type="password" id="password" required>

                <label for="image">Image <span>*</span></label>
                <input type="file" id="image" name="image" required>

                <label for="address">Address <span>*</span></label>
                <textarea name="address" id="address" cols="30" rows="10" required></textarea>

                    <button type="submit">REGISTER</button>
                   
                
        </div>
    </section>
@endsection

@push('styles')
    <link href="{{ asset('css/customer/login.css') }}" rel="stylesheet">
@endpush
