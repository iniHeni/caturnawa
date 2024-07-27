<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta property="og:title" content="Caturnawa - UNAS FEST 2024">
      <meta property="og:image" content="{{ asset('img/uf2.png') }}">  
      <!--=============== Icon Web ===============-->
      <link rel="icon"  href="../../../img/uf1.png">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../../css/nowrap.css">
      <link rel="stylesheet" href="../../../css/back.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../../css/navmenudbt.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      

      <title>Caturnawa - KDBIElimination</title>
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
         <img src="../../../img/kdbiaja.png"  class="nav_logo"><h2><a href="{{url('/') }}" class="nav__logo" ></a></h2>
         
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="left: 200px" class="nav__item">
          <li><a href="../../../locale/ind" height="20"><img src="../../../img/ind.png"  /></a></li>
          <li><a href="../../../locale/en" width="20px"><img src="../../../img/eng.png" /></a></li>
					</div>
          <li class="nav__item">
            <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
         </li>

         <li class="nav__item">
            <a href="{{url('/matalomba/kdbi') }}" class="nav__link">@lang('messages.peserta')</a>
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
      <button class="floating-button" onclick="window.history.back();">
         <i class="fa fa-arrow-left"></i><span> @lang('messages.back')</span>
      </button>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
      <h3 style="color: white; text-align:center">Mosi</h3>
      <section id="skor">
        <div class="container" style="display: flex; justify-content: center;height:70rem">
            <div style="width: 100%;">
                  @foreach ($dataByRoom as $room => $dataa)
                  <h3 style="color: white; text-align:center">Breakout Room {{ $room }}</h3>
                  <div class="table-responsive" style=" overflow-x: auto; overflow-y: auto; position: relative; border-radius: 20px">
                                <table class="table table-bordered " style="min-width: 650px; margin-bottom: 0; border-collapse: collapse;">
                                  <thead style="position: static; top: -1; z-index: 10;">
                                    <tr>
                                      <th scope="col" rowspan="2">Adjudicators</th>
                                      <th scope="col" rowspan="2">@lang('messages.instansi1')</th>
                                      <th scope="col" rowspan="2">@lang('messages.pteam')</th>
                                      <th scope="col" rowspan="2">@lang('messages.pname')</th>
                                      <th scope="col"  colspan="2">Score</th>
                                      <th scope="col" rowspan="2">Victory Point</th>
                                  </tr>
                                  <tr>
                                      <th scope="col" colspan="1">@lang('messages.pind')</th>
                                      <th scope="col" colspan="1">@lang('messages.team1')</th>
                                  </tr>
                                      </thead>
                                      <tbody>
                                        @if ($dataa->isNotEmpty()) 
                                        <tr>
                                            <td rowspan="20">{{ $dataa->first()->juri }}</td> 
                                          @foreach ($dataa as $data)
                                          <tr>
                                              <td>{{ $data->team}}</td>
                                              <td>{{ $data->posisi}}</td>
                                              <td>{{ $data->nama1}}({{ $data->posisi1}})<br>{{ $data->nama2}}({{ $data->posisi2}})</td>
                                              <td>{{ $data->skorindividu1}}<br>{{ $data->skorindividu2}}</td>
                                              <td>{{ $data->total}}</td>
                                              <td>{{ $data->vp}}</td>
                                          </tr>
                                          @endforeach
                                          @endif
                                      </tbody>
                                  </table>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                      <style>
               .table-bordered td{
        border: 2px solid #dee2e6 !important;
        text-align: center;
         vertical-align: middle;
      }
                 .table-bordered th {
                     border: 2px solid #dee2e6 !important;
                     text-align: center;
                     vertical-align: middle;
                     padding-block: 20px;
                   }
              
                          thead th {
                              background-color: #cecece !important;
                          }
              
              </style>
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
<script src="../../../js/rank.js"></script>
<script type="text/javascript">
    const round2 = document.getElementById('round2');
    const round3 = document.getElementById('round3'); 
    
    round2.addEventListener('click', () => {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'round2 belum tersedia!',
      });
    });
    
    round3.addEventListener('click', () => { // Add event listener for UploadSPC
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'round3 belum tersedia!',
      });
    });
       </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
      <script src="../../../js/SM.js"></script>
   </body>
</html>