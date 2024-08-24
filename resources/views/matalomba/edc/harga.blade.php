<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta property="og:title" content="Caturnawa - UNAS FEST 2024">
      <meta property="og:image" content="{{ asset('img/uf2.png') }}">  
      <!--=============== Icon Web ===============-->
      <link rel="icon" href="img/uf1.png">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <!--=============== CARAOUSEL ===============-->
	   <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	   <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="css/harga.css">
      <link rel="stylesheet" href="css/back.css">
      <link rel="stylesheet" href="css/navmenudbt.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


      <title>Caturnawa</title>
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
        <img src="img/edcaja.png" width="145" class="nav_gmbar" ></img>
           <h2><a href="{{url('/') }}" class="nav__logo" ></a></h2>

           <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <div style="left: 200px" class="nav__item">
                        <li><a href="locale/ind"><img src="img/ind.png"  /></a></li>
                        <li><a href="locale/en"><img src="img/eng.png" /></a></li>
                    </div>
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                  </li>
 
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">@lang('messages.jenislomba')</a>
                  </li>
 
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">@lang('messages.kontakkami')</a>
                  </li>
               </ul>

              <!-- Close a -->
              <div class="nav__close" id="nav-close">
                 <i class="ri-close-line"></i>
              </div>
           </div>

           <div class="nav__actions">
              <!-- Toggle a -->
              <div class="nav__toggle" id="nav-toggle">
                 <i class="ri-menu-line"></i>
              </div>
              
           </div>
        </nav>
     </header>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
      
<!--==================== Period Tiket ====================-->
<div class="container1">
  <h1 class="upcomming">@lang('messages.harga')</h1>
  
  <div class="item">
    <span class="up-border"></span>
      <span class="down-border"></span>
    <div class="item-right">
      <span class="leftup-border"></span>
      <span class="leftdown-border"></span>
      <h2 class="num">23 - 28 @lang('messages.tgl')</h2>
      
      <span class="up-border"></span>
      <span class="down-border"></span>
    </div>
    
    <div class="item-left">
      <p class="event">@lang('messages.tahap')</p>
      <h2 class="title">@lang('messages.Rp5')</h2>
      <p style="margin-bottom: 15px;" >* @lang('messages.khusus') </p>
      <div class="sce">
        <div class="icon">
          <i class="fa fa-table"></i>
        </div>
        <p>English Debate Competition</p>
      </div>

      <div class="fix"></div>

      <div class="loc">
        <div class="icon">
          <i class="fa fa-map-marker"></i>
        </div>
        <p>Jl. Sawo Manila No.61, RT.14/RW.7, Pejaten Barat, Ps. Minggu, Kota Jakarta Selatan,<br>Daerah Khusus Ibukota Jakarta 12520</p>
      </div>

      <div class="fix"></div>
      <button class="tickets" >@lang('messages.tutup')</button>
      <button class="daftar" >@lang('messages.Daftar')</button>
      <button class="daftar1" >@lang('messages.unass')</button>
    </div>
  </div>
  
  <div class="item">
    <span class="up-border"></span>
      <span class="down-border"></span>
    <div class="item-right">
      <span class="leftup-border"></span>
      <span class="leftdown-border"></span>
      <h2 class="num">29 @lang('messages.tgl') - 11 @lang('messages.tgl1') </h2>
      <!-- <p class="day">2024</p> -->
      <span class="up-border"></span>
      <span class="down-border"></span>
    </div>
    
    <div class="item-left">
      <p class="event">@lang('messages.tahap1')</p>
      <h2 class="title">@lang('messages.Rp6')</h2>
      <p style="margin-bottom: 15px;" >* @lang('messages.khusus') </p>
      <div class="sce">
        <div class="icon">
          <i class="fa fa-table"></i>
        </div>
        <p>English Debate Competition</p>
      </div>
      <div class="loc">
        <div class="icon">
          <i class="fa fa-map-marker"></i>
        </div>
        <p>Jl. Sawo Manila No.61, RT.14/RW.7, Pejaten Barat, Ps. Minggu, Kota Jakarta Selatan,<br>Daerah Khusus Ibukota Jakarta 12520</p>
      </div>

      <div class="fix"></div>
      <button class="tickets" >@lang('messages.tutup')</button>
      <button class="daftar" >@lang('messages.Daftar')</button>
      <button class="daftar1" >@lang('messages.unass')</button>
    </div>
  </div>
  
  <div class="item">
    <span class="up-border"></span>
      <span class="down-border"></span>
    <div class="item-right">
      <span class="leftup-border"></span>
      <span class="leftdown-border"></span>
      <h2 style="font-size:32px" class="num">12 - 30 @lang('messages.tgl1')</h2>
      <!-- <p class="day">2024</p> -->
      <span class="up-border"></span>
      <span class="down-border"></span>
    </div>
    
    <div class="item-left">
      <p class="event">@lang('messages.tahap2')</p>
      <h2 class="title">@lang('messages.Rp7')</h2>
      <p style="margin-bottom: 15px;" >* @lang('messages.khusus') </p>
      <div class="sce">
        <div class="icon">
          <i class="fa fa-table"></i>
        </div>
        <p>English Debate Competition</p>
      </div>
    <div class="loc">
        <div class="icon">
          <i class="fa fa-map-marker"></i>
        </div>
        <p>Jl. Sawo Manila No.61, RT.14/RW.7, Pejaten Barat, Ps. Minggu, Kota Jakarta Selatan,<br>Daerah Khusus Ibukota Jakarta 12520</p>
      </div>
      
      <div class="fix"></div>
      <button class="tickets" >@lang('messages.tutup')</button>
      <button class="daftar" >@lang('messages.Daftar')</button>
      <button class="daftar1" >@lang('messages.unass')</button>
    </div>
  </div>
 
  <button class="floating-button" onclick="window.history.back();">
         <i class="fa fa-arrow-left"></i><span> @lang('messages.back')</span>
      </button>
 

<!--==================== Juri ====================-->

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

<script src="../../../js/rank.js"></script>

      <script src="../../js/nav.js"></script>
   </body>
   <script src="../../js/SM.js"></script>
</html>