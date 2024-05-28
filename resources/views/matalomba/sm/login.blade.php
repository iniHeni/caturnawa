<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="../img/uf1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login Upload SM</title>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins",
        sans-serif;
    }
    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f0faff;
    }
    .wrapper {
      position: absolute;
      max-width: 470px;
      width: 100%;
      height: 500px;
      border-radius: 12px;
      padding: 20px
        30px
        120px;
      background: #4070f4;
      box-shadow: 0
        5px
        10px
        rgba(
          0,
          0,
          0,
          0.1
        );
      overflow: hidden;
    }
    .form.login {
      position: absolute;
      left: 50%;
      bottom: -86%;
      transform: translateX(
        -50%
      );
      width: calc(
        100% +
          220px
      );
      padding: 20px
        140px;
      border-radius: 50%;
      height: 100%;
      background: #fff;
      transition: all
        0.6s
        ease;
    }
    .wrapper.active
      .form.login {
      bottom: -15%;
      border-radius: 35%;
      box-shadow: 0 -5px
        10px rgba(0, 0, 0, 0.1);
    }
    .form
      header {
      font-size: 30px;
      text-align: center;
      color: #fff;
      font-weight: 600;
      cursor: pointer;
    }
    .form.login
      header {
      color: #333;
      opacity: 0.6;
    }
    .wrapper.active
      .form.login
      header {
      opacity: 1;
    }
    .wrapper.active
      .signup
      header {
      opacity: 0.6;
    }
    .wrapper
      form {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-top: 40px;
    }
    form
      input {
      height: 60px;
      outline: none;
      border: none;
      padding: 0
        15px;
      font-size: 16px;
      font-weight: 400;
      color: #333;
      border-radius: 8px;
      background: #fff;
    }
    .form.login
      input {
      border: 1px
        solid
        #aaa;
    }
    .form.login
      input:focus {
      box-shadow: 0
        1px 0
        #ddd;
    }
    
    
    form a {
      color: #333;
      text-decoration: none;
    }
    form
      a:hover {
      text-decoration: underline;
    }
    form
      input[type="submit"] {
      margin-top: 15px;
      padding: none;
      font-size: 18px;
      font-weight: 500;
      cursor: pointer;
    }
    .form.login
      input[type="submit"] {
      background: #4070f4;
      color: #fff;
      border: none;
    }
    h1{
        margin-top: 1rem;
        color: #fff;
        text-align: center;
        font-size: 20px;
    }
            </style>
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Information</header>
        <form action="#">
            <h1>Sebelum melanjutkan ke halaman Upload Harap Login Terlebih dahulu
                Menggunakan username dan password yg sudah terdaftar di pendaftaran<br>
            setelah mendapatkan username dan password kalian tinggal klik login dibawah ini lalu masukkan username dan password kalian Terimakasih!</h1>
        </form>
      </div>
      <div class="form login">
        <header>Login</header>
        <form  action="/loginsm" method="POST">
            @csrf
          <input type="text" name="nama" id="nama" for="nama" placeholder="nama/your name" required />
          <input type="password" name="password" id="password" for="password" placeholder="Password" required />
          <input type="submit" value="Login" />
        </form>
        <a href="{{"/"}}">
          <input type="submit" value="Home" /></a>
      </div>
      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");
        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
       @if ($errors->any())
       <script>
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: "Username atau Password salah", // Ambil pesan error pertama
           });
       </script>
   @endif
    </section>
  </body>
</html>