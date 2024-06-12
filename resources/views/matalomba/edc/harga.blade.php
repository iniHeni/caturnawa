<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      
      <link rel="stylesheet" href="css/navmenu.css">
      <
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
        <img src="img/uf2.png" width="145" class="nav_gmbar" ></img>
           <h2><a href="{{url('/') }}" class="nav__logo" style="margin-left: -3rem">Caturnawa</a></h2>

           <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <div style="margin-right: 10rem" class="nav__item">
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
      
<!--==================== Mata Lomba ====================-->
<div id="data-box">
    <h5 style="margin: 90px auto;" > Periode Pendaftaran</h5>
    
<div style="max-width: 78rem;" class="card-list">
    <a href="{{url('/matalomba/daftarEDC') }}"  class="card-item">
            <img src="../../../img/edc.png" alt="Card Image">
            <span class="developer">Rp. 150.000</span>
            <h3>Periode </br>
            7 Juli - 20 Juli</h3>
            <div class="arrow">
                <i class="fa fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="{{url('/matalomba/daftarEDC') }}"  class="card-item">
            <img src="../../../img/edc.png" alt="Card Image">
            <span class="developer">Rp. 180.000</span>
            <h3>Periode </br>
            21 Juli - 3 Agustus</h3>
            <div class="arrow">
                <i class="fa fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="{{url('/matalomba/daftarEDC') }}"  class="card-item">
            <img src="../../../img/edc.png" alt="Card Image">
            <span class="developer">Rp. 250.000</span>
            <h3>Periode </br>
            4 Agustus - 18 Juli</h3>
            <div class="arrow">
                <i class="fa fa-arrow-right card-icon"></i>
            </div>
        </a>
        
</div>

<!--==================== Juri ====================-->
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
<script src="../../js/rank.js"></script>

      <script src="../../js/nav.js"></script>
   </body>
</html>