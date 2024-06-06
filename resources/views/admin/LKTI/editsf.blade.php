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
    <link rel="stylesheet" href="../../../css/tambahspc.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
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

    <title>Caturnawa - Admin</title>
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
            <h2><a href="#" class="nav__logo" id="menu" style="margin-left: -3rem">Admin LKTI </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="{{url('/admin/beranda')}}" id="menu"><img class="sidelogo" id="sidelogo" src="../../img/uf2.png" alt="Logo"></a>
    <a href="{{url('/admin/mainmenuLKTI1')}}" id="beranda" class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
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
      <form action="{{ route('spc.updatesf', $edit->id) }}" method="POST"  id="penilaianForm" >
          @csrf
          <div class="form first">
            <div class="details personal">
                <span class="title">Data Penilaian</span>
                <div class="fields"> 
                    <div class="input-field">
                        <label for="university">Universtas</label>
                        <input name="university" id="university" type="text" placeholder=" Asal Universtas" required value="{{ $edit->university }}" >
                    </div>
                    <div class="input-field">
                        <label for="namapeserta">Nama Peserta</label>
                        <input name="namapeserta" id="namapeserta" type="text" placeholder="Masukkan Nama Peserta" required value="{{ $edit->namapeserta }}">
                    </div>
                    <div class="input-field">
                      <label for="juri">Nama Juri</label>
                      <select name="juri" id="juri" is-invalid  required value="{{ $edit->juri }}">
                          <option selected>Pilih Juri</option>
                          <option>Efriza, S.I.P., M.Si</option>
                          <option>Fajar Harry Sampurno, MBA, Ph.D.</option>
                          <option>Prof. Dr.Eng. Eniya Listiani Dewi</option>
                      </select>
                      </div>
                </div>
              </div>
          <div class="details personal">
          <span class="title">1. Pemaparan Materi dan Presentasi ilmiah</span>
              <div class="fields">
              <div class="input-field">
                <label for="krit1para1">Nilai 100-90:</label>
                <input type="number" id="krit1para1" name="krit1para1" oninput="hitungTotal()" value="{{ $edit->krit1para1 }}" >
            </div>
            <div class="input-field">
                <label for="krit1para2">Nilai 90-80:</label>
                <input type="number" id="krit1para2" name="krit1para2" oninput="hitungTotal()" value="{{ $edit->krit1para2 }}" >
            </div>
            <div class="input-field">
                <label for="krit1para3">Nilai 80-75:</label>
                <input type="number" id="krit1para3" name="krit1para3" oninput="hitungTotal()" value="{{ $edit->krit1para3 }}" >
            </div>
            <div class="input-field">
              <label for="krit1para4">Nilai 70:</label>
              <input type="number" id="krit1para4" name="krit1para4" oninput="hitungTotal()" value="{{ $edit->krit1para4 }}" >
          </div>
          <div class="input-field">
              <label for="krit1para5">Nilai 65-60:</label>
              <input type="number" id="krit1para5" name="krit1para5" oninput="hitungTotal()" value="{{ $edit->krit1para5 }}" >
          </div>
          <div class="input-field">
              <label for="krit1para6">Nilai 60-50:</label>
              <input type="number" id="krit1para6" name="krit1para6" oninput="hitungTotal()" value="{{ $edit->krit1para6 }}" >
          </div>
          <div class="input-field">
              <label for="krit1para7">Nilai 50:</label>
              <input type="number" id="krit1para7" name="krit1para7" oninput="hitungTotal()" value="{{ $edit->krit1para7 }}" >
          </div>
          <div class="input-field">
                      <label for="scorepemaparanmateri">Total Score Krieria1:</label>
                      <input @disabled(true) type="text" id="scorepemaparanmateri" name="scorepemaparanmateri" readonly value="{{ $edit->scorepemaparanmateri }}">
                  </div>
              </div>
          </div>
          <div class="details personal">
              <span class="title">2. Pertanyaan dan Jawaban</span>
                  <div class="fields">
                  <div class="input-field">
                    <label for="krit2para1">Nilai 100-90:</label>
                    <input type="number" id="krit2para1" name="krit2para1" oninput="hitungTotal()" value="{{ $edit->krit2para1 }}" >
                </div>
                <div class="input-field">
                    <label for="krit2para2">Nilai 90-80:</label>
                    <input type="number" id="krit2para2" name="krit2para2" oninput="hitungTotal()" value="{{ $edit->krit2para2 }}" >
                </div>
                <div class="input-field">
                    <label for="krit2para3">Nilai 80-75:</label>
                    <input type="number" id="krit2para3" name="krit2para3" oninput="hitungTotal()" value="{{ $edit->krit2para3 }}" >
                </div>
                <div class="input-field">
                  <label for="krit2para4">Nilai 70:</label>
                  <input type="number" id="krit2para4" name="krit2para4" oninput="hitungTotal()" value="{{ $edit->krit2para4 }}" >
              </div>
              <div class="input-field">
                  <label for="krit2para5">Nilai 65-60:</label>
                  <input type="number" id="krit2para5" name="krit2para5" oninput="hitungTotal()" value="{{ $edit->krit2para5 }}">
              </div>
              <div class="input-field">
                  <label for="krit2para6">Nilai 60-50:</label>
                  <input type="number" id="krit2para6" name="krit2para6" oninput="hitungTotal()" value="{{ $edit->krit2para6 }}" >
              </div>
              <div class="input-field">
                  <label for="krit2para7">Nilai 50:</label>
                  <input type="number" id="krit2para7" name="krit2para7" oninput="hitungTotal()" value="{{ $edit->krit2para7 }}" >
              </div>
              <div class="input-field">
                  <label for="scorepertanyaandanjawaban">Total Score Kriteria2:</label>
                  <input @disabled(true) type="text" id="scorepertanyaandanjawaban" name="scorepertanyaandanjawaban" readonly value="{{ $edit->scorepertanyaandanjawaban }}">
              </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">3. Aspek Kesesuaian dengan Tema</span>
                      <div class="fields">
                      <div class="input-field">
                        <label for="krit3para1">Nilai 100-90:</label>
                        <input type="number" id="krit3para1" name="krit3para1" oninput="hitungTotal()" value="{{ $edit->krit3para1 }}" >
                    </div>
                    <div class="input-field">
                        <label for="krit3para2">Nilai 90-80:</label>
                        <input type="number" id="krit3para2" name="krit3para2" oninput="hitungTotal()" value="{{ $edit->krit3para2 }}" >
                    </div>
                    <div class="input-field">
                        <label for="krit3para3">Nilai 80-75:</label>
                        <input type="number" id="krit3para3" name="krit3para3" oninput="hitungTotal()" value="{{ $edit->krit3para3 }}" >
                    </div>
                    <div class="input-field">
                      <label for="krit3para4">Nilai 70:</label>
                      <input type="number" id="krit3para4" name="krit3para4" oninput="hitungTotal()" value="{{ $edit->krit3para4 }}" >
                  </div>
                  <div class="input-field">
                      <label for="krit3para5">Nilai 65-60:</label>
                      <input type="number" id="krit3para5" name="krit3para5" oninput="hitungTotal()" value="{{ $edit->krit3para5 }}" >
                  </div>
                  <div class="input-field">
                      <label for="krit3para6">Nilai 60-50:</label>
                      <input type="number" id="krit3para6" name="krit3para6" oninput="hitungTotal()" value="{{ $edit->krit3para6 }}" >
                  </div>
                  <div class="input-field">
                      <label for="krit3para7">Nilai 50:</label>
                      <input type="number" id="krit3para7" name="krit3para7" oninput="hitungTotal()" value="{{ $edit->krit3para7 }}" >
                  </div>
                  <div class="input-field">
                      <label for="scoreaspekkesesuaian">Total Score Kriteria3:</label>
                      <input @disabled(true) type="text" id="scoreaspekkesesuaian" name="scoreaspekkesesuaian" readonly value="{{ $edit->scoreaspekkesesuaian }}">
                  </div>
                      </div>
                  </div>
          <div class="details ID">
              <span class="title">Hasil Total Score</span>
                  <div class="fields">
                  <div class="input-field">
                      <label for="total">Total Score Seluruh Kriteria:</label>
                      <input @disabled(true) type="text" id="total" name="total" readonly value="{{ $edit->total }}">
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
<!-- Script untuk memanggil file admin.js -->
<script>
document.getElementById('penilaianForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    Swal.fire({
        title: 'Success!',
        text: 'Data berhasil diperbarui!',
        icon: 'success',
        confirmButtonText: 'Lanjutkan'
    }).then((result) => {
        if (result.isConfirmed) {
            this.submit(); // Submit the form after SweetAlert confirmation
        }
    });
});
</script>
<script>
    function hitungTotal() {
      const form = document.getElementById("penilaianForm");
      const scorepemaparanmateri = parseFloat(form.scorepemaparanmateri.value) || 0;
      const scorepertanyaandanjawaban = parseFloat(form.scorepertanyaandanjawaban.value) || 0;
      const scoreaspekkesesuaian = parseFloat(form.scoreaspekkesesuaian.value) || 0;

      const total = scorepemaparanmateri + scorepertanyaandanjawaban + scoreaspekkesesuaian;
      form.total.value = total;
    }
  </script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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