<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== Icon Web ===============-->
    <link rel="icon" href="../../../img/uf1.png">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../../../css/nowrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/admin.css">
    <link rel="stylesheet" href="../../../css/navmenu.css">
    <link rel="stylesheet" href="../../../css/tambahpenyisihan.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

    <title>Caturnawa - Admin</title>
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
   background: center / contain no-repeat url(../../../img/loader.gif);
 }
     </style>
</head>
<body>
    <div id="loadingDiv">
        <div class="loader"></div>
      </div>
<!--==================== Navbar ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <div class="nav_logo" id="nav-logo">
            <img class="logo" src="../../../img/uf2.png" alt="Logo">
            <h2><a href="#" class="nav__logo" id="menu" style="margin-left: -3rem">Admin ShortMovie </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 0"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="#" id="menu"><img class="sidelogo" id="sidelogo" src="../../img/uf2.png" alt="Logo"></a>
    <a href="{{route('sm.mainmenu')}}" id="beranda" class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('/admin/pesertaSM')}}" id="finalLKTI" class="final"><i class="fa fa-user-plus"></i> Data Peserta</a>
    <a href="{{url('/admin/penyisihanSM')}}" class="penyisihan"><i class="fa fa-users"></i> Penyisihan</a>
    <a href="{{url('/admin/finalSM')}}" id="finalLKTI" class="final"><i class="fa fa-trophy"></i> Final</a>
    
    
    <!-- resources/views/mainmenu.blade.php -->

    <!-- Tautan untuk logout -->
    <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> Logout
    </a>

    <!-- Form untuk logout (disembunyikan) -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

<div style="margin-bottom: 20rem"></div>

<section style="height: 60rem" >
    <div class="konten">
      <header>Peserta Lomba</header>
      <form action="/tambahsm/peserta" method="POST"  id="penilaian" enctype="multipart/form-data">
          @csrf
          <div class="form first">
            <div class="details ID">
                <span class="title">Data Peserta</span>
                <div class="fields"> 
                    <div class="input-field">
                        <label for="instansi">Asal Instansi</label>
                        <input name="instansi" id="instansi" type="text" placeholder=" Asal Universitas" required >
                    </div>
                    <div class="input-field">
                        <label for="namateam">Nama Team</label>
                        <input name="namateam" id="namateam" type="text" placeholder=" Asal Universitas" required >
                    </div>
                    <div class="input-field">
                        <label for="nama">Nama Peserta 1</label>
                        <input name="nama" id="nama" type="text" placeholder="Nama Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="nama1">Nama Peserta 2</label>
                        <input name="nama1" id="nama1" type="text" placeholder="Nama Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="nama2">Nama Peserta 3</label>
                        <input name="nama2" id="nama2" type="text" placeholder="Nama Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="nama3">Nama Peserta 4</label>
                        <input name="nama3" id="nama3" type="text" placeholder="Nama Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="nama4">Nama Peserta 5</label>
                        <input name="nama4" id="nama4" type="text" placeholder="Nama Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="email">Email Peserta 1</label>
                        <input name="email" id="email" type="email" placeholder="Email Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="email1">Email Peserta 2</label>
                        <input name="email1" id="email1" type="email" placeholder="Email Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="email2">Email Peserta 3</label>
                        <input name="email2" id="email2" type="email" placeholder="Email Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="email3">Email Peserta 4 </label>
                        <input name="email3" id="email3" type="email" placeholder="Email Peserta" required>
                    </div>
                    <div class="input-field">
                        <label for="email4">Email Peserta 5 </label>
                        <input name="email4" id="email4" type="email" placeholder="Email Peserta" required>
                    </div>
                        <div class="input-field">
                            <label for="nohp">No Peserta Handphone 1</label>
                            <input name="nohp" id="nohp" type="number" placeholder="Nomer hp Peserta" required>
                        </div>
                        <div class="input-field">
                            <label for="nohp1">No Peserta Handphone 2</label>
                            <input name="nohp1" id="nohp1" type="number" placeholder="Nomer hp Peserta" required>
                        </div>
                        <div class="input-field">
                            <label for="nohp2">No Peserta Handphone 3</label>
                            <input name="nohp2" id="nohp2" type="number" placeholder="Nomer hp Peserta" required>
                        </div>
                        <div class="input-field">
                            <label for="nohp3">No Peserta Handphone 4</label>
                            <input name="nohp3" id="nohp3" type="number" placeholder="Nomer hp Peserta" required>
                        </div>
                        <div class="input-field">
                            <label for="nohp4">No Peserta Handphone 5</label>
                            <input name="nohp4" id="nohp4" type="number" placeholder="Nomer hp Peserta" required>
                        </div>
                        <div class="input-field">
                            <label for="foto">Foto Formal Peserta 1 *jpg,png.jpeg</label>
                            <input name="foto" id="foto" type="file"  accept=".png, .jpg, .jpeg" required>
                        </div>
                        <div class="input-field">
                            <label for="foto1">Foto Formal Peserta 2 *jpg,png.jpeg</label>
                            <input name="foto1" id="foto1" type="file"  accept=".png, .jpg, .jpeg" required>
                        </div>
                        <div class="input-field">
                            <label for="foto2">Foto Formal Peserta 3 *jpg,png.jpeg</label>
                            <input name="foto2" id="foto2" type="file"  accept=".png, .jpg, .jpeg" required>
                        </div>
                        <div class="input-field">
                            <label for="foto3">Foto Formal Peserta 4 *jpg,png.jpeg</label>
                            <input name="foto3" id="foto3" type="file"  accept=".png, .jpg, .jpeg" required>
                        </div>
                        <div class="input-field">
                            <label for="foto4">Foto Formal Peserta 5 *jpg,png.jpeg</label>
                            <input name="foto4" id="foto4" type="file"  accept=".png, .jpg, .jpeg" required>
                        </div>
                        <div class="input-field">
                            <label for="logo">Logo Instansi *jpg,png.jpeg</label>
                            <input name="logo" id="logo" type="file"  accept=".png, .jpg, .jpeg" required>
                        </div>
                  </div>
 
                </div>
                <button type="submit" class="nextBtn">
                    <span class="btnText">Submit</span>
                    <i class="uil uil-navigator"></i>
                </button>
              </div>
        </div>
      </form>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    document.getElementById('penilaian').addEventListener('submit', function(event) {
        event.preventDefault(); 
    
        Swal.fire({
            title: 'Success!',
            text: 'Data berhasil Ditambahkan!',
            icon: 'success',
            confirmButtonText: 'Lanjutkan'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(); 
            }
        });
    });
    </script>
<!-- Script untuk memanggil file admin.js -->
<script src="../../../js/adminLKTI.js"></script>
<script>
document.getElementById("menu").addEventListener("click", function () {
    document.body.classList.toggle("sidebar-open");
});
</script>
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