<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Store | Log In Form</title>
    <link rel="stylesheet" href="{{asset('css/admin/style.css') }}">
    <link rel="stylesheet" href="/css/admin/login.css">
</head>
<body>
    <div class="login">
        <div class="login-image">
         
            <img src="{{asset('image/admin/adminLogin.jpg') }}" alt="">
        </div>
        <form action="{{route('login_handler')}}" method="POST" class="login-form">
            @csrf
            {{-- {{route('adminLoginProcess')}} --}}
            @if(Session::get('fail'))
            <div>
                {{Session::get('fail')}}
                <button><span> &times;</span></button>
            </div>
            @endif
            <h2>Admin Login</h2>
            <div>
                <label for="username">Username</label><br><br>
                <input type="text" id="username" name="login_id" value={{old('login_id')}}>
            </div>
            @error('login_id')
            <div>{{$message}}</div>
            @enderror
            <div>
                <label for="password">Password</label><br><br>
                <input type="password" id="password" name="password">
            </div>
            @error('password')
            <div>{{$message}}</div>
            @enderror
            <button> Login </button>
        </form>
    </div>
</body>
</html>