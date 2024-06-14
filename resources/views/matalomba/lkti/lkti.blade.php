
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
      <link rel="stylesheet" href="../../../css/navmenulkti.css">
      <link rel="stylesheet" href="../../../css/pagelombalkti.css">
      <style>
        .wrapper .card_Container{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: 40px 0;
}

.card_Container .card{
    position: relative;
    width: 300px;
    height: 400px;
    margin: 20px;
    overflow: hidden;
    box-shadow: 0 30px 30px -20px rgba(0, 0, 0, 1),
                inset 0 0 0 1000px rgba(67, 52, 109, .6);
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card .imbBx, .imbBx img{
    width: 100%;
    height: 100%;
}

.card .content{
    position: absolute;
    bottom: -160px;
    width: 100%;
    height: 160px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    backdrop-filter: blur(15px);
    box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.432);
    border: 3px solid #ffffff;
    border-radius: 15px;
    transition: bottom 0.5s;
    transition-delay: 0.65s;
}

.card:hover .content{
    bottom: 0;
    transition-delay: 0s;
}

.content .contentBx h3{
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 2px;
    font-weight: 500;
    font-size: 18px;
    text-align: center;
    margin: 20px 0 15px;
    line-height: 1.1em;
    transition: 0.5s;
    transition-delay: 0.6s;
    opacity: 0;
    transform: translateY(-20px);
}

.card:hover .content .contentBx h3{
    opacity: 1;
    transform: translateY(0);
}

.content .contentBx h3 span{
    font-size: 12px;
    font-weight: 300;
    text-transform: initial;
}

.content .sci{
    position: relative;
    bottom: 10px;
    display: flex;
}

.content .sci li{
    list-style: none;
    margin: 0 10px;
    transform: translateY(40px);
    transition: 0.5s;
    opacity: 0;
    transition-delay: calc(0.2s * var(--i));
}

.card:hover .content .sci li{
    transform: translateY(0);
    opacity: 1;
}

.content .sci li a{
    color: #fff;
    font-size: 24px;
}
      </style>

      <title>Caturnawa - KTI</title>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
   background: center / contain no-repeat url(../../../img/loader.gif);
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
        <img src="../../img/spcaja.png" width="140" class="nav_logo"><a href="{{url('matalomba/lkti') }}" class="nav__logo" ></a>
        <div class="nav__menu" id="nav-menu">
       <ul class="nav__list">
       <div style="margin-right: 15rem" class="nav__item">

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
    <h1 class="judul">@lang('messages.lkti')</h1>
      <p class="testing1">@lang('messages.teks')<br>  
        @lang('messages.teks1')</p>

 <!--==================== Participant ====================-->
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
      <!--==================== Round ====================-->
<section id="rank">
<h1 class="judul">@lang('messages.babak')</h1>
<div class="card-list">
        <a href="{{url('matalomba/lkti/penyisihan') }}" class="card-item">
            <img src="../../img/spc.png" alt="Card Image">
            <span class="developer">@lang('messages.penyisihan')</span>
            <h3>@lang('messages.dilaksanakan')</h3>
            <div class="arrow" >
                <i class="fas fa-arrow-right card-icon" id="penyisihan"></i>
            </div>
        </a>
        <a href="{{url('matalomba/lkti/sfinal') }}" class="card-item" >
            <img src="../../img/spc.png" alt="Card Image">
            <span class="designer">Semifinal</span>
            <h3>@lang('messages.dilaksanakan')</h3>
            <div class="arrow" id="semifinal">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="{{url('matalomba/lkti/final') }}" class="card-item">
            <img src="../../img/spc.png" alt="Card Image">
            <span class="editor">Final</span>
            <h3>@lang('messages.dilaksanakan')</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon" id="final"></i>
            </div>
        </a>
    </div>
</section>
<!--==================== Jury ====================-->
    <div class="wrapper">

        <div class="title">
            <h3>Our Adjudicators</h3>
        </div>

        <div class="card_Container">

            <div class="card">

                <div class="imbBx">
                    <img src="../../img/jurispc1.jpg" alt="">
                </div>

                <div class="content">
                    <div class="contentBx">
                        <h3>Efriza, S.I.P., M.Si. <br><span>@lang('messages.jurispcposisi1')</span></h3>
                    </div>
                    <ul class="sci">
                        <li style="--i: 1">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li style="--i: 3">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="card">

                <div class="imbBx">
                    <img src="../../img/jurispc2.jpg" alt="">
                </div>

                <div class="content">
                    <div class="contentBx">
                        <h3>Fajar Harry Sampurno, MBA, Ph.D. <br><span>@lang('messages.jurispcposisi2')</span></h3>
                    </div>
                    <ul class="sci">
                        <li style="--i: 1">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li style="--i: 3">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="card">

                <div class="imbBx">
                    <img src="../../img/jurispc3.jpg" alt="">
                </div>

                <div class="content">
                    <div class="contentBx">
                        <h3>Prof. Dr. Eng. Eniya Listiani Dewi<br><span>@lang('messages.jurispcposisi3')</span></h3>
                    </div>
                    <ul class="sci">
                        <li style="--i: 1">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li style="--i: 3">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="card">

                <div class="imbBx">
                    <img src="../../img/jurispcsiswi.jpeg" alt="">
                </div>

                <div class="content">
                    <div class="contentBx">
                        <h3>Desfara Anggreani<br><span>@lang('messages.jurispcposisi4')</span></h3>
                    </div>
                    <ul class="sci">
                        <li style="--i: 1">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li style="--i: 3">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>


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
    <script type="text/javascript">
 const penyisihan = document.getElementById('penyisihan');
 const semifinal = document.getElementById('semifinal'); 
 const final = document.getElementById('final');
 
 penyisihan.addEventListener('click', () => {
   Swal.fire({
     icon: 'error',
     title: 'Oops...',
     text: 'Penyisihan belum tersedia!',
   });
 });
 
 semifinal.addEventListener('click', () => { // Add event listener for UploadSPC
   Swal.fire({
     icon: 'error',
     title: 'Oops...',
     text: 'Semifinal belum tersedia!',
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