<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== Icon Web ===============-->
      <link rel="icon"  href="../../../../img/uf1.png">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../../../css/nowrap.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../../../css/navmenu.css">
      <link rel="stylesheet" href="../../../../css/pagelomba.css">


      <title>Caturnawa - SMPenyisihanScore</title>
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
   background: center / contain no-repeat url(../../../../img/loader.gif);
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
         <img src="../../../../img/smcaja.png" width="145" class="nav_logo"><h2><a href="{{url('/') }}" class="nav__logo" style="margin-left: -3rem">Caturnawa</a></h2>
         
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="margin-right: 10rem" class="nav__item">
						<li><a href="../../../locale/ind') }}" height="20"><img src="../../../../img/ind.png"  /></a></li>
						<li><a href="../../../locale/en" height="20"><img src="../../../../img/eng.png" /></a></li>
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
    
      <!--==================== Tabel Skor ====================-->
<section id="skor">
    <div class="container" style=" justify-content: center;">
        <div style="width: 100%;">
            <h1 class="judul" style="color: white" >Leaderboard Detail Penyisihan</h1>
            <div class="table-responsive" style="max-height: 1000px; overflow-x: auto; overflow-y: auto; position: relative;">
                <table class="table table-bordered table-striped" style="min-width: 1000px; margin-bottom: 0; border-collapse: collapse; ">
                  <table class="table table-bordered table-striped" style="min-width: 650px; margin-bottom: 0; border-collapse: collapse;">
                    <thead style="position: static; top: -1; z-index: 10;">
                      <tr>
                          <th scope="col">Team Participant</th>
                          <th scope="col">Participant</th>
                          <th scope="col">Penilaian Meliputi</th>
                          <th scope="col">Kuantitatif</th>
                          <th scope="col">Kualititatif</th>
                          <th scope="col">Nilai Mutu</th>
                          <th scope="col">Total</th>
                          <th scope="col">Adjudicators</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td rowspan="12">{{ $dataa->namateam }}</td>
                          <td rowspan="12">1.{{ $dataa->peserta1 }}<br>2.{{ $dataa->peserta2 }}<br>3.{{ $dataa->peserta3 }}<br>4.{{ $dataa->peserta4 }}<br>5.{{ $dataa->peserta5 }}</td>
                          <td>Ketepatan dan kesesuaian white balance</td>
                          <td>{{ $dataa->skorkrit1 }}</td>
                          <td>{{ $dataa->krit1 }}</td>
                          <td>{{ $dataa->mutu1 }}</td>
                          <td rowspan="12">{{ $dataa->total }}</td>
                          <td rowspan="12">{{ $dataa->juri }}</td>
                      </tr>
                      <tr>
                       
                          <td>Ketetapan dan kesesuaian angle, pergerakan kamera, dan komposisi</td>
                          <td>{{ $dataa->skorkrit2 }}</td>
                          <td>{{ $dataa->krit2 }}</td>
                          <td>{{ $dataa->mutu2 }}</td>
                      </tr>
                      <tr>
                       
                          <td>Ketepatan dan kesesuaian key light</td>
                          <td>{{ $dataa->skorkrit3}}</td>
                          <td>{{ $dataa->krit3 }}</td>
                          <td>{{ $dataa->mutu3 }}</td>
                      </tr>
                      <tr>
                        
                          <td>Ketepatan dan kesesuaian teknik penataan lampu</td>
                          <td>{{ $dataa->skorkrit4}}</td>
                          <td>{{ $dataa->krit4 }}</td>
                          <td>{{ $dataa->mutu4 }}</td>
                      </tr>
                      
                      <tr>
                        
                          <td>Kreatifitas dalam memadukan unsur video dan audio dalam menyusun alur cerita berdasarkan informasi dan realitas yang diperoleh menjadi suatu yang menarik untuk ditonton</td>
                          <td>{{ $dataa->skorkrit5}}</td>
                          <td>{{ $dataa->krit5 }}</td>
                          <td>{{ $dataa->mutu5 }}</td>
                      </tr>
                      <tr>
                        
                          <td>Kesesuaian antara gambar dan suara serta estetika dalam film</td>
                          <td>{{ $dataa->skorkrit6}}</td>
                          <td>{{ $dataa->krit6 }}</td>
                          <td>{{ $dataa->mutu6 }}</td>
                      </tr>
                      <tr>
                    
                        <td>Kelarasan musik dengan film</td>
                        <td>{{ $dataa->skorkrit7}}</td>
                        <td>{{ $dataa->krit7 }}</td>
                        <td>{{ $dataa->mutu7 }}</td>
                    </tr>
                    <tr>
                  
                      <td>Ketepatan dan kesesuaian teknik cutting</td>
                      <td>{{ $dataa->skorkrit8}}</td>
                      <td>{{ $dataa->krit8 }}</td>
                      <td>{{ $dataa->mutu8 }}</td>
                  </tr>
                  <tr>
               
                    <td>Ketepatan poster dengan film</td>
                    <td>{{ $dataa->skorkrit9}}</td>
                    <td>{{ $dataa->krit9 }}</td>
                    <td>{{ $dataa->mutu9 }}</td>
                </tr>
                <tr>
          
                  <td>Komposisi gambar : warna dan tata letak objek dalam gambar</td>
                  <td>{{ $dataa->skorkrit10}}</td>
                  <td>{{ $dataa->krit10 }}</td>
                  <td>{{ $dataa->mutu10 }}</td>
              </tr>
              <tr>
          
                <td>Keindahan/sisi artistik penyajian visual</td>
                <td>{{ $dataa->skorkrit11}}</td>
                <td>{{ $dataa->krit11 }}</td>
                <td>{{ $dataa->mutu11 }}</td>
            </tr>
            <tr>
          
              <td>Jumlah like dan view film yang tayang di Youtube</td>
              <td>{{ $dataa->skorkrit12}}</td>
              <td>{{ $dataa->krit12 }}</td>
              <td>{{ $dataa->mutu12 }}</td>
          </tr>
                     
                  </tbody>
                  </table>
                </table>
            </div>
            <!-- Tampilkan pagination links jika diperlukan -->
            <!-- Simulasi pagination untuk data dummy -->
        </div>
    </div>
</section>

<style>
   .table-bordered td, .table-bordered th {
       border: 2px solid black !important;
       text-align: center;
       vertical-align: middle;
   }
   thead th {
       background-color: #0d6efd !important;
       
   }
</style>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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
   </body>
</html>