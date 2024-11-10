
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
      <!--=============== SWIPER CSS ===============-->
      

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../css/navmenulomba.css">
      <link rel="stylesheet" href="../../css/upload.css">
      <link rel="stylesheet" href="../../../css/back.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <title>@lang('messages.daftar')</title>
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
  background: center / contain no-repeat url(../../../img/mskt1.svg);

 
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
         <img src="../../img/smcaja.png" width="160" class="nav_logo"><a href="{{url('matalomba/shortmovie') }}" class="nav__logo"></a>
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="left:200px" class="nav__item">
						<li><a href="../locale/ind" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
                    <li class="nav__item">
                        <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                     </li>
   
                     <li class="nav__item">
                        <a href="#" class="nav__link">@lang('messages.peserta')</a>
                     </li>
   
                     <!-- <li class="nav__item">
                        <a href="{{url('/matalomba/shortmovie') }}" class="nav__link">@lang('messages.score')</a>
                     </li> -->
   
                     <li class="nav__item">
                        <a href="{{url('/matalomba/shortmovie') }}" class="nav__link">@lang('messages.round')</a>
                     </li>
                     
                     <li class="nav__item">
                        <a href="{{url('/matalomba/shortmovie') }}" class="nav__link">@lang('messages.juri')</a>
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
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L120,186.7C240,149,480,75,720,80C960,85,1200,171,1320,213.3L1440,256L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
      <section>
      <div class="konten">
        <header>Upload Video</header>
        <form action="/sm/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form first">
                    <div class="details ID">
                        <span class="title">@lang('messages.team')</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nama">@lang('messages.ketua')</label>
                                <input type="text" name="nama" id="nama" placeholder="@lang('messages.place') @lang('messages.Name')" @error('nama') is-invalid @enderror required>
                                @error('nama')
                                 <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="input-field">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="@lang('messages.place') Email " @error('email') is-invalid @enderror required>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="instansi">@lang('messages.instansi')</label>
                                <input type="text" name="instansi" id="instansi" placeholder="@lang('messages.place') @lang('messages.instansi')" @error('instansi') is-invalid @enderror required>
                                @error('instansi')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="poster">Poster *PDF Max 3mb</label>
                                <input type="file" name="poster" id="poster" accept=".pdf, .PDF" @error('poster') is-invalid @enderror  required>
                                @error('poster')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="script">Script *PDF Max 3mb</label>
                                <input type="file" name="script" id="script" accept=".pdf, .PDF" @error('script') is-invalid @enderror  required>
                                @error('script')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="karya">@lang('messages.pengesahan') *PDF Max 3mb</label>
                                <input type="file" name="karya" id="karya" accept=".pdf, .PDF" @error('karya') is-invalid @enderror  required>
                                @error('karya')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="input-field">
                                <label for="story">Storyboard *PDF Max 3mb</label>
                                <input type="file" name="story" id="story" accept=".pdf, .PDF" @error('story') is-invalid @enderror  required>
                                @error('story')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="sipnosis">Sinopsis *PDF Max 3mb</label>
                                <input type="file" name="sipnosis" id="sipnosis" accept=".pdf, .PDF" @error('sipnosis') is-invalid @enderror  required>
                                @error('sipnosis')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="shortlist">Shortlist *PDF Max 3mb</label>
                                <input type="file" name="shortlist" id="shortlist" accept=".pdf, .PDF" @error('shortlist') is-invalid @enderror  required>
                                @error('shortlist')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="linkvidio">Link Video</label>
                                <input type="text" name="linkvidio" id="linkvidio" placeholder="@lang('messages.place') Link Video" @error('linkvidio') is-invalid @enderror required>
                                @error('linkvidio')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="cipta">@lang('messages.hakcipta') *PDF Max 3mb</label>
                                <input type="file" name="cipta" id="cipta" accept=".pdf, .PDF" @error('cipta') is-invalid @enderror  required>
                                @error('cipta')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="ori">@lang('messages.lembar')</label>
                                <input type="file" name="ori" id="ori" accept=".pdf, .PDF" @error('ori') is-invalid @enderror  required>
                                @error('ori')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                           
                        </div>
    
                    </div>
                    
                    <button type="submit" class="nextBtn">
                        <span class="btnText">@lang('messages.Send1')</span>
                        <i class="uil uil-navigator"></i>
                    </button> 
            </div>
        </form>
    </div>

</section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <button class="floating-button" onclick="window.history.back();">
         <i class="fa fa-arrow-left"></i><span> @lang('messages.back')</span>
      </button>
    <!-- JavaScript -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
   


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
      <script src="../../js/nav.js"></script>
      <script src="../../js/daftarlomba.js"></script>
      <script src="../../js/SM.js"></script>
   </body>
</html>
