<!-- resources/views/auth/loginadmin.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body id="bg-login">

    <div class="box-login">
        <h2>Login</h2>
        <form action="{{ url('admin/mainmenuEDC') }}" method="POST">
            @csrf
            <input type="text" name="user" placeholder="Username" class="input-control" autofocus>
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <select name="lang" class="input-control">
                <option value="ind">KDBI</option>
                <option value="eng">EDC</option>
            </select>
            <br>
            <br>
            <input type="submit" name="submit" value="Login" class="btn">
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
    </div>
</body>

</html>
