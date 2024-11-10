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
    <link rel="stylesheet" href="../../../css/tambahpenyisihan.css">
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
            <img class="logo" src="../../../img/kdbiaja.png" alt="Logo">
            <h2><a href="#" class="nav__logo"  style="margin-left: -3rem">Admin KDBI </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 0"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="#" id="menu"><img class="sidelogo" id="sidelogo" src="../../img/uf2.png" alt="Logo"></a>
    <a href="{{url('/admin/mainmenuKDBI')}}" id="beranda" class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('/admin/pesertaKDBI')}}" id="finalLKTI" class="final"><i class="fa fa-user-plus"></i> Data Peserta</a>
    <a href="{{url('/admin/penyisihanKDBI')}}" class="penyisihan"><i class="fa fa-users"></i> Penyisihan</a>
    <a href="{{route('kdbi.tampilkdbi3')}}" id="semifinalLKTI" class="semifinal"><i class="fa fa-list-alt"></i> SemiFinal</a>
    <a href="{{url('/admin/finalKDBI')}}" id="finalLKTI" class="final"><i class="fa fa-trophy"></i> Final</a>
    
    
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
      <header>Data Final</header>
      <form action="{{ route('kdbi.updatekdbi4', $edit->id) }}" method="POST" enctype="multipart/form-data"  id="penilaian" >
          @csrf
          <div class="form first">
            <div class="details personal">
                <span class="title">Data Penilaian</span>
                <div class="fields"> 
                    <div class="input-field">
                        <label for="ronde">Ronde </label>
                        <select name="ronde" id="ronde"  required value>
                            <option selected>{{ $edit->ronde }}</option>
                            <option>1</option>   
                            <option>2</option>  
                        </select>
                    </div>

                    <div class="input-field">
                        <label for="juri">Adjudicators </label>
                        <select name="juri" id="juri"  required >
                            <option selected>{{ $edit->juri }}</option>
                            <option>Insany Kausari</option> 
                            <option>Laila Amalia Khaeranni,S.Pd</option> 
                            <option>Purwo Besari, S.Pd.</option> 
                        </select>
                    </div>

                    <div class="input-field">
                        <label for="team">Nama Team</label>
                        <select name="team" id="team"  required >
                            <option selected>{{ $edit->team }}</option> 
                            @foreach ($peserta as $j)
                                <option >{{ $j->namateam }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="posisi">Posisi Team </label>
                        <select name="posisi" id="posisi"  required >
                            <option selected>{{ $edit->posisi }}</option> 
                            <option>OG</option> 
                            <option>CG</option> 
                            <option>OO</option> 
                            <option>CO</option> 
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="nama1">Nama Peserta 1  *Otomatis terisi</label>
                        <select name="nama1" id="nama1"  required >
                            <option selected>{{ $edit->nama1 }}</option> 
                          <option selected>{{ $edit->nama2 }}</option> 
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="posisi1">Posisi Peserta 1 </label>
                        <select name="posisi1" id="posisi1"  required >
                            <option selected>{{ $edit->posisi1 }}</option> 
                            <option>PM</option> 
                            <option>DPM</option> 
                            <option>MoG</option> 
                            <option>Whip Gov</option> 
                            <option>LoO</option> 
                            <option>DLoO</option> 
                            <option>MoO</option> 
                            <option>Whip Opp</option> 
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="nama2">Nama Peserta 2 *Otomatis terisi</label>
                        <select  name="nama2" id="nama2"  required >
                            <option selected>{{ $edit->nama2 }}</option> 
                          <option selected>{{ $edit->nama1 }}</option> 
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="posisi2">Posisi Peserta 2 </label>
                        <select name="posisi2" id="posisi2" required >
                            <option selected>{{ $edit->posisi2 }}</option> 
                            <option>PM</option> 
                            <option>DPM</option> 
                            <option>MoG</option> 
                            <option>Whip Gov</option> 
                            <option>LoO</option> 
                            <option>DLoO</option> 
                            <option>MoO</option> 
                            <option>Whip Opp</option> 
                        </select>
                    </div>
                </div>
              </div>
            <div class="details ID">
                <span class="title">Skor Individu dan Team</span>
                <div class="fields"> 
                    <div class="input-field">
                        <label for="skorindividu1">Score Peserta 1 </label>
                        <input name="skorindividu1" id="skorindividu1" type="number" placeholder="Score Individu Peserta" required oninput="hitungTotall()" value="{{ $edit->skorindividu1 }}">
                    </div>   
                    <div class="input-field">
                        <label for="skorindividu2">Score Peserta 2 </label>
                        <input name="skorindividu2" id="skorindividu2" type="number" placeholder=" Score Individu Peserta" required oninput="hitungTotall()" value="{{ $edit->skorindividu2 }}">
                    </div>  
                    <div class="input-field">
                        <label for="total">Score Team:</label>
                        <input @disabled(true) type="number" id="total" name="total" readonly value="{{ $edit->total }}">
                    </div>
                    
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
<script src="../../../js/adminKDBI.js"></script>
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
    function hitungTotall() {
      const form = document.getElementById("penilaian");
      const skorindividu1 = parseFloat(form.skorindividu1.value) || 0;
      const skorindividu2 = parseFloat(form.skorindividu2.value) || 0;

      const total = (skorindividu1 + skorindividu2) / 2;
      form.total.value = total;
    }
  </script>
<script>
    const pesertaData = @json($peserta); // Membuat variabel JS dari data peserta
    
    const namaPesertaSelect = document.getElementById('team');
    const universitySelect = document.getElementById('nama1');
    const universitySelect2 = document.getElementById('nama2');
    
    namaPesertaSelect.addEventListener('change', () => {
        const selectedPesertaId = namaPesertaSelect.value;
        const selectedPeserta = pesertaData.find(p => p.namateam == selectedPesertaId);
    
        universitySelect.innerHTML = ''; 
        universitySelect.options.add(new Option('Pilih Peserta', ''));
        universitySelect2.innerHTML = ''; 
        universitySelect2.options.add(new Option('Pilih Peserta', '')); 
        if (selectedPeserta) {
            universitySelect.options.add(new Option(selectedPeserta.nama, selectedPeserta.nama));
            universitySelect.value = selectedPeserta.nama;
            universitySelect2.options.add(new Option(selectedPeserta.nama1, selectedPeserta.nama1));
            universitySelect2.value = selectedPeserta.nama1; 
        }
    });
    </script>
</body>
</html>