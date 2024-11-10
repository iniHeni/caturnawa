<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== Icon Web ===============-->
    <link rel="icon" href="../../img/uf1.png">
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
    <link rel="stylesheet" href="../../../css/pagelomba.css">
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
            <img class="logo" src="../../img/smcaja.png" alt="Logo">
            <h2><a href="#" class="nav__logo"  style="margin-left: -3rem">Admin Short Movies </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
  <a href="#" id="menu"><img class="sidelogo" id="sidelogo" src="../../../img/uf2.png" alt="Logo"></a>
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
<div id="data-container">
    <section id="skor">
        <div class="container" style="display: flex; justify-content: center;">
            <div style="width: 100%;">
                <h1 class="judul" style="color: wheat">Leaderboard </h1>
                <div class="table-responsive" style="max-height: 1000px; overflow-x: auto; overflow-y: auto; position: relative;">
                    <table class="table table-bordered " style="min-width: 1000px; margin-bottom: 0; border-collapse: collapse;">
                      <thead style="position: sticky; top: -1; z-index: 10;">
                        <tr>
                            <th scope="col">@lang('messages.team2')</th>
                            <th scope="col">@lang('messages.team1')</th>
                            <th scope="col">Rank</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($final as $rank=>$data)
                      <tr>
                        <td>{{ $data->namateam }}</td>
                        <td>{{ $data->total}}</td>
                        <td style="font-size: 20px;"> 
                          @if($rank == 0) 🥇 @elseif($rank == 1) 🥈 @elseif($rank == 2) 🥉 @else Jury Mention @endif
                      </td> 
                        
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
    @php
use Carbon\Carbon;

$today = Carbon::now();


$tambahedit = Carbon::parse('2024-05-28');

@endphp
    <section id="rank">
        <div class="container" style="display: flex; justify-content: center;">
            <div style="width: 100%;">
        <h1 class="welcome" style="margin-bottom: 1rem; margin-top:auto">Final</h1>
        <p><a class="add" href="#" style="color: white" onclick="
            event.preventDefault();
            @if (!$today->greaterThanOrEqualTo($tambahedit))
                Swal.fire('Ditutup', 'Pengeditan Nilai sudah ditutup,jika ada kendala silahkan menghubungi pihak terkait', 'info');
            @else
                window.location.href = '{{ route('sm.pesertaf') }}';
            @endif
        ">Tambah Penilaian</a></p>
        @if($final->count() > 0)
      <div class="card-list">
          @foreach($final as $rank => $data)
              <a href="{{ route('sm.detailfadmin', $data->namateam) }}" class="card-item"> 
                  <img src="{{ asset($data->logo) }}" class="card-image" loading="lazy">
                  <h3>{{ $data->namateam }}</h3> 
                  <div class="arrow">
                      <i class="card-icon">Detail</i>
                  </div>
              </a>
          @endforeach
      </div>
            </div>
        </div>
  @endif

    </section>
    <style>
      .table-bordered td,
      .table-bordered th {
          border: 2px solid #dee2e6 !important;
          text-align: center;
          vertical-align: middle;
      }

      thead th {
          background-color: #dee2e6 !important;
      }
      a[href^="mailto:"] {
color:#dee2e6 ; 
text-decoration: underline;
}

  </style>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit(); 
            }
        });
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


