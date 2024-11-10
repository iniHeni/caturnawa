<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== Icon Web ===============-->
      <link rel="icon" href="../img/uf1.png">
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
         
      <link rel="stylesheet" href="../css/navmenu.css">
      <link rel="stylesheet" href="../css/homepage.css">
    <meta name="description" content="Website resmi Caturnawa UNAS FEST 2024. Informasi lengkap mengenai lomba, jadwal, dan pendaftaran.">
    <meta name="keywords" content="UNAS FEST, Caturnawa, lomba, kompetisi, debat, film pendek, paper ilmiah, Shortmovie, Scientific paper competittion, Debat Bahasa Indonesia, Debat, English debate competition, festival, acara, mahasiswa, Universitas Nasional, Jakarta">
	<meta name="google-site-verification" content="Xz8ig2qSEsx4oM-BXhg273JSMQV3JCg-XRFiBBC1AHY" />
    <meta property="og:title" content="Caturnawa - UNAS FEST 2024">
    <meta property="og:description" content="Website resmi Caturnawa UNAS FEST 2024. Informasi lengkap mengenai lomba, jadwal, dan pendaftaran.">
    <meta property="og:image" content="{{ asset('img/uf2.png') }}">  
    <meta property="og:url" content="https://caturnawa.unasfest.com">
    <meta name="twitter:card" content="summary_large_image">
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
         <img src="../img/uf2.png" class="nav_logo" ></img>
            <h2><a href="{{url('/') }}" class="nav__logo">Caturnawa</a></h2>
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
               <div class="nav__item">
						<li><a href="../locale/ind"><img src="../img/ind.png"  /></a></li>
						<li><a href="../locale/en"><img src="../img/eng.png" /></a></li>
					</div>
               <li class="nav__item">
                     
                  </li>
                  <li class="nav__item">
                     <a href="#" class="nav__link">@lang('messages.beranda')</a>
                  </li>

                  <li class="nav__item">
                     <a href="#matalomba" class="nav__link">@lang('messages.jenislomba')</a>
                  </li>

                  <li class="nav__item">
                     <a href="#kontak" class="nav__link">@lang('messages.kontakkami')</a>
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


      <!--==================== MAIN ====================-->
      <section class="homepage" id="home">
      <div class="content">
        <div class="text">
          <h3 class="texthome">@lang('messages.welcome')</h3>
          <p >
          Caturnawa UNAS FEST</p>
        </div>
        <!--<div class="cont">
                <a class="gb" href="https://drive.google.com/drive/folders/1yZ9-xiJoF2-Ybaa_GGrZdidOiWpQYHW8">Twibbon</a>
             </div>-->
        
      </div>
      
    </section>
    <section>
      
    </section>
      <!--==================== Countdown ====================-->
      <div class="gelombang">
         <svg
           class="waves"
           xmlns="http://www.w3.org/2000/svg"
           xmlns:xlink="http://www.w3.org/1999/xlink"
           viewBox="0 24 150 28"
           preserveAspectRatio="none"
           shape-rendering="auto"
         >
           <defs>
             <path
               id="gentle-wave"
               d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
             />
           </defs>
           <g class="parallax">
             <use
               xlink:href="#gentle-wave"
               x="48"
               y="0"
               fill="hsl(212, 42%, 15%, 0.7)"
             />
             <use
               xlink:href="#gentle-wave"
               x="48"
               y="3"
               fill="hsl(212, 42%, 15%, 0.5)"
             />
             <use
               xlink:href="#gentle-wave"
               x="48"
               y="5"
               fill="hsl(212, 42%, 15%, 0.3)"
             />
             <use
               xlink:href="#gentle-wave"
               x="48"
               y="7"
               fill="hsl(212, 42%, 15%, 1)">
             />
           </g>
         </svg>
       </div>
       

<div class="waktu">

<img src="../img/mskot.svg" class="nav_logo1" style="margin-bottom: 50px"></img>
<h1>@lang('messages.count')<p>UNAS FEST 2024
</p>
</h1>
<div id="time">
    <div id="days" ></div>
    <div id="hours"></div>
    <div id="minutes"></div>
    <div id="seconds"></div>
</div>
  <h4>@lang('messages.buka')
   <span>@lang('messages.julii')</span></h4>
        

<div id="firework-container"></div>
</div>

      <!--==================== Mata Lomba ====================-->
      @php
      use Carbon\Carbon;
      $today = Carbon::now();
      $penyisihanStart = Carbon::parse('2025-09-16');
      $finalDate = Carbon::parse('2025-09-24');
      @endphp
      <section id="matalomba" class="container">
         <h5 class="judullomba" style="font-size: 40px;">@lang('messages.jenislomba')</h5>

         <div class="card-list">
             <div id="cardKDBI" class="card-item">
                 <img src="../img/kdbi2.png" alt="Card Image">
                 <h3>Kompetisi Debat Bahasa Indonesia</h3>
                 <a id="registerButtonKDBI" href="{{url('/periodeKDBI') }}" class="card-icon">@lang('messages.Daftar')</a>
                 <a href="{{url('matalomba/kdbi') }}" class="card-icon">@lang('messages.Web')</a>
             </div>
             <div id="cardSM" class="card-item">
                 <img src="../img/sm1.png" alt="Card Image">
                 <h3>Short Movie Competition</h3>
                 <a id="registerButtonSM" href="{{url('/periodeSM') }}" class="card-icon">@lang('messages.Daftar')</a>
                 <a href="#" class="card-icon" id="uploadBtnSM" onclick="
                 event.preventDefault();
                 @if (!$today->greaterThanOrEqualTo($penyisihanStart))
                     Swal.fire('@lang('messages.sweet1')', '@lang('messages.bukaunggah')', 'info');
                 @else
                     window.location.href = '{{url('/matalomba/UploadSM') }}';
                 @endif
             ">@lang('messages.unggah')</a>
                 <a href="{{route('sm.page') }}" class="card-icon">@lang('messages.Web')</a>
             </div>
             <div id="cardSPC" class="card-item">
                 <img src="../img/spc.png" alt="Card Image">
                 <h3>Scientific Paper Competition</h3>
                 <a id="registerButtonSPC" href="{{url('/periodeLKTI') }}" class="card-icon">@lang('messages.Daftar')</a>
                 <a href="#" class="card-icon" id="uploadBtnSPC" onclick="
                 event.preventDefault();
                 @if (!$today->greaterThanOrEqualTo($finalDate))
                     Swal.fire('@lang('messages.sweet1')', '@lang('messages.bukaunggah2')', 'info');
                 @else
                     window.location.href = '{{url('/matalomba/UploadSPC') }}';
                 @endif
             ">@lang('messages.unggah')</a>
                 <a href="{{route('spc.page') }}" class="card-icon">@lang('messages.Web')</a>
             </div>
             <div id="cardEDC" class="card-item">
                 <img src="../img/edc.png" alt="Card Image">
                 <h3>English Debate Competition</h3>
                 <a id="registerButtonEDC" href="{{url('/periodeEDC') }}" class="card-icon">@lang('messages.Daftar')</a>
                 <a href="{{url('matalomba/edc') }}" class="card-icon">@lang('messages.Web')</a>
             </div>
         </div>
    </div>
      </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L34.3,80C68.6,96,137,128,206,133.3C274.3,139,343,117,411,112C480,107,549,117,617,112C685.7,107,754,85,823,85.3C891.4,85,960,107,1029,122.7C1097.1,139,1166,149,1234,144C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
         <!--=============== Kontak Kami ===============-->
      <section class="section1" id="kontak">
      <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h5>@lang('messages.kontakkami')</h5>
              
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8696420912884!2d106.83691367485514!3d-6.280862993707984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f211176e9827%3A0xb4bc144c3140a2d9!2sUniversitas%20Nasional!5e0!3m2!1sid!2sid!4v1688004466233!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
            <form id="contact" action="https://formspree.io/f/mqkrvvza" method="post">
            <div class="row input-container">
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <input name="name" type="text" id="name" required />
                        <label>@lang('messages.Name')</label> 
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="styled-input">
                        <input name="email" type="text" id="email" required />
                        <label>Email</label> 
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="styled-input" style="float:right;">
                        <input name="subject" type="text" id="subject" required />
                        <label>@lang('messages.Nomor')</label> 
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="styled-input wide">
                        <textarea name="message" id="message" required></textarea>
                        <label>@lang('messages.Pesan')</label>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <button type="submit" id="form-submit" class="btn-lrg submit-btn">@lang('messages.Send')</button>
                  </div>
            </div>
         </div>
         </form>
        </div>
      </div>
    </div>
</section>
<!--=============== Social Media ===============-->
<h2 class="socialmedia">@lang('messages.follow')</h2>

<div class="wrapper">
         <a href="https://id.linkedin.com/company/universitas-nasional-festival-unas-fest" class="icon facebook">
            <div class="tooltip">
               linkedin
            </div>
            <span><i class="fa-brands fa-linkedin"></i></span>
         </a>
         <a href="https://www.instagram.com/unasfest/" class="icon instagram">
            <div class="tooltip">
               Instagram
            </div>
            <span><i class="fab fa-instagram"></i></span>
         </a>
         <a href="https://www.tiktok.com/@unasfest?_t=8mBGABwJKVN&_r=1" class="icon github">
            <div class="tooltip">
               Tiktok
            </div>
            <span><i class="fab fa-tiktok"></i></span>
         </a>
         <a href="https://youtube.com/@unasfest?si=KOQ62KwOBw1D1FTl" class="icon youtube">
            <div class="tooltip">
               YouTube
            </div>
            <span><i class="fab fa-youtube"></i></span>
         </a>
      </div>
      <h5>@Copyright UNAS FEST 2024</h5>
      @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



<!--=============== SCRIPT ===============-->

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
     

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
	</script> 
   <script src="https://kit.fontawesome.com/74b658c783.js" crossorigin="anonymous"></script>

      <!--=============== SCRIPT ===============-->

      <script src="../js/homepage.js"></script>
      <script src="../js/loader.js"></script>
      <script src="../js/nav.js"></script>
      <script src="../js/SM.js"></script>
      <script>
         @if(session('success'))
             Swal.fire({
                 icon: 'success',
                 title: 'File Terkirim',
                 text: '{{ session('success') }}'
             });
         @endif
         </script>
     
   </body>
</html>