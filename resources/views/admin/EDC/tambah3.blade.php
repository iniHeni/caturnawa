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
            <img class="logo" src="../../../img/edcaja.png" alt="Logo">
            <h2><a href="#" class="nav__logo"  style="margin-left: -3rem">Admin EDC </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 0"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="#" id="menu"><img class="sidelogo" id="sidelogo" src="../../img/uf2.png" alt="Logo"></a>
    <a href="{{route('mainmenu.showedc')}}" id="beranda" class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('/admin/pesertaEDC')}}" id="finalLKTI" class="final"><i class="fa fa-user-plus"></i> Data Peserta</a>
    <a href="{{url('/admin/penyisihanEDC')}}" class="penyisihan"><i class="fa fa-users"></i> Penyisihan</a>
    <a href="{{route('edc.tampiledc3')}}" id="semifinalLKTI" class="semifinal"><i class="fa fa-list-alt"></i> SemiFinal</a>
    <a href="{{url('/admin/finalEDC')}}" id="finalLKTI" class="final"><i class="fa fa-trophy"></i> Final</a>
    
    
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
      <form action="/tambahedc3" method="POST" enctype="multipart/form-data"  id="penilaian" >
          @csrf
          @for ($i = 1; $i <= 4; $i++)
          <div class="form first">
              <div class="details personal">
                  <span class="title">Data Juri {{ $i }}</span>
                  <div class="fields">
                  <div class="input-field">
                      <label for="juri[{{ $i }}]">Adjudicators *data seterusnya akan otomatis</label>
                      <select name="juri[{{ $i }}]" id="juri_{{ $i }}" class="autofill" required>
                          <option selected>Pilih Adjudicators</option>
                          <option>Hezron Kowardi</option>
                        <option>Ahmad Kushay</option>
                        <option>Mouliza Kristhopher Donna</option>
                        <option>Elfa Norisda Aulianisa, M.Si</option>
                      </select>
                  </div>
                  
                  <div class="input-field">
                      <label for="ronde[{{ $i }}]">Ronde *data seterusnya akan otomatis</label>
                      <select name="ronde[{{ $i }}]" id="ronde_{{ $i }}" class="autofill" required>
                          <option selected>Pilih Ronde</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                      </select>
                  </div>
      
                  <div class="input-field">
                      <label for="room[{{ $i }}]">Room *data seterusnya akan otomatis</label>
                      <select name="room[{{ $i }}]" id="room_{{ $i }}" class="autofill" required>
                          <option selected>Breakout Room</option>
                          @for ($j = 1; $j <= 3; $j++)
                              <option value="{{ $j }}">{{ $j }}</option>
                          @endfor
                      </select>
                  </div>
                </div>
            </div>
            <div class="details personal">
                <span class="title">Data Penilaian Team {{ $i }}</span>
                <div class="fields">
                            <div class="input-field">
                                <label for="team[{{ $i }}]">Nama Team</label>
                                <select name="team[{{ $i }}]" id="team_{{ $i }}" required>
                                    <option selected>Pilih Team</option>
                                    @foreach ($peserta as $j)
                                        <option >{{ $j['team'] }}</option>
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="input-field">
                                <label for="posisi[{{ $i }}]">Posisi Team</label>
                                <select name="posisi[{{ $i }}]" id="posisi_{{ $i }}" required>
                                    <option selected>Pilih Posisi</option>
                                    <option value="OG">OG</option>
                                    <option value="CG">CG</option>
                                    <option value="OO">OO</option>
                                    <option value="CO">CO</option>
                                </select>
                            </div>
        
                            <div class="input-field">
                                <label for="nama1[{{ $i }}]">Nama Peserta 1 *otomatis dari namateam</label>
                                <input type="text" id="nama1_{{ $i }}" name="nama1[{{ $i }}]"  required>
                            </div>
    
                              <div class="input-field">
                                  <label for="posisi1[{{ $i }}]">Posisi Peserta 1</label>
                                  <select name="posisi1[{{ $i }}]" id="posisi1_{{ $i }}" required>
                                      <option selected>Pilih Posisi</option>
                                      <option value="PM">PM</option>
                                      <option value="DPM">DPM</option>
                                      <option value="MoG">MoG</option>
                                      <option value="Whip Gov">Whip Gov</option>
                                      <option value="LoO">LoO</option>
                                      <option value="DLoO">DLoO</option>
                                      <option value="MoO">MoO</option>
                                      <option value="Whip Opp">Whip Opp</option>
                                  </select>
                              </div>
          
                              <div class="input-field">
                                <label for="nama2[{{ $i }}]">Nama Peserta 2 *otomatis dari namateam</label>
                                <input type="text" id="nama2_{{ $i }}" name="nama2[{{ $i }}]"  required>
                            </div>
                            
                              <div class="input-field">
                                  <label for="posisi2[{{ $i }}]">Posisi Peserta 2</label>
                                  <select name="posisi2[{{ $i }}]" id="posisi2_{{ $i }}" required>
                                      <option selected>Pilih Posisi</option>
                                      <option value="PM">PM</option>
                                      <option value="DPM">DPM</option>
                                      <option value="MoG">MoG</option>
                                      <option value="Whip Gov">Whip Gov</option>
                                      <option value="LoO">LoO</option>
                                      <option value="DLoO">DLoO</option>
                                      <option value="MoO">MoO</option>
                                      <option value="Whip Opp">Whip Opp</option>
                                  </select>
                              </div>
          
                        </div>
                    </div>
        
                    <div class="details ID">
                        <span class="title">Skor Individu dan Team {{ $i }}</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="skorindividu1[{{ $i }}]">Score Peserta 1</label>
                                <input name="skorindividu1[{{ $i }}]" id="skorindividu1_{{ $i }}" type="number" placeholder="Score Individu Peserta" required oninput="hitungTotal({{ $i }})">
                            </div>
                            <div class="input-field">
                                <label for="skorindividu2[{{ $i }}]">Score Peserta 2</label>
                                <input name="skorindividu2[{{ $i }}]" id="skorindividu2_{{ $i }}" type="number" placeholder="Score Individu Peserta" required oninput="hitungTotal({{ $i }})">
                            </div>
                            <div class="input-field">
                                <label for="total[{{ $i }}]">Score Team:</label>
                                <input @disabled(true) type="number" id="total_{{ $i }}" name="total[{{ $i }}]" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
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

<script src="../../../js/adminEDC.js"></script>
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
   

   const formElements = document.querySelectorAll('.form'); 
   
   formElements.forEach((form, index) => {
       const namaPesertaSelect = form.querySelector(`#team_${index + 1}`);
       const nama1Input = form.querySelector(`#nama1_${index + 1}`); 
       const nama2Input = form.querySelector(`#nama2_${index + 1}`); 
       const skorIndividu1Input = form.querySelector(`#skorindividu1_${index + 1}`);
       const skorIndividu2Input = form.querySelector(`#skorindividu2_${index + 1}`);
       const totalInput = form.querySelector(`#total_${index + 1}`);
   
       
       function hitungTotal() {
           const skor1 = parseInt(skorIndividu1Input.value) || 0;
           const skor2 = parseInt(skorIndividu2Input.value) || 0;
           totalInput.value = (skor1 + skor2) / 2;
       }
   
       namaPesertaSelect.addEventListener('change', () => {
           const selectedPesertaId = namaPesertaSelect.value;
           const selectedPeserta = pesertaData.find(p => p.team == selectedPesertaId);
   
           if (selectedPeserta) {
               nama1Input.value = selectedPeserta.nama1; 
               nama2Input.value = selectedPeserta.nama2; 
           } else {
               nama1Input.value = ''; 
               nama2Input.value = '';
           }
   
           
           skorIndividu1Input.value = '';
           skorIndividu2Input.value = '';
           totalInput.value = '';
       });
   
       
       skorIndividu1Input.addEventListener('input', hitungTotal);
       skorIndividu2Input.addEventListener('input', hitungTotal);
   });
   
     </script>
     <script>
       document.addEventListener('DOMContentLoaded', function () {
          const formElements = document.querySelectorAll('.form');
          const autofillFields = ['juri', 'ronde', 'room']; 
      
          formElements.forEach((form, index) => {
              autofillFields.forEach(fieldType => {
                  const field = form.querySelector(`#${fieldType}_${index + 1}`);
                  if (field) {
                      field.addEventListener('change', () => {
                          const selectedValue = field.value;
      
                          for (let nextForm = index + 2; nextForm <= formElements.length; nextForm++) {
                              const nextField = document.getElementById(`${fieldType}_${nextForm}`);
                              if (nextField) {
                                  nextField.value = selectedValue;
                                  nextField.dispatchEvent(new Event('change'));
      
                                  
                                  nextField.disabled = false; 
                              }
                          }
                      });
                  }
              });
          });
      });
      
      
          </script>
</body>
</html>