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

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../css/nowrap.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../css/navmenu.css">
      <link rel="stylesheet" href="../css/pagelomba.css">
      <style>
        h1{
            color: #fff;
            text-align: center;
        }
        .card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    gap: 20px;
  }
    .card-list .card-item {
      background: #fff;
      padding: 26px;
      border-radius: 25px;
      align-items: center;
      box-shadow: 0px 5px 8px #f6ae31;
      list-style: none;
      cursor: pointer;
      text-decoration: none;
      border: 2px solid transparent;
      transition: border 0.5s ease;
    }
    .card-list .card-item:hover {
      border: 2px solid #f6ae31;
    }
    .card-list .card-item img {
      width: 100%;
      aspect-ratio: 16/9;
      border-radius: 8px;
      object-fit: cover;
    }
    .card-list span {
      display: inline-block;
      background: #F7DFF5;
      margin-top: 32px;
      padding: 8px 15px;
      font-size: 1rem;
      border-radius: 50px;
      font-weight: 800;
    }
    .card-item h3 {
      color: #000;
      font-size: 1.3rem;
      margin-top: 28px;
      font-weight: 600;
      text-align: center;
    }
    .card-item .card-icon {
      display: flex;
      margin: 0 auto;
      text-align: center;
      justify-content: center;
      align-items: center;
      height: 40px;
      width: 180px;
      color: #f6ae31;
      border: 1px solid #f6ae31;
      border-radius: 20px;
      margin-top: 25px;
      cursor: pointer;
      transition: 0.2s ease;
    }
    
    
    .card-list .card-item:hover .card-icon  {
      background: #f6ae31;
      color: #fff; 
    }
    @media (max-width: 1200px) {
      .card-list .card-item {
          padding: 15px;
          
      }
    }
    @media screen and (max-width: 980px) {
      .card-list {
          margin: 0 auto;
          grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
          
      }
    }
    @media screen and (max-width: 829px) {
        h1{
            margin-top: 5rem
        }
      .card-list {
          margin: 0 auto;
          grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
          
      }
    }
    
      </style>

      <title>Caturnawa - KDBIRound4</title>
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
         <img src="../../img/logokdbi.jpeg" width="140" class="nav_logo"><h2><a href="{{url('/') }}" class="nav__logo" style="margin-left: -3rem">Caturnawa</a></h2>
         
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
      <!--==================== Session ====================-->
<section id="rank">
    <h1 class="judul">Session</h1>
    <div class="card-list">
            <a href="{{url('/matalomba/penyisihanKDBI/round4/session7') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <h3>Session 1</h3>
                <div class="arrow">
                    <i class="card-icon">Detail</i>
                </div>
            </a>
            <a href="{{url('/matalomba/penyisihanKDBI/round4/session8') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <h3>Session 2</h3>
                <div class="arrow">
                    <i class="card-icon">Detail</i>
                </div>
            </a>
            <a href="{{url('/matalomba/penyisihanKDBI/round4/session9') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <h3>Session 3</h3>
                <div class="arrow">
                    <i class="card-icon">Detail</i>
                </div>
            </a>
            <a href="{{url('/matalomba/penyisihanKDBI/round4/session10') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <h3>Session 4</h3>
                <div class="arrow">
                    <i class="card-icon">Detail</i>
                </div>
            </a>
            <a href="{{url('/matalomba/penyisihanKDBI/round4/session11') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <h3>Session 5</h3>
                <div class="arrow">
                    <i class="card-icon">Detail</i>
                </div>
            </a>
            <a href="{{url('/matalomba/penyisihanKDBI/round4/session12') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <h3>Session 6</h3>
                <div class="arrow">
                    <i class="card-icon">Detail</i>
                </div>
            </a>
        </div>
    </section>
<!--==================== Session ====================-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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
      <script src="../../js/nav.js"></script>
   </body>
</html>