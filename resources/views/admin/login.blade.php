<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Store | Log In Form</title>
    <link rel="stylesheet" href="{{asset('css/admin/global.css') }}">
    <link rel="stylesheet" href="{{asset('css/admin/login.css') }}">
</head>
<body>
   
    <div class="login">
        <div class="login-image">
         
            <img src="{{asset('image/admin/adminLogin.jpg') }}" alt="">
        </div>
        <form action="{{route('admin.login.process')}}" class="login-form" method="POST">
            @csrf
            <input type="hidden" value="admin" name="usertype" >
            <h2>Admin Login</h2>
            <div>
                <label for="email">Email</label><br><br>
                <input type="text" id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label><br><br>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit"> Login </button>
        </form>
    </div>
</body>
</html>