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
    <link rel="stylesheet" href="../../../css/tambahsm.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

    <title>Caturnawa - Admin</title>
    <style>
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
    <nav class="nav container1">
        <div class="nav_menu" id="nav-menu">
            <i id="menu" class="fa fa-bars" aria-hidden="true"></i>

        </div>
        <div class="nav_logo" id="nav-logo">
            <img class="logo" src="../../img/smcaja.png" alt="Logo">
            <h2><a href="#" class="nav__logo"  style="margin-left: -3rem">Admin Short Movies </a></h2>
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
    <a href="{{url('/admin/semifinalSM')}}" id="semifinalLKTI" class="semifinal"><i class="fa fa-list-alt"></i> SemiFinal</a>
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
      <form action="/tambahsm/penyisihan" method="POST" enctype="multipart/form-data" id="penilaian" >
          @csrf
          <div class="form first">
            <div class="details personal">
                <span class="title">Data Penilaian</span>
                <div class="fields"> 
                  <div class="input-field">
                    <label for="juri">Nama Juri</label>
                    <select name="juri" id="juri" is-invalid  required>
                        <option selected>Pilih Juri</option>
                        <option>Daniel Wisnu Wardhana</option>
                        <option>Kusen Dony Hermansyah</option>
                        <option>Jentoni Pakpahan</option>
                    </select>
                    </div>
                  <div class="input-field">
                    <label for="namateam">Nama Team</label>
                    <select name="namateam" id="namateam" is-invalid required >
                      <option selected>Pilih Nama Team</option> 
                      @foreach ($peserta as $j)
                          <option >{{ $j->namateam }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="input-field">
                  <label for="peserta1">Nama Peserta 1 *Otomatis terisi</label>
                  <input type="text" id="peserta1" name="peserta1"  required>
              </div>
              <div class="input-field">
                <label for="peserta2">Nama Peserta 2 *Otomatis terisi</label>
                <input type="text" id="peserta2" name="peserta2"  required>
            </div>
            <div class="input-field">
              <label for="peserta3">Nama Peserta 3 *Otomatis terisi</label>
              <input type="text" id="peserta3" name="peserta3"  required>
          </div>
          <div class="input-field">
            <label for="peserta4">Nama Peserta 4 *Otomatis terisi</label>
            <input type="text" id="peserta4" name="peserta4"  required>
        </div>
        <div class="input-field">
          <label for="peserta5">Nama Peserta 5 *Otomatis terisi</label>
          <input type="text" id="peserta5" name="peserta5"  required>
      </div>
                    
                </div>
              </div>
          <div class="details personal">
          <span class="title">Kuantitatif </span>
              <div class="fields">
              <div class="input-field">
                <label for="skorkrit1">1.Ketepatan dan kesesuaian white balance</label>
                <input type="number" id="skorkrit1" name="skorkrit1" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
            </div>
            <div class="input-field">
              <label for="skorkrit2">2.Ketepatan dan kesesuaian angle, pergerakan kamera, dan komposisi</label>
              <input type="number" id="skorkrit2" name="skorkrit2" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
          </div>
          <div class="input-field">
            <label for="skorkrit3">3.Ketepatan dan kesesuaian key light</label>
            <input type="number" id="skorkrit3" name="skorkrit3" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
        </div>
        <div class="input-field">
          <label for="skorkrit4">4.Ketepatan dan kesesuaian teknik penataan lampu</label>
          <input type="number" id="skorkrit4" name="skorkrit4" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
      </div>
        <div class="input-field">
          <label for="skorkrit5">5. Kesesuaian film dengan tema</label>
          <input type="number" id="skorkrit5" name="skorkrit5" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
      </div>
      <div class="input-field">
        <label for="skorkrit6">6.Kesesuaian antara fakta dan realita dengan cerita yang diangkat dalam film</label>
        <input type="number" id="skorkrit6" name="skorkrit6" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
    </div>
    <div class="input-field">
      <label for="skorkrit7">7.Kreatifitas dalam menceritakan realita dari sudut pandang yang berbeda</label>
      <input type="number" id="skorkrit7" name="skorkrit7" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
  </div>
  <div class="input-field">
    <label for="skorkrit8">8.Seberapa orisinalitas cerita dalam script</label>
    <input type="number" id="skorkrit8" name="skorkrit8" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
</div>
<div class="input-field">
  <label for="skorkrit9">9.Kedalaman riset dan observasi dalam film</label>
  <input type="number" id="skorkrit9" name="skorkrit9" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
</div>
<div class="input-field">
  <label for="skorkrit10">10. Kesesuaian antara gambar dan suara serta estetika dalam film</label>
  <input type="number" id="skorkrit10" name="skorkrit10" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
</div>
  <div class="input-field">
    <label for="skorkrit11">11.Ketepatan dan kesesuaian teknik cutting</label>
    <input type="number" id="skorkrit11" name="skorkrit11" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
</div>
<div class="input-field">
  <label for="skorkrit12">12.Jumlah like video</label>
  <input type="number" id="skorkrit12" name="skorkrit12" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required>
</div>
              </div>
          </div>
                    <div class="details ID">
                      <span class="title">Catatan dan Total Score</span>
                          <div class="fields">
                            <div class="input-field">
                              <label for="note">Catatan</label>
                              <textarea id="note" name="note"  required ></textarea>
                          </div>
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
      const skorkrit11 = parseFloat(form.skorkrit11.value) || 0;
      const skorkrit12 = parseFloat(form.skorkrit12.value) || 0;

      const total = skorkrit1 + skorkrit2 + skorkrit3 + skorkrit4 + skorkrit5 + skorkrit6 + skorkrit7 + skorkrit8 + skorkrit9 + skorkrit10 + skorkrit11 + skorkrit12;
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
<script>
  const pesertaData = @json($peserta);
const namateamInput = document.getElementById('namateam'); // Elemen input teks

// Mengubah pesertaElements menjadi array of input elements
const pesertaInputs = [
    document.getElementById('peserta1'),
    document.getElementById('peserta2'),
    document.getElementById('peserta3'),
    document.getElementById('peserta4'),
    document.getElementById('peserta5')
];

namateamInput.addEventListener('input', () => {
    const searchTerm = namateamInput.value.toLowerCase();
    const selectedTeamMembers = pesertaData.filter(p => p.namateam.toLowerCase().includes(searchTerm));

    if (selectedTeamMembers.length > 0) {
        selectedTeamMembers.forEach((member, index) => {
            if (index < 5) {
                // Mengisi input teks langsung dengan nama peserta
                pesertaInputs[index].value = member.nama || member[`nama${index}`] || '';

                // Mengisi input nama1, nama2, nama3, nama4 secara terpisah (jika ada)
                if (member.nama) pesertaInputs[0].value = member.nama;
                if (member.nama1) pesertaInputs[1].value = member.nama1;
                if (member.nama2) pesertaInputs[2].value = member.nama2;
                if (member.nama3) pesertaInputs[3].value = member.nama3;
                if (member.nama4) pesertaInputs[4].value = member.nama4;
            }
        });
    } else {
        // Membersihkan input teks jika tidak ada anggota yang cocok
        pesertaInputs.forEach(input => {
            input.value = '';
        });
    }
});

</script> 
  
</body>
</html>