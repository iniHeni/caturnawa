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
    <a href="{{url('/admin/mainmenuSM1')}}" id="beranda" class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('/admin/pesertaSM')}}" id="finalLKTI" class="final"><i class="fa fa-user-plus"></i> Data Peserta</a>
    <a href="{{url('/admin/penyisihanSM')}}" class="penyisihan"><i class="fa fa-users"></i> Penyisihan</a>
    <a href="{{url('/admin/finalSM')}}" id="final" class="final"><i class="fa fa-trophy"></i> Final</a>
    
    
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
      <form action="{{ route('sm.updatep', $edit->id) }}" method="POST" enctype="multipart/form-data" id="penilaian" >
          @csrf
          <div class="form first">
            <div class="details personal">
                <span class="title">Data Penilaian</span>
                <div class="fields"> 
                  <div class="input-field">
                    <label for="namateam">Nama Team</label>
                    <select name="namateam" id="namateam" is-invalid required >
                      <option selected>{{ $edit->namateam }}</option> 
                      @foreach ($peserta as $j)
                          <option >{{ $j->namateam }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="input-field">
                  <label for="peserta1">Nama Peserta 1</label>
                  <select name="peserta1" id="peserta1" is-invalid required >
                    <option  selected>{{ $edit->peserta1 }}</option> 
                </select>
              </div>
              <div class="input-field">
                <label for="peserta2">Nama Peserta 2</label>
                <select name="peserta2" id="peserta2" is-invalid required >
                  <option selected>{{ $edit->peserta2 }}</option> 
              </select>
            </div>
            <div class="input-field">
              <label for="peserta3">Nama Peserta 3</label>
              <select name="peserta3" id="peserta3" is-invalid required >
                <option selected>{{ $edit->peserta3 }}</option> 
            </select>
          </div>
          <div class="input-field">
            <label for="peserta4">Nama Peserta 4</label>
            <select name="peserta4" id="peserta4" is-invalid required >
              <option selected>{{ $edit->peserta4 }}</option> 
          </select>
        </div>
        <div class="input-field">
          <label for="peserta5">Nama Peserta 5</label>
          <select name="peserta5" id="peserta5" is-invalid required >
            <option selected>{{ $edit->peserta5 }}</option> 
        </select>
                    <div class="input-field">
                      <label for="juri">Nama Juri</label>
                      <select name="juri" id="juri" is-invalid  required>
                          <option selected>{{ $edit->juri }}</option>
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
                <label for="skorkrit1">Kuantitatif:</label>
                <input type="number" id="skorkrit1" name="skorkrit1" oninput="hitungTotal()" value="{{ $edit->skorkrit1 }}">
            </div>
            <div class="input-field">
              <label for="krit1">Kualitatif</label>
              <input name="krit1" id="krit1" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit1 }}">
          </div>
              </div>
          </div>
          <div class="details personal">
              <span class="title">2. Kreatifitas dalam Menceritakan realita dari sudut pandang Berbeda</span>
                  <div class="fields">
                    <div class="input-field">
                      <label for="skorkrit2">Kuantitatif:</label>
                      <input type="number" id="skorkrit2" name="skorkrit2" oninput="hitungTotal()" value="{{ $edit->skorkrit2 }}">
                  </div>
                  <div class="input-field">
                    <label for="krit2">Kualitatif</label>
                    <input name="krit2" id="krit2" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit2 }}">
                </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">3. Kejelasan pesan yang disampaikan melalui film yang dibuat</span>
                      <div class="fields">
                        <div class="input-field">
                          <label for="skorkrit3">Kuantitatif:</label>
                          <input type="number" id="skorkrit3" name="skorkrit3" oninput="hitungTotal()" value="{{ $edit->skorkrit3 }}">
                      </div>
                      <div class="input-field">
                        <label for="krit3">Kualitatif</label>
                        <input name="krit3" id="krit3" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit3 }}">
                    </div>
                      </div>
                  </div>
                  <div class="details personal">
                    <span class="title">4. Kesesuaian antara judul film dengan Cerita Pesan yang akan disampaikan</span>
                        <div class="fields">
                          <div class="input-field">
                            <label for="skorkrit4">Kuantitatif:</label>
                            <input type="number" id="skorkrit4" name="skorkrit4" oninput="hitungTotal()" value="{{ $edit->skorkrit4 }}">
                        </div>
                        <div class="input-field">
                          <label for="krit4">Kualitatif</label>
                          <input name="krit4" id="krit4" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit4 }}">
                      </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">5. Kedalaman riset dan observasi dalam film</span>
                            <div class="fields">
                              <div class="input-field">
                                <label for="skorkrit5">Kuantitatif:</label>
                                <input type="number" id="skorkrit5" name="skorkrit5" oninput="hitungTotal()" value="{{ $edit->skorkrit5 }}">
                            </div>
                            <div class="input-field">
                              <label for="krit5">Kualitatif</label>
                              <input name="krit5" id="krit5" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit5 }}">
                          </div>
                            </div>
                        </div>
                        <div class="details personal">
                            <span class="title">6. Kesesuaian antara fakta dan realita dengan cerita yang diangkat dalam film</span>
                                <div class="fields">
                                  <div class="input-field">
                                    <label for="skorkrit6">Kuantitatif:</label>
                                    <input type="number" id="skorkrit6" name="skorkrit6" oninput="hitungTotal()" value="{{ $edit->skorkrit6 }}">
                                </div>
                                <div class="input-field">
                                  <label for="krit6">Kualitatif</label>
                                  <input name="krit6" id="krit6" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit6 }}">
                              </div>
                                </div>
                            </div>
                    <div class="details personal">
                    <span class="title">7. Kreatifitas dalam pengambilan gambar yang meliputi sudut kamera, pencahayaan, ruang, dan waktu</span>
                        <div class="fields">
                          <div class="input-field">
                            <label for="skorkrit7">Kuantitatif:</label>
                            <input type="number" id="skorkrit7" name="skorkrit7" oninput="hitungTotal()" value="{{ $edit->skorkrit7 }}">
                        </div>
                        <div class="input-field">
                          <label for="krit7">Kualitatif</label>
                          <input name="krit7" id="krit7" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit7 }}">
                      </div>
                        </div>
                    </div>
                      <div class="details personal">
                        <span class="title">8. Kreatifitas dalam menggunakan unsur audio untuk memberikan informasi secara jelas serta memberikan suasana (mood) dalam film</span>
                            <div class="fields">
                              <div class="input-field">
                                <label for="skorkrit8">Kuantitatif:</label>
                                <input type="number" id="skorkrit8" name="skorkrit8" oninput="hitungTotal()" value="{{ $edit->skorkrit8 }}">
                            </div>
                            <div class="input-field">
                              <label for="krit8">Kualitatif</label>
                              <input name="krit8" id="krit8" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit8 }}">
                          </div>
                            </div>
                      </div>
                          <div class="details personal">
                            <span class="title">9. Kreatifitas dalam memadukan unsur video dan audio dalam menyusun alur cerita berdasarkan informasi dan realita yang diperoleh menjadi suatu yang menarik untuk ditonton</span>
                                <div class="fields">
                                  <div class="input-field">
                                    <label for="skorkrit9">Kuantitatif:</label>
                                    <input type="number" id="skorkrit9" name="skorkrit9" oninput="hitungTotal()" value="{{ $edit->skorkrit9 }}">
                                </div>
                                <div class="input-field">
                                  <label for="krit9">Kualitatif</label>
                                  <input name="krit9" id="krit9" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit9 }}">
                              </div>
                                </div>
                          </div>
                              <div class="details personal">
                                <span class="title">10. Kesesuaian antara gambar dan suara serta estetika dalam film</span>
                                    <div class="fields">
                                      <div class="input-field">
                                        <label for="skorkrit10">Kuantitatif:</label>
                                        <input type="number" id="skorkrit10" name="skorkrit10" oninput="hitungTotal()" value="{{ $edit->skorkrit10 }}">
                                    </div>
                                    <div class="input-field">
                                      <label for="krit10">Kualitatif</label>
                                      <input name="krit10" id="krit10" type="text" placeholder="Masukkan Kualitatif" required value="{{ $edit->krit10 }}">
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
      const skorkrit1 = parseFloat(form.skorkrit1.value) || 0;
      const skorkrit2 = parseFloat(form.skorkrit2.value) || 0;
      const skorkrit3 = parseFloat(form.skorkrit3.value) || 0;
      const skorkrit4 = parseFloat(form.skorkrit4.value) || 0;
      const skorkrit5 = parseFloat(form.skorkrit5.value) || 0;
      const skorkrit6 = parseFloat(form.skorkrit6.value) || 0;
      const skorkrit7 = parseFloat(form.skorkrit7.value) || 0;
      const skorkrit8 = parseFloat(form.skorkrit8.value) || 0;
      const skorkrit9 = parseFloat(form.skorkrit9.value) || 0;
      const skorkrit10 = parseFloat(form.skorkrit10.value) || 0;

      const total = skorkrit1 + skorkrit2 + skorkrit3 + skorkrit4 + skorkrit5 + skorkrit6 + skorkrit7 + skorkrit8 + skorkrit9 + skorkrit10;
      form.total.value = total;
    }
  </script>
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