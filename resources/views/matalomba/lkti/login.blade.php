<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="../img/uf1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login Upload SPC</title>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
                  <style>
                    #loadingDiv {
             width: 100%;
             height: 100%;
             z-index: 99999;
             position: fixed;
             display: flex;
             align-items: center;
             justify-content: center;
             background-color: white;
           }
             
           #loadingDiv {
             width: 100%;
             height: 100%;
             z-index: 999999;
             position: fixed;
             display: flex;
             align-items: center;
             justify-content: center;
             background-color: white;
             }
             
             .loader {
             width: 9.5rem;
             height: 9.5rem;
             background: center / contain no-repeat url(../img/loader.gif);
             }
                 </style>
  </head>
  <body>
    <div id="loadingDiv">
      <div class="loader"></div>
    </div>
    <section class="wrapper">
      <div class="form signup">
        <header>Information</header>
        <form action="#login">
            <h1>Sebelum melanjutkan ke halaman Upload Harap Login Terlebih dahulu
                Menggunakan Email yg sudah terdaftar di pendaftaran<br>kalian tinggal klik login dibawah ini lalu masukkan Email dan verify Terimakasih!</h1>
        </form>
      </div>
      <div class="form login">
        <header>Login</header>
        <form method="POST" action="/login">
            @csrf
          <input type="email" name="email" id="email" for="email" placeholder="Your Email" required />
          <input type="submit" value="Verify" />
        </form>
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
            </script>
            @if ($errors->any())
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Email Belom Terdaftar', // Ambil pesan error pertama
                });
            </script>
        @endif
    </section>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
      function removeLoader() {
  $("#loadingDiv").fadeOut(200, () => {
    $("#loadingDiv").remove();
  });
}

$(window).on("load", () => {
  setTimeout(removeLoader, 2000);

  $("body").css(
    "overflow-y",
    "hidden",
    setTimeout(() => {
      $("body").css("overflow-y", "visible");
    }, 2000)
  );
});
  </script>
  </body>
</html>