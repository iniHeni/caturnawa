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
    <link rel="stylesheet" href="../../../css/tambahsm.css">
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
            <h2><a href="#" class="nav__logo" id="menu" style="margin-left: -3rem">Admin Short Movie </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="#" id="menu"><img class="sidelogo" id="sidelogo" src="../../img/uf2.png" alt="Logo"></a>
    <a href="{{url('/admin/mainmenuLKTI1')}}" id="beranda" class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('/admin/pesertaLKTI1')}}" id="pesertaLKTI" class="final"><i class="fa fa-user-circle-o  "></i> Participant</a>
    <a href="{{url('/admin/penyisihanLKTI1')}}" class="penyisihan"><i class="fa fa-users"></i> Penyisihan</a>
    <a href="{{url('/admin/semifinalLKTI1')}}" id="semifinalLKTI" class="semifinal"><i class="fa fa-list-alt"></i> SemiFinal</a>
    <a href="{{url('/admin/finalLKTI1')}}" id="finalLKTI" class="final"><i class="fa fa-trophy"></i> Final</a>
    
    
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

<section>
    <div class="konten">
      <header>Data Penyisihan</header>
      <form action="/tambah/final" method="POST" enctype="multipart/form-data" id="penilaian" >
          @csrf
          <div class="form first">
            <div class="details personal">
                <span class="title">Data Penilaian</span>
                <div class="fields"> 
                    <div class="input-field">
                        <label for="university">Universitas</label>
                        <input name="university" id="university" type="text" placeholder=" Asal Universtas" required >
                    </div>
                    <div class="input-field">
                      <label for="juri">Nama Juri</label>
                      <select name="juri" id="juri" is-invalid  required>
                          <option selected>Pilih Juri</option>
                          <option>Daniel Wisnu Wardhana</option>
                          <option>Kusen Dony Hermansyah</option>
                          <option>Rita Sri Hastuti</option>
                      </select>
                      </div>
                </div>
              </div>
          <div class="details personal">
          <span class="title">1. Kesesuaian film dengan tema </span>
              <div class="fields">
                <div class="input-field">
                    <label for="namapeserta">Nama Peserta</label>
                    <input name="namapeserta" id="namapeserta" type="text" placeholder="Masukkan Nama Peserta" required>
                </div>
              <div class="input-field">
                <label for="krit1para1">Score:</label>
                <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
            </div>
              </div>
          </div>
          <div class="details personal">
              <span class="title">2. Kreatifitas dalam Menceritakan realita dari sudut pandang Berbeda</span>
                  <div class="fields">
                    <div class="input-field">
                        <label for="namapeserta">Nama Peserta</label>
                        <input name="namapeserta" id="namapeserta" type="text" placeholder="Masukkan Nama Peserta" required>
                    </div>
                  <div class="input-field">
                    <label for="krit1para1">Score:</label>
                    <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">3. Kejelasan pesan yang disampaikan melalui film yang dibuat</span>
                      <div class="fields">
                        <div class="input-field">
                            <label for="namapeserta">Nama Peserta</label>
                            <input name="namapeserta" id="namapeserta" type="text" placeholder="Masukkan Nama Peserta" required>
                        </div>
                      <div class="input-field">
                        <label for="krit1para1">Score:</label>
                        <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                    </div>
                      </div>
                  </div>
                  <div class="details personal">
                    <span class="title">4. Kesesuaian antara judul film dengan Cerita Pesan yang akan disampaikan</span>
                        <div class="fields">
                          <div class="input-field">
                              <label for="namapeserta">Nama Peserta</label>
                              <input name="namapeserta" id="namapeserta" type="text" placeholder="Masukkan Nama Peserta" required>
                          </div>
                        <div class="input-field">
                          <label for="krit1para1">Score:</label>
                          <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                      </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">4. Kesesuaian antara judul film dengan Cerita Pesan yang akan disampaikan</span>
                            <div class="fields">
                              <div class="input-field">
                                  <label for="namapeserta">Nama Peserta</label>
                                  <input name="namapeserta" id="namapeserta" type="text" placeholder="Masukkan Nama Peserta" required>
                              </div>
                            <div class="input-field">
                              <label for="krit1para1">Score:</label>
                              <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                          </div>
                            </div>
                        </div>
                        <div class="details personal">
                            <span class="title">4. Kesesuaian antara judul film dengan Cerita Pesan yang akan disampaikan</span>
                                <div class="fields">
                                  <div class="input-field">
                                      <label for="namapeserta">Nama Peserta</label>
                                      <input name="namapeserta" id="namapeserta" type="text" placeholder="Masukkan Nama Peserta" required>
                                  </div>
                                <div class="input-field">
                                  <label for="krit1para1">Score:</label>
                                  <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                              </div>
                                </div>
                            </div>
                    <div class="details personal">
                    <span class="title">5. Kedalaman riset dan observasi dalam film</span>
                        <div class="fields">
                          <div class="input-field">
                              <label for="namapeserta">Nama Peserta</label>
                              <input name="namapeserta" id="namapeserta" type="text" placeholder="Masukkan Nama Peserta" required>
                          </div>
                        <div class="input-field">
                          <label for="krit1para1">Score:</label>
                          <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                      </div>
                      <div class="details personal">
                        <span class="title">5.2 Kesesuaian antara fakta dan realitas dengan cerita yang diangkat dalam film</span>
                            <div class="fields">
                            <div class="input-field">
                              <label for="krit1para1">Score:</label>
                              <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                          </div>
                          <div class="details personal">
                            <span class="title">5.3 Kreativitas dalam pengambilan gambar yang meliputi sudut kamera,pencahayaan,ruang,waktu</span>
                                <div class="fields">
                                <div class="input-field">
                                  <label for="krit1para1">Score:</label>
                                  <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                              </div>
                              <div class="details personal">
                                <span class="title">5.4 Kreativitas dalam menggunakan unsur audio untuk memberikan informasi secara jelas serta memberikan suasana mood dalam film</span>
                                    <div class="fields">
                                    <div class="input-field">
                                      <label for="krit1para1">Score:</label>
                                      <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                                  </div>
                                  <div class="details personal">
                                    <span class="title">5.5 Kreativitas dalam memadukan unsur video dan audio dalam menyusun alur cerita berdasarkan informasi dan realita yang diproleh menjadi suatu yang menarik</span>
                                        <div class="fields">
                                        <div class="input-field">
                                          <label for="krit1para1">Score:</label>
                                          <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
                                      </div>

                        </div>
                    </div>
          <div class="details ID">
            <span class="title">5.6 Kesesuaian antara gambar dan suara serta estetika dalam film</span>
            <div class="fields">
            <div class="input-field">
              <label for="krit1para1">Score:</label>
              <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" >
            </div>
            </div>
            <button type="submit" class="nextBtn">
                <span class="btnText">Submit</span>
                <i class="uil uil-navigator"></i>
            </button> 
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
<script>
    function hitungTotal() {
      const form = document.getElementById("penilaian");
      const krit1para1 = parseFloat(form.krit1para1.value) || 0;
      const krit1para2 = parseFloat(form.krit1para2.value) || 0;
      const krit1para3 = parseFloat(form.krit1para3.value) || 0;
      const krit1para4 = parseFloat(form.krit1para4.value) || 0;
      const krit1para5 = parseFloat(form.krit1para5.value) || 0;
      const krit1para6 = parseFloat(form.krit1para6.value) || 0;
      const krit1para7 = parseFloat(form.krit1para7.value) || 0;

      const scorepemaparanmateri = krit1para1 + krit1para2 + krit1para3 + krit1para4 + krit1para5 + krit1para6 + krit1para7;
      form.scorepemaparanmateri.value = scorepemaparanmateri;

      const krit2para1 = parseFloat(form.krit2para1.value) || 0;
      const krit2para2 = parseFloat(form.krit2para2.value) || 0;
      const krit2para3 = parseFloat(form.krit2para3.value) || 0;
      const krit2para4 = parseFloat(form.krit2para4.value) || 0;
      const krit2para5 = parseFloat(form.krit2para5.value) || 0;
      const krit2para6 = parseFloat(form.krit2para6.value) || 0;
      const krit2para7 = parseFloat(form.krit2para7.value) || 0;

      const scorepertanyaandanjawaban = krit2para1 + krit2para2 + krit2para3 + krit2para4 + krit2para5 + krit2para6 + krit2para7;
      form.scorepertanyaandanjawaban.value = scorepertanyaandanjawaban;

      const krit3para1 = parseFloat(form.krit3para1.value) || 0;
      const krit3para2 = parseFloat(form.krit3para2.value) || 0;
      const krit3para3 = parseFloat(form.krit3para3.value) || 0;
      const krit3para4 = parseFloat(form.krit3para4.value) || 0;
      const krit3para5 = parseFloat(form.krit3para5.value) || 0;
      const krit3para6 = parseFloat(form.krit3para6.value) || 0;
      const krit3para7 = parseFloat(form.krit3para7.value) || 0;

      const scoreaspekkesesuaian = krit3para1 + krit3para2 + krit3para3 + krit3para4 + krit3para5 + krit3para6 + krit3para7;
      form.scoreaspekkesesuaian.value = scoreaspekkesesuaian;

      const total = scorepemaparanmateri + scorepertanyaandanjawaban + scoreaspekkesesuaian;
      form.total.value = total;
    }
  </script>
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