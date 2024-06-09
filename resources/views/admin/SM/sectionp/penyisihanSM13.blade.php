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
    <link rel="stylesheet" href="../../../css/tambahspc.css">
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
   background: center / contain no-repeat url(../img/loader.gif);
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
            <h2><a href="#" class="nav__logo" id="menu" style="margin-left: -3rem">Admin Short Movie </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 0"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
  <a href="#" id="menu"><img class="sidelogo" id="sidelogo" src="../../../img/uf2.png" alt="Logo"></a>
  <a href="{{url('/admin/mainmenuSM1')}}"  class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
  <a href="{{url('/admin/mainmenuSM1')}}" class="penyisihan"><i class="fa fa-users"></i> Penyisihan</a>
  <a href="#" id="finalLKTI" class="final"><i class="fa fa-trophy"></i> Final</a>
    
    
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
<div id="data-container">
    <section style="height: 125rem" id="skor">
        <div class="container" style="display: flex; justify-content: center;height:70rem">
            <div style="width: 100%;">
                <h1 class="welcome" style="margin-bottom: 1rem; margin-top:auto">Penyisihan</h1>
                <p><a class="add" href="{{ url('/sm/tambah/sf') }}">Tambah Penilaian</a></p>
                <div class="table-responsive" style="max-height: 1000px; overflow-x: auto; overflow-y: auto; position: static;">
                  <table class="table table-bordered table-striped" style="min-width: 650px; margin-bottom: 0; border-collapse: collapse;">
                    <thead style="position: static; top: -1; z-index: 10;">
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Team Participant</th>
                          <th scope="col">Participant</th>
                          <th scope="col">Kriteria</th>
                          <th scope="col">Penilaian Meliputi</th>
                          <th scope="col">Score</th>
                          <th scope="col">Penilaian Kuantitatif</th>
                          <th scope="col">Total</th>
                          <th scope="col">Rank</th>
                          <th scope="col">Adjudicators</th>
                          <th scope="col">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td rowspan="30">1</td>
                          <td rowspan="30"></td>
                          <td rowspan="4"></td>
                          <td rowspan="4">Ide dan kesesuaian pesan yang disampaikan pada tema</td>
                          <td>Kesesuaian film dengan tema</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Kreatifitas dalam menceritakan realita dari sudut pandang yang berbeda (teknik penyutradaraan)</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Kejelasan pesan yang disampaikan melalui film yang dibuat</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Kesesuaian antara judul film dengan cerita melalui film yang dibuat</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      
                      <tr>
                          <td rowspan="2"></td>
                          <td rowspan="2">Kedalaman riset dan observasi peristiwa, lokasi, serta karakter dalam film</td>
                          <td>Kedalaman riset dan observasi dalam film</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Kesesuaian antara fakta dan realita dengan cerita yang diangkat dalam film</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      
                      <tr>
                          <td rowspan="1"></td>
                          <td rowspan="1">Visualisasi dan teknik pengambilan gambar</td>
                          <td>Kreatifitas dalam pengambilan gambar yang meliputi sudut kamera, pencahayaan, ruang, dan waktu</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      
                      <tr>
                          <td rowspan="1"></td>
                          <td rowspan="1">Penggunaan ilustrasi musik, suara, karakter atau voice over</td>
                          <td>Kreatifitas dalam menggunakan unsur audio untuk memberikan informasi secara jelas serta memberikan suasana (mood) dalam film</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      
                      <tr>
                          <td rowspan="2"></td>
                          <td rowspan="2">Pola atur penceritaan serta teknik editing dalam penyusunan gambar dan suara</td>
                          <td>Kedalaman riset dan observasi dalam film</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Kesesuaian antara fakta dan realita dengan cerita yang diangkat dalam film</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      
                  </tbody>
                  </table>
                </div>
        </div>
        <style>
            .table-bordered td,
            .table-bordered th {
                border: 2px solid black !important;
                text-align: center;
                vertical-align: middle;
            }

            thead th {
                background-color: #0d6efd !important;
            }
        </style>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../../../js/adminSM.js"></script>

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


