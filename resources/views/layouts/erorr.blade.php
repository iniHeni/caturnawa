<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Website resmi Caturnawa UNAS FEST 2024. Informasi lengkap mengenai lomba, jadwal, dan pendaftaran."> 
      <!--=============== Icon Web ===============-->
      <link rel="icon" href="../../img/uf1.png">
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
         
      <link rel="stylesheet" href="../../css/navmenu.css">
      <link rel="stylesheet" href="../../css/homepage.css">
      <link rel="stylesheet" href="../../css/erorr.css">
    <meta name="description" content="Website resmi Caturnawa UNAS FEST 2024. Informasi lengkap mengenai lomba, jadwal, dan pendaftaran.">
    <meta name="keywords" content="UNAS FEST, Caturnawa, lomba, kompetisi, debat, film pendek, paper ilmiah, Shortmovie, Scientific paper competittion, Debat Bahasa Indonesia, Debat, English debate competition, festival, acara, mahasiswa, Universitas Nasional, Jakarta">
	<meta name="google-site-verification" content="Xz8ig2qSEsx4oM-BXhg273JSMQV3JCg-XRFiBBC1AHY" />
    <meta property="og:description" content="Website resmi Caturnawa UNAS FEST 2024. Informasi lengkap mengenai lomba, jadwal, dan pendaftaran.">
    <meta property="og:title" content="Caturnawa - UNAS FEST 2024">
    <meta property="og:image" content="{{ asset('img/uf2.png') }}">  
    <meta property="og:url" content="https://caturnawa.unasfest.com">
    <meta name="twitter:card" content="Caturnawa - UNAS FEST 2024">
     <script>
          {
              "@context": "https://caturnawa.unasfest.com/",
              "@type": "Event",
              "name": "Caturnawa UNAS FEST 2024",
              "startDate": "2024-07-28",  "location": {
                  "@type": "Place",
                  "name": "Universitas Nasional",
                  "address": {
                      "@type": "PostalAddress",
                      "streetAddress": "Jl. Sawo Manila No.61, RT.8/RW.3, Ps. Minggu",
                      "addressLocality": "Jakarta Selatan",
                      "addressRegion": "DKI Jakarta",
                      "postalCode": "12520",
                      "addressCountry": "ID"
                  }
              }
          }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


      <title>Caturnawa</title>

         
         
         
      <style>
.gelombang{
   position: relative;
    top: -100px;
}

.waves {
  position: relative;
  width: 100%;
  height: 15vh;
  margin-bottom: -7px;
  /*Fix for safari gap*/
  min-height: 100px;
  max-height: 150px;
}

/* .content {
  position: relative;
  height: 20vh;
  text-align: center;
  background-color: white;
} */

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
}

.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}

.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}

.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}

.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}

@keyframes move-forever {
  0% {
    transform: translate3d(-90px, 0, 0);
  }

  100% {
    transform: translate3d(85px, 0, 0);
  }
}

/* /* Shrinking for mobile */
@media (max-width: 768px) {
  .waves {
   top: 65px;
    height: 40px;
    min-height: 40px;
  }

  /* .content {
    height: 30vh;
  } */

  /* h1 {
    font-size: 24px;
  } */
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
  

      </style>

   </head>
   <body>
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
        <nav class="nav contnav">
        <img src="../../img/uf2.png" class="nav_logo" ></img>
           <h2><a href="{{url('/') }}" class="nav__logo">Caturnawa</a></h2>
           <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
              <div class="nav__item">
                       <li><a href="../../locale/ind"><img src="../../img/ind.png"  /></a></li>
                       <li><a href="../../locale/en"><img src="../../img/eng.png" /></a></li>
                   </div>
              <li class="nav__item">
                    
                 </li>
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

      @yield('content')
      <script>
        var root = document.documentElement;
var eyef = document.getElementById('eyef');
var cx = document.getElementById("eyef").getAttribute("cx");
var cy = document.getElementById("eyef").getAttribute("cy");

document.addEventListener("mousemove", evt => {
  let x = evt.clientX / innerWidth;
  let y = evt.clientY / innerHeight;

  root.style.setProperty("--mouse-x", x);
  root.style.setProperty("--mouse-y", y);
  
  cx = 115 + 30 * x;
  cy = 50 + 30 * y;
  eyef.setAttribute("cx", cx);
  eyef.setAttribute("cy", cy);
  
});

document.addEventListener("touchmove", touchHandler => {
  let x = touchHandler.touches[0].clientX / innerWidth;
  let y = touchHandler.touches[0].clientY / innerHeight;

  root.style.setProperty("--mouse-x", x);
  root.style.setProperty("--mouse-y", y);
});
      </script>
      <script src="../../js/nav.js"></script>
   </body>
</html>