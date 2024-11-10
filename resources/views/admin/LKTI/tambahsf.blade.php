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
    <link rel="stylesheet" href="../../../css/navadmin.css">
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
  width: 40%;
  height: 40%;
  background: center / contain no-repeat url(../../../img/mskt1.svg);

 
  animation: blink 2s infinite; 
}

@keyframes blink { 
  0% { opacity: 1; } 
  50% { opacity: 0.2; } 
  100% { opacity: 1; } 
}
     </style>
</head>
<body>
    <div id="loadingDiv">
        <div class="loader"></div>
      </div>
<!--==================== Navbar ====================-->
<header class="header" id="header">
    <nav class="nav container1">
        <div class="nav_menu" id="nav-menu">
            <i id="menu" class="fa fa-bars" aria-hidden="true"></i>

        </div>
        <div class="nav_logo" id="nav-logo">
            <img class="logo" src="../../img/spcaja.png" alt="Logo">
            <h2><a href="#" class="nav__logo"  style="margin-left: -3rem">Admin SPC </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 0"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="#" id="menu"><img class="sidelogo" id="sidelogo" src="../../img/spcaja.png" alt="Logo"></a>
    <a href="{{url('/admin/mainmenuLKTI1')}}" id="beranda" class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('/admin/pesertaLKTI1')}}" id="finalLKTI" class="final"><i class="fa fa-user-plus"></i> Data Peserta</a>
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



<div style="margin-bottom: 20rem"></div>

<section style="height: 60rem" >
    <div class="konten">
      <header>Data Semifinal</header>
      <form action="/tambah/sf" method="POST" id="penilaian" >
          @csrf
          <div class="form first">
              <div class="details personal">
                  <span class="title">Data Penilaian</span>
                  <div class="fields"> 
                    <div class="input-field">
                        <label for="namapeserta">Nama Peserta</label>
                        <select name="namapeserta" id="namapeserta" is-invalid required >
                            <option selected>Pilih Peserta</option> 
                            @foreach ($peserta as $j)
                                <option >{{ $j->namapeserta }}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="input-field">
                        <label for="juri">Nama Juri</label>
                        <select name="juri" id="juri" is-invalid  required>
                            <option selected>Pilih Juri</option>
                            <option>Efriza S.I.P. M.Si</option>
                            <option>Desfara Anggreani</option>
           					<option>Agung Iswadi,S.Si., M.Sc, Ph.D.</option>
                        </select>
                        </div>
                  </div>
                </div>
            <div class="details personal">
            <span class="title">1. Penyajian Karya Tulis ilmiah</span>
                <div class="fields">
                <div class="input-field">
                  <label for="scorepenyajian">Score:</label>
                  <input type="number" id="scorepenyajian" name="scorepenyajian" oninput="hitungTotall()" @error('scorepenyajian') is-invalid @enderror required>
                   @error('scorepenyajian')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
              </div>
              <div class="input-field">
                <label for="penyajian">Kualitatif:</label>
                <textarea type="text" id="penyajian" name="penyajian" required></textarea>
            </div>
            </div>
            </div>
            <div class="details personal">
                <span class="title">2.Substansi KaryaTulis</span>
                    <div class="fields">
                    <div class="input-field">
                      <label for="scoresubs">Score:</label>
                      <input type="number" id="scoresubs" name="scoresubs" oninput="hitungTotall()" @error('scoresubs') is-invalid @enderror required>
                      @error('scoresubs')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                  </div>
                  <div class="input-field">
                    <label for="subs">Kualitatif:</label>
                    <textarea type="text" id="subs" name="subs" required></textarea>
                </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">3. Kualitas Karya Tulis Ilmiah</span>
                        <div class="fields">
                        <div class="input-field">
                          <label for="scorekualitas">Score:</label>
                          <input type="number" id="scorekualitas" name="scorekualitas" oninput="hitungTotall()" @error('scorekualitas') is-invalid @enderror  required>
                          @error('scorekualitas')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                        <label for="kualitas">Kualitatif:</label>
                        <textarea type="text" id="kualitas" name="kualitas" required></textarea>
                    </div>
                        </div>
                </div>
            <div class="details ID">
                <span class="title">Hasil Total Score</span>
                    <div class="fields">
                    <div class="input-field">
                        <label for="total">Total Score Seluruh Kriteria:</label>
                        <input @disabled(true) type="text" id="total" name="total" readonly>
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
<script>
    function hitungTotall() {
      const form = document.getElementById("penilaian");
      const scorepenyajian = parseFloat(form.scorepenyajian.value) || 0;
      const scoresubs = parseFloat(form.scoresubs.value) || 0;
      const scorekualitas = parseFloat(form.scorekualitas.value) || 0;

      const total = scorepenyajian + scoresubs + scorekualitas;
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