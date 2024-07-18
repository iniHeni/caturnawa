<!-- resources/views/auth/loginadmin.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"  href="../../img/uf1.png">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body id="bg-login">

    <div class="box-login">
        <h2>Login</h2>
        <form action="/login/handler" method="POST">
            @csrf
            <input type="text" name="user" id="user" for="user" placeholder="Username" class="input-control" autofocus>
            <input type="password" name="pass" id="pass" for="pass" placeholder="Password" class="input-control">
            <select name="lang" class="input-control" id="lang" for="lang">
                <option value="kdbi">KDBI</option>
                <option value="edc">EDC</option>
                <option value="spc">SPC</option>
                <option value="sm">SMC</option>
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
