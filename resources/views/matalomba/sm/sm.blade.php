
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== Icon Web ===============-->
      <link rel="icon"  href="../../img/uf1.png">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="../../css/swiper.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../css/nowrap.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../css/navmenulomba.css">
      <link rel="stylesheet" href="../../css/pagelombasm.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <title>Caturnawa - ShortMovie</title>
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
   background: center / contain no-repeat url(../../img/loader.gif);
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
            <img src="../../img/smcaja.png" width="175" class="nav_logo"><a href="{{url('matalomba/shortmovie') }}" class="nav__logo" ></a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
               <div style="margin-right: 17rem" class="nav__item">
						<li><a href="../locale/ind" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
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
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 0"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    <h1 class="judul">@lang('messages.sm')</h1>
      <p class="testing1">@lang('messages.teks') <br> 
                        @lang('messages.teks1')</p>
                        
      <!--==================== Peserta Lomba ====================-->
      <section id="peserta">
      <h1 class="judul">@lang('messages.pesertalomba')</h1>
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
                            <h2 class="name">{{ $data->instansi }}</h2>
                            <p class="description">{{ $data->namateam }}</p>
                            <button class="button"><a href="{{route('sm.detailpeserta', $rank + 1) }}">@lang('messages.view')</a></button>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
</section>
      <!--==================== Babak ====================-->
      <section id="rank">
        <h1 class="judul">@lang('messages.babak')</h1>
        <div class="card-list">
            <a href="{{url('matalomba/sm/penyisihan') }}" class="card-item">
                <img src="../../img/sm1.png" alt="Card Image">
                <span class="developer">@lang('messages.penyisihan')</span>
                <h3>@lang('messages.dilaksanakan')<br>27 - 28 September 2024
                </h3>
                <div class="arrow">
                    <i class="fas fa-arrow-right card-icon" id="penyisihan"></i>
                </div>
            </a>
            <a href="{{url('matalomba/sm/sfinal') }}" class="card-item">
              <img src="../../img/sm1.png" alt="Card Image">
              <span class="designer">Semifinal</span>
              <h3>@lang('messages.dilaksanakan')<br>30 September 2024
              </h3>
              <div class="arrow">
                  <i class="fas fa-arrow-right card-icon" id="final"></i>
              </div>
          </a>
                <a href="{{url('matalomba/sm/final') }}" class="card-item">
                    <img src="../../img/sm1.png" alt="Card Image">
                    <span class="editor">Final</span>
                    <h3>@lang('messages.dilaksanakan')<br>15 Oktober 2024</h3>
                    <div class="arrow">
                        <i class="fas fa-arrow-right card-icon" id="final"></i>
                    </div>
                </a>
            </div>
        </section>
      <!--==================== Juri ====================-->
      <section id="juri">
        <div class="main">
                <div class="title">@lang('messages.jury')</div>
        
                <div class="card_container">
        
                    <div class="card">
                        <div class="round_box"></div>
                        <div class="img_box">
                            <img src="../../img/jurism.jpg" alt="">
                        </div>
        
                        <div class="user_content1">
                            <h5 class="name">Daniel Wisnu Wardhana</h5>
                            <p class="post">@lang('messages.jurismposisi1')</p>
                            <p class="about">@lang('messages.jurismbio1')</p>
                            <a href="https://www.linkedin.com/in/raden-wardana-a737992b9/?jobid=1234" class="icon facebook">
                                <span><i class="fa-brands fa-linkedin"></i></span>
                             </a>
                        </div>
                    </div>
        
                    <div class="card">
                        <div class="squareBox"></div>
                        <div class="round_box"></div>
                        <div class="img_box">
                            <img src="../../img/jurism1.jpg" alt="">
                        </div>
        
                        <div class="user_content2">
                            <h5 class="name">Kusen Dony Hermansyah</h5>
                            <p class="post">@lang('messages.jurismposisi2')</p>
                            <p class="about">@lang('messages.jurismbio2')</p>
                        </div>
                    </div>
        
                    <div class="card">
                        <div class="squareBox"></div>
                        <div class="round_box"></div>
                        <div class="img_box">
                            <img src="../../img/jurism3.jpeg" alt="">
                        </div>
        
                        <div class="user_content3">
                            <h5 class="name">Rita Sri Hastuti</h5>
                            <p class="post">@lang('messages.jurismposisi3')</p>
                            <p class="about">@lang('messages.jurismbio3')</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>





<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script>function removeLoader() {
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
      });</script>
    </body>
    <!-- JavaScript -->
</html>

<script src="../../js/swiper.js"></script>
<script src="../../js/car2.js"></script>
      <script src="../../js/nav.js"></script>
      <script type="text/javascript">
        const penyisihan = document.getElementById('penyisihan');
        const final = document.getElementById('final');
        
        penyisihan.addEventListener('click', () => {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Penyisihan belum tersedia!',
          });
        });
       
       final.addEventListener('click', () => { // Add event listener for UploadSPC
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Final belum tersedia!',
          });
        });
           </script>
   </body>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../js/nav.js"></script>
    <script type="text/javascript">
       $(function() {
           $(this).bind("contextmenu", function(e) {
               e.preventDefault();
           });
       }); 
       </script>
       <script type="text/JavaScript"> 
           function killCopy(e){ return false } 
           function reEnable(){ return true } 
           document.onselectstart=new Function ("return false"); 
           if (window.sidebar)
           { 
               document.onmousedown=killCopy; 
               document.onclick=reEnable; 
           } 
       </script>
       <script type="text/Javascript">
       $(document).keydown(function(event){
     if(event.keyCode==123){
         return false;
     }
     else if (event.ctrlKey && event.shiftKey && event.keyCode==73){        
              return false;
     }
 });
     </script>
</html>