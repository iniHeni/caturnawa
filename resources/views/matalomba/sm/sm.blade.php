
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
      <link rel="stylesheet" href="../../css/navmenu.css">
      <link rel="stylesheet" href="../../css/pagelombaSM.css">

      <title>Caturnawa - ShortMovie</title>
   </head>
   <body>
      
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <img src="../../img/smcaja.png" width="165" class="nav_logo"><a href="{{url('matalomba/shortmovie') }}" class="nav__logo" style="margin-left: -10rem"></a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
               <div style="margin-right: 19rem" class="nav__item">
						<li><a href="{{url('#') }}" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="{{url('matalomba/shortmovie_eng') }}" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">Beranda</a>
                  </li>

                  <li class="nav__item">
                     <a href="#peserta" class="nav__link">Peserta</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/scoreSM') }}" class="nav__link">Skor</a>
                  </li>

                  <li class="nav__item">
                     <a href="#rank" class="nav__link">Babak</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="#juri" class="nav__link">Juri</a>
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
    <h1 class="judul">Kompetisi ShortMovie</h1>
      <p class="testing1">Dalam Memeriahkan Dies Natalies Universitas Nasional ke-75, 
                        UNAS FEST membuka pendaftaran kompetisi dengan tema <br> 
                        "Menggali Potensi Energi Terbarukan Melalui Inovasi Teknologi Untuk Mencapai Momentum Hijau Secara Global"</p>
      <!--==================== Peserta Lomba ====================-->
      <section id="peserta">
      <h1 class="judul">Para Peserta Lomba</h1>
      <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                             <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 1</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 2</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 3</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 4</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 5</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 6</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 7</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 8</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="../../img/sm.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Team 9</h2>
                            <p class="description">Biodata Peserta</p>
                            <button class="button"><a href="{{url('matalomba/detailpesertaSM') }}">Masuk Untuk Detail</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
</section>
      <!--==================== Babak ====================-->
<section id="rank">
<h1 class="judul">Pilih Babak</h1>
<div class="card-list">
        <a href="#" class="card-item">
            <img src="../../img/sm.png" alt="Card Image">
            <span class="designer">Semifinal</span>
            <h3>Dilaksanakan pada tanggal</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
            <img src="../../img/sm.png" alt="Card Image">
            <span class="editor">Final</span>
            <h3>Dilaksanakan pada tanggal</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>
</section>
      <!--==================== Juri ====================-->
<section id="juri">
<div class="main">
        <div class="title">Para Juri</div>

        <div class="card_container">

            <div class="card">
                <div class="squareBox"></div>
                <div class="round_box"></div>
                <div class="img_box">
                    <img src="../../img/uf1.png" alt="">
                </div>

                <div class="user_content">
                    <h5 class="name">Carry Johnshon</h5>
                    <p class="post">Posisi saat ini</p>
                    <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, at quos dolorum sit dicta vel non debitis ad vitae, repudiandae eos enim ex quam doloremque, ipsa id beatae delectus! Nobis.</p>
                </div>
            </div>

            <div class="card">
                <div class="squareBox"></div>
                <div class="round_box"></div>
                <div class="img_box">
                    <img src="../../img/uf1.png" alt="">
                </div>

                <div class="user_content">
                    <h5 class="name">John Doe</h5>
                    <p class="post">Posisi saat ini</p>
                    <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, at quos dolorum sit dicta vel non debitis ad vitae, repudiandae eos enim ex quam doloremque, ipsa id beatae delectus! Nobis.</p>
                </div>
            </div>

            <div class="card">
                <div class="squareBox"></div>
                <div class="round_box"></div>
                <div class="img_box">
                    <img src="../../img/uf1.png" alt="">
                </div>

                <div class="user_content">
                    <h5 class="name">Alex Carry</h5>
                    <p class="post">Posisi saat ini</p>
                    <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, at quos dolorum sit dicta vel non debitis ad vitae, repudiandae eos enim ex quam doloremque, ipsa id beatae delectus! Nobis.</p>
                </div>
            </div>

            <div class="card">
                <div class="squareBox"></div>
                <div class="round_box"></div>
                <div class="img_box">
                    <img src="../../img/uf1.png" alt="">
                </div>

                <div class="user_content">
                    <h5 class="name">Stiven Smith</h5>
                    <p class="post">Posisi saat ini</p>
                    <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, at quos dolorum sit dicta vel non debitis ad vitae, repudiandae eos enim ex quam doloremque, ipsa id beatae delectus! Nobis.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

    </body>
    <!-- JavaScript -->
</html>
<script src="../../js/swiper.js"></script>
<script src="../../js/car2.js"></script>
      <script src="../../js/nav.js"></script>
   </body>
</html>