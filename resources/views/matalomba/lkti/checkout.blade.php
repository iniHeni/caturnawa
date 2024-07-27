
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
      <link rel="stylesheet" href="../../css/cekoutlkti.css">
      <link rel="stylesheet" href="../../css/back.css">
      <script type="text/javascript"
      src="{{config('midtrans.snap_url')}}"
      data-client-key="{{config('midtrans.client_key')}}"></script>

      <title>@lang('messages.daftar')</title>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
         <img src="../../img/spcaja.png" width="120" class="nav_logo"><a href="{{url('matalomba/edc') }}" class="nav__logo"></a>
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="left: 200px" class="nav__item">
						<li><a href="../locale/ind" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('/matalomba/spc') }}" class="nav__link">@lang('messages.peserta')</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('/matalomba/spc') }}" class="nav__link">@lang('messages.round')</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="{{url('/matalomba/spc') }}" class="nav__link">@lang('messages.juri')</a>
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
            <header>@lang('messages.pendaftaran')</header>
                @csrf
                <table>
                <div class="form first">
                <div class="details personal">
                        <span class="title">@lang('messages.identitas')</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.Name')</label>
                                <input disabled placeholder="{{$orderlkti->nama}}">
                            </div>
                            <div class="input-field">
                                <label >Email</label>
                                <input disabled placeholder="{{$orderlkti->email}}">
                            </div>
                            <div class="input-field">
                                <label  >@lang('messages.fakultas')</label>
                                <input disabled placeholder="{{$orderlkti->fakultas}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.prodi')</label>
                                <input disabled placeholder="{{$orderlkti->prodi}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.npm')</label>
                                <input disabled placeholder="{{$orderlkti->npm}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.gender')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jeniskelamin}}</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.alamat')</label>
                                <input disabled placeholder="{{$orderlkti->alamatlengkap}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.Nomor')</label>
                                <input disabled placeholder="{{$orderlkti->nomorhp}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.ktm')</label>
                                <input disabled placeholder="{{ basename($orderlkti->ktm) }}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.foto')</label>
                                <input disabled placeholder="{{ basename($orderlkti->foto) }}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.krs')</label>
                                <input disabled placeholder="{{ basename($orderlkti->krs) }}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bukti')</label>
                                <input disabled placeholder="{{ basename($orderlkti->buktifollow) }}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.instansi')</label>
                                <input disabled placeholder="{{$orderlkti->instansi}}" >
                            </div>
                            <div class="input-field">
                                <label>Twibbon</label>
                                <input disabled placeholder="{{ basename($orderlkti->twibbon) }}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.surat')</label>
                                <input disabled placeholder="{{ basename($orderlkti->surat_delegasi) }}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.harga')</label>
                                <input disabled placeholder="{{$orderlkti->price}}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->tingkat_kegiatan}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled  placeholder="{{ basename($orderlkti->sertifikat) }}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')2 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan1}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan1}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru1}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected> {{$orderlkti->tingkat_kegiatan1}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat1) }}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')3 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan2}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan2}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru2}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->tingkat_kegiatan2}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat2) }}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')4 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan3}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan3}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru3}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected >{{$orderlkti->tingkat_kegiatan3}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat3) }}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')5 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan4}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan4}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru4}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected> {{$orderlkti->tingkat_kegiatan4}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat4) }}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')6 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan5}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan5}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru5}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected >{{$orderlkti->tingkat_kegiatan5}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat5) }}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')7 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan6}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan6}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru6}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected >{{$orderlkti->tingkat_kegiatan6}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat6) }}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')8 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan7}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan7}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru7}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected >{{$orderlkti->tingkat_kegiatan7}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat7) }}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')9 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan8}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan8}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru8}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected >{{$orderlkti->tingkat_kegiatan8}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat8) }}">
                            </div>
                        </div>
                    </div>          
                    <div class="details ID">
                        <span class="title">@lang('messages.Capaian')10 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$orderlkti->nama_kegiatan9}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->jenis_kegiatan9}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bidang')</label>
                                <select disabled>
                                    <option selected>{{$orderlkti->baru9}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected >{{$orderlkti->tingkat_kegiatan9}}</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{ basename($orderlkti->sertifikat9) }}">
                            </div>  
                        </div>
                        <button type="submit" class="nextBtn" id="pay-button">
                            <span class="btnText">@lang('messages.bayar')</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                        <button type="submit" class="nextBtn" onclick="window.history.back();">
                            <p class="btnText">@lang('messages.kembali')</p>
                        </button>
                    </div> 
                </div>
                </table>

</section>
<button class="floating-button" onclick="window.history.back();">
         <i class="fa fa-arrow-left"></i><span> @lang('messages.back')</span>
      </button>
      
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../../js/nav.js"></script>
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
<script src="../../js/daftarlomba.js"></script>
<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
            Swal.fire({
    icon: 'success',
    title: 'Pembayaran Berhasil!',
    text: 'Anda akan diarahkan ke WhatsApp Group.',
    showConfirmButton: false, 
    timer: 2000,
  }).then(() => {
    window.location.href = '/homespc/{{$orderlkti->id}}'; 
    console.log(result); 
  });
        },
        onPending: function(result){
            location.reload();
        },
                onError: function(result) {
        Swal.fire({
            icon: 'error',
            title: 'Terjadi Kesalahan',
            text: 'Pembayaran gagal diproses. Silakan coba lagi.', 
            showCancelButton: true, 
            confirmButtonText: 'Coba Lagi',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
            
            } else {
                window.location.href = '/'; 
            }
        });

        console.error("Error pembayaran:", result);
                
                },
        onClose: function(){
            Swal.fire({
    icon: 'warning',
    title: 'Pembayaran Dibatalkan',
    text: 'Anda telah menutup jendela pembayaran sebelum menyelesaikan proses.',
  });
        }
      })
    });
  </script>
   <script>
    fetch('/callback-url') // Ganti dengan URL endpoint callback Anda
.then(response => response.json())
.then(data => {
    if (data.reload_page) {
        location.reload(); // Reload halaman saat ada instruksi dari backend
    }
});
  </script>
    </body>
    <script src="../../js/SM.js"></script>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <!-- JavaScript -->
</html>
      