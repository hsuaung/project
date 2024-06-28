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
            <form action="{{route('customer.login.process') }}" method="post">
                @csrf
                <label for="email">Email address <span>*</span></label>
                <input type="text" id="email" name="email" required>
                @error('email')
                    <p>{{$message}}</p>
                @enderror
                <label for="password">Password<span>*</span></label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <p>{{$message}}</p>
                @enderror
                <div>
                    <button type="submit">LOG IN</button>
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
