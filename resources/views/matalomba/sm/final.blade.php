<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== Icon Web ===============-->
      <link rel="icon"  href="../../img/uflogo.png">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../css/nowrap.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../css/navmenu.css">
      <link rel="stylesheet" href="../css/pagelomba.css">
      <link rel="stylesheet" href="../css/rank.css">

      <title>Caturnawa - SMScore</title>
   </head>
   <body>
      
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
         <nav class="nav container">
         <img src="../../img/smcaja.png" width="145" class="nav_logo"><h2><a href="{{url('/') }}" class="nav__logo" style="margin-left: -3rem">Caturnawa</a></h2>
         
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="margin-right: 25rem" class="nav__item">
						<li><a href="../locale/ind') }}" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
               <li class="nav__item">
                  <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
               </li>
      
               <li class="nav__item">
                  <a href="{{url('matalomba/edc') }}" class="nav__link">@lang('messages.peserta')</a>
               </li>
      
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
               
            </div>
         </nav>
      </header>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
      <!--==================== Tabel Skor ====================-->
<section id="skor">
    <div class="container" style="display: flex; justify-content: center;">
        <div style="width: 100%;">
            <h1 class="judul" style="margin-bottom: 80px; margin-top:0px">FINAL</h1>
            <div class="table-responsive" style="max-height: 300px; overflow-x: auto; overflow-y: auto; position: relative;">
                <table class="table table-bordered table-striped" style="min-width: 2400px; margin-bottom: 0; border-collapse: collapse;">
                    <thead style="position: sticky; top: -1; z-index: 10;">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Peserta</th>
                            <th scope="col">Nama Tim</th>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Penilaian Meliputi</th>
                            <th scope="col">Bobot Penilaian</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data dummy -->
                        @php
                        $dummyData = [
                            ['No' => 1, 'Peserta' => 'John Doe', 'Nama Tim' => 'UPN', 'Kriteria' => '80', 'Penilaianmeliputi'=> '80',  'Bobot Penilaian' => '80', 'Nilai'=> '80', 'Total'=>'100']
                            ['No' => 1, 'Peserta' => 'John Doe', 'Nama Tim' => 'UPN', 'Kriteria' => '80', 'Penilaianmeliputi'=> '80',  'Bobot Penilaian' => '80', 'Nilai'=> '80', 'Total'=>'100']
                            ['No' => 1, 'Peserta' => 'John Doe', 'Nama Tim' => 'UPN', 'Kriteria' => '80', 'Penilaianmeliputi'=> '80',  'Bobot Penilaian' => '80', 'Nilai'=> '80', 'Total'=>'100']
                            ['No' => 1, 'Peserta' => 'John Doe', 'Nama Tim' => 'UPN', 'Kriteria' => '80', 'Penilaianmeliputi'=> '80',  'Bobot Penilaian' => '80', 'Nilai'=> '80', 'Total'=>'100']
                            ['No' => 1, 'Peserta' => 'John Doe', 'Nama Tim' => 'UPN', 'Kriteria' => '80', 'Penilaianmeliputi'=> '80',  'Bobot Penilaian' => '80', 'Nilai'=> '80', 'Total'=>'100']

                        ];
                        $limitedData = array_slice($dummyData, 0, 10);
                        @endphp

                        @forelse($limitedData as $row)
                        <tr>
                            <td scope="row">{{ $row['No'] }}</td>
                            <td>{{ $row['Peserta'] }}</td>
                            <td>{{ $row['Nama Tim'] }}</td>
                            <td>{{ $row['Kriteria'] }}</td>
                            <td>{{ $row['Penilaian Meliputi'] }}</td>
                            <td>{{ $row['Bobot Penilaian'] }}</td>
                            <td>{{ $row['Nilai'] }}</td>
                            <td>{{ $row['Total'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">No User Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- Tampilkan pagination links jika diperlukan -->
            <!-- Simulasi pagination untuk data dummy -->
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item active">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<style>
   .table-bordered td, .table-bordered th {
       border: 2px solid black !important;
       text-align: center;
       vertical-align: middle;
   }
   thead th {
       background-color: #0d6efd !important;
       
   }
</style>
<div class="container-wrap">
	<section id="leaderboard">
		<nav class="ladder-nav">
			<div class="ladder-title">
			<h1>Standings</h1>
			</div>
			<div class="ladder-search">
				<input type="text" id="search-leaderboard" class="live-search-box" placeholder="Search Team, Player..." />
			</div>
		</nav>
		<table id="rankings" class="leaderboard-results" width="100%">
			<thead>
				<tr>
					<th>Rank</th>
					<th>Team</th>
					<th>Country</th>
					<th>P1</th>
					<th>P2</th>
          <th>Games Played</th>
					<th>PTS</th>
				</tr>
			</thead>
			<tbody>
				<!-- Load SCRIMcom Leaderboard Ranings -->
			</tbody>
		</table>
	</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
<script src="../../js/rank.js"></script>
      <script src="../../js/nav.js"></script>
   </body>
</html>