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
          <img class="logo" src="../../../img/smcaja.png" alt="Logo">
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
                    <label for="juri">Nama Juri</label>
                    <select name="juri" id="juri" is-invalid  required>
                        <option selected>{{ $edit->juri }}</option>
                        <option>Daniel Wisnu Wardhana</option>
                        <option>Kusen Dony Hermansyah</option>
                        <option>Jentoni Pakpahan</option>
                    </select>
                    </div>
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
                  <label for="peserta1">Nama Peserta 1 *Otomatis terisi</label>
                  <input type="text" id="peserta1" name="peserta1"  required value="{{ $edit->peserta1 }}">
              </div>
              <div class="input-field">
                <label for="peserta2">Nama Peserta 2 *Otomatis terisi</label>
                <input type="text" id="peserta2" name="peserta2"  required value="{{ $edit->peserta2 }}">
            </div>
            <div class="input-field">
              <label for="peserta3">Nama Peserta 3 *Otomatis terisi</label>
              <input type="text" id="peserta3" name="peserta3"  required value="{{ $edit->peserta3 }}">
          </div>
          <div class="input-field">
            <label for="peserta4">Nama Peserta 4 *Otomatis terisi</label>
            <input type="text" id="peserta4" name="peserta4"  required value="{{ $edit->peserta4 }}">
        </div>
        <div class="input-field">
          <label for="peserta5">Nama Peserta 5 *Otomatis terisi</label>
          <input type="text" id="peserta5" name="peserta5"  required value="{{ $edit->peserta5 }}">
      </div>
                </div>
              </div>
              <div class="details personal">
                <span class="title">Kuantitatif </span>
                    <div class="fields">
                    <div class="input-field">
                      <label for="skorkrit1">1.Bentuk</label>
                      <input type="number" id="skorkrit1" name="skorkrit1" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required value="{{ $edit->skorkrit1}}" @error('skorkrit1') is-invalid @enderror>
                  @error('skorkrit1')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                  <div class="input-field">
                    <label for="krit1">Uraian 1</label>
                    <textarea id="krit1" name="krit1"  required >{{ $edit->krit1 }}</textarea>
                </div>
                  <div class="input-field">
                    <label for="skorkrit2">2.Visual</label>
                    <input type="number" id="skorkrit2" name="skorkrit2" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required value="{{ $edit->skorkrit2}}" @error('skorkrit2') is-invalid @enderror>
                @error('skorkrit2')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                <div class="input-field">
                  <label for="krit2">Uraian 2</label>
                  <textarea id="krit2" name="krit2"  required >{{ $edit->krit2 }}</textarea>
              </div>
                <div class="input-field">
                  <label for="skorkrit3">3.Sinematografi</label>
                  <input type="number" id="skorkrit3" name="skorkrit3" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required value="{{ $edit->skorkrit3}}" @error('skorkrit3') is-invalid @enderror>
             @error('skorkrit3')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
              <div class="input-field">
                <label for="krit3">Uraian 3</label>
                <textarea id="krit3" name="krit3"  required >{{ $edit->krit3 }}</textarea>
            </div>
              <div class="input-field">
                <label for="skorkrit4">4.Editing</label>
                <input type="number" id="skorkrit4" name="skorkrit4" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required value="{{ $edit->skorkrit4}}" @error('skorkrit4') is-invalid @enderror>
            @error('skorkrit4')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
            <div class="input-field">
                  <label for="krit4">Uraian 4</label>
                  <textarea id="krit4" name="krit4"  required >{{ $edit->krit4 }}</textarea>
              </div>
              <div class="input-field">
                <label for="skorkrit5">5.Suara</label>
                <input type="number" id="skorkrit5" name="skorkrit5" oninput="hitungTotal()" placeholder=" Masukkan Kuantitatif" required value="{{ $edit->skorkrit5}}" @error('skorkrit5') is-invalid @enderror>
            @error('skorkrit5')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
            <div class="input-field">
              <label for="krit5">Uraian 5</label>
              <textarea id="krit5" name="krit5"  required >{{ $edit->krit5 }}</textarea>
          </div>
                  
                    </div>
                </div>
                    <div class="details ID">
                      <span class="title">Total Score</span>
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

      const total = skorkrit1 + skorkrit2 + skorkrit3 + skorkrit4 + skorkrit5;
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