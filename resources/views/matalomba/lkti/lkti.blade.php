
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== Icon Web ===============-->
      <link rel="icon"  href="../../../img/uf1.png">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="../../../css/swiper.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../../css/nowrap.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../../css/navmenulomba.css">
      <link rel="stylesheet" href="../../../css/pagelombalkti.css">

      <title>Caturnawa - SPC</title>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  background: center / contain no-repeat url(../img/mskt1.svg);

 
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
        <nav class="nav contnav">
        <img src="../../img/spcaja.png" width="140" class="nav_logo"><a href="{{url('matalomba/lkti') }}" class="nav__logo" ></a>
        <div class="nav__menu" id="nav-menu">
       <ul class="nav__list">
       <div style="left: 200px" class="nav__item">

						<li><a href="../../locale/ind" height="20"><img src="../../../img/ind.png"  /></a></li>
						<li><a href="../../locale/en" height="20"><img src="../../../img/eng.png" /></a></li>
					</div>
                    <li class="nav__item">
                        <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                     </li>
            
                     <li class="nav__item">
                        <a href="#peserta" class="nav__link">@lang('messages.peserta')</a>
                     </li>
            
                     <li class="nav__item">
                        <a href="#rank" class="nav__link">@lang('messages.round')</a>
                     </li>
                     
                     <li class="nav__item">
                        <a href="#juri" class="nav__link">@lang('messages.juri')</a>
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
      <img src="../img/mthri.svg" class="nav_logo1" style=" margin: 0 auto" ></img>
      <h1 class="judul">Scientific Paper Competition</h1>
      <p class="testing1">@lang('messages.teks')
        @lang('messages.teks1')</p>
        <div class="cont">
            <a class="gb" href="https://drive.google.com/file/d/1c-hKKz7ogZbnNX-KubDxaZFGJ_hUIJYf/view?usp=sharing">@lang('messages.gb')</a>
         </div>

 <!--==================== Participant ====================-->

      <section id="peserta">
      <h1 class="judul1">@lang('messages.pesertalomba')</h1>
      <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    @if($peserta->count() > 0)
                    @foreach($peserta as $rank => $data)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                             <img src="{{ $data->logo }}" alt="{{ $data->namateam }}" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">{{ $data->nama }}</h2>
                            <p class="description">{{ $data->instansi }}</p>
                            <button class="button"><a href="{{route('spc.detailpeserta', $data->id) }}">@lang('messages.view')</a></button>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
</section>
      <!--==================== Round ====================-->
      <section id="rank">
        <h1 class="judul">@lang('messages.babak')</h1>
        <div class="card-list">

          @php
              use Carbon\Carbon;
      
              $today = Carbon::now();
      
        
              $penyisihanStart = Carbon::createFromFormat('Y-m-d H:i:s', '2024-09-25 19:00:00', 'Asia/Jakarta');
              $penyisihanEnd = Carbon::parse('2026-12-29');
              $semiFinalDate = Carbon::createFromFormat('Y-m-d H:i:s', '2024-10-18 10:00:00', 'Asia/Jakarta');
              $finalDate = Carbon::parse('2023-09-07');
          @endphp
      

          <a href="#" class="card-item" onclick="
              event.preventDefault(); 
              @if (!$today->between($penyisihanStart, $penyisihanEnd)) 
      
                  Swal.fire({
                      title: '@lang('messages.sweet1')',
                      text: '@lang('messages.sweet2')',
                      icon: 'info'
                  });
              @else 
       
                  window.location.href = '{{url('matalomba/lkti/penyisihan') }}'; 
              @endif
          ">
              <img src="../../img/spc.png" alt="Card Image">
              <span class="developer">@lang('messages.penyisihan')</span>
              <h3>@lang('messages.oopen')<br>25 September 2024</h3>
              <div class="arrow">
                  <i class="fas fa-arrow-right card-icon" id="penyisihan"></i>
              </div>
          </a>
      
      
          <a href="#" class="card-item" onclick="
              event.preventDefault();
              @if (!$today->greaterThanOrEqualTo($semiFinalDate))
                  Swal.fire('@lang('messages.sweet1')', '@lang('messages.sweet3')', 'info');
              @else
                  window.location.href = '{{url('matalomba/lkti/sfinal') }}';
              @endif
          ">
              <img src="../../img/spc.png" alt="Card Image">
              <span class="designer">Semifinal</span>
              <h3>@lang('messages.oopen')<br>18 @lang('messages.ok1') 2024</h3>
              <div class="arrow">
                  <i class="fas fa-arrow-right card-icon" id="final"></i>
              </div>
          </a>
      
     
          <a href="#" class="card-item" onclick="
              event.preventDefault();
              @if (!$today->greaterThanOrEqualTo($finalDate))
                  Swal.fire('@lang('messages.sweet1')', '@lang('messages.sweet4')', 'info');
              @else
                  window.location.href = '{{url('matalomba/lkti/final') }}';
              @endif
          ">
              <img src="../../img/spc.png" alt="Card Image">
              <span class="editor">Final</span>
              <h3>@lang('messages.oopen')<br>7 November 2024</h3>
              <div class="arrow">
                  <i class="fas fa-arrow-right card-icon" id="final"></i>
              </div>
          </a>
      </div>
       
        </section>
<!--==================== Jury ====================-->
  <!--==================== Jury ====================-->
<section id="juri">
    <div class="main">
            <div class="title">@lang('messages.jury')</div>
    
            <div class="card_container">
    
                <div class="card">
                    <div class="round_box"></div>
                    <div class="img_box">
                        <img src="../../img/jurispcbaru1.jpeg" alt="">
                    </div>
    
                    <div class="user_content1">
                        <h5 class="name">Efriza, S.I.P., M.Si.</h5>
                        <p class="post">@lang('messages.jurispcposisi1')</p>
                        <p class="about">@lang('messages.jurispcbio1')</p>
                    </div>
                </div>
    
                <div class="card">
                    <div class="squareBox"></div>
                    <div class="round_box"></div>
                    <div class="img_box">
                        <img src="../../img/jurispcbaru2.jpeg" alt="">
                    </div>
    
                    <div class="user_content2">
                        <h5 class="name">Desfara Anggreani </h5>
                        <p class="post">@lang('messages.jurispcposisi2')</p>
                        <p class="about">@lang('messages.jurispcbio2')</p>
                    </div>
                </div>
    
					 <div class="card">
                    <div class="squareBox"></div>
                    <div class="round_box"></div>
                    <div class="img_box">
                        <img src="../../img/jurispcc3.jpg" alt="">
                    </div>
    
                    <div class="user_content3">
                        <h5 class="name">Agung Iswadi,<br>S.Si., M.Sc, Ph.D.</h5>
                        <p class="post">@lang('messages.jurispcposisi3')</p>
                        <p class="about">@lang('messages.jurispcbio3')</p>
                    </div>
                </div> 

                <!-- <div class="card">
                    <div class="squareBox"></div>
                    <div class="round_box"></div>
                    <div class="img_box">
                        <img src="../../img/jurispc3.png" alt="">
                    </div>
    
                    <div class="user_content4">
                        <h5 class="name">Desfara Anggreani</h5>
                        <p class="post">@lang('messages.jurispcposisi4')</p>
                        <p class="about">@lang('messages.jurispcbio4')</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <button class="floating-button" onclick="window.history.back();">
         <i class="fa fa-arrow-left"></i><span> @lang('messages.back')</span>
      </button>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<script src="../../../js/swiper.js"></script>
<script src="../../../js/car2.js"></script>
      <script src="../../../js/nav.js"></script>
    </script>

   </body>

  

     <script src="../../js/SM.js"></script>
</html>
