
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
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
      <!--=============== SWIPER CSS ===============-->
      

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../css/navmenu.css">
      <link rel="stylesheet" href="../../css/cekout.css">
      <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>

      <title>@lang('messages.daftar')</title>
   </head>
   <body>
      
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
         <nav class="nav container">
         <img src="../../img/edcaja.png" width="120" class="nav_logo"><a href="{{url('matalomba/edc') }}" class="nav__logo"></a>
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="margin-right: 15rem" class="nav__item">
						<li><a href="../locale/ind" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">@lang('messages.peserta')</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/scoreEDC') }}" class="nav__link">@lang('messages.score')</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">@lang('messages.round')</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">@lang('messages.juri')</a>
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
                                <input disabled placeholder="{{$order->nama}}">
                            </div>
                            <div class="input-field">
                                <label >Email</label>
                                <input disabled placeholder="{{$order->email}}">
                            </div>
                            <div class="input-field">
                                <label  >@lang('messages.fakultas')</label>
                                <input disabled placeholder="{{$order->fakultas}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.prodi')</label>
                                <input disabled placeholder="{{$order->prodi}}">
                            </div>
                            <div class="input-field">
                                <label>NPM</label>
                                <input disabled placeholder="{{$order->npm}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.gender')</label>
                                <select disabled>
                                    <option selected>{{$order->jeniskelamin}}</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.alamat')</label>
                                <input disabled placeholder="{{$order->alamatlengkap}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.Nomor')p</label>
                                <input disabled placeholder="{{$order->nomorhp}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.ktm')</label>
                                <input disabled placeholder="{{$order->ktm}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.foto')</label>
                                <input disabled placeholder="{{$order->foto}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.krs')i</label>
                                <input disabled placeholder="{{$order->krs}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bukti')</label>
                                <input disabled placeholder="{{$order->buktifollow}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.instansi')</label>
                                <input disabled placeholder="{{$order->instansi}}" required>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.surat')</label>
                                <input disabled placeholder="{{$order->surat_delegasi}}">
                            </div>
                            <div class="input-field">
                                <label>Price</label>
                                <input disabled placeholder="{{$order->price}}">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian') *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')2 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan1}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan1}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan1}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat1}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')3 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan2}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan2}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan2}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat2}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')4 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan3}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan3}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan3}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat3}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')5 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan4}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan4}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan4}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat4}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')6 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan5}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan5}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan5}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat5}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')7 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan6}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan6}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan6}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat6}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')8 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan7}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan7}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan7}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat7}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.Capaian')9 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan8}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan8}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan8}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat8}}"  type="file" accept="pdf/*">
                            </div>
                        </div>
                    </div>          
                    <div class="details ID">
                        <span class="title">@lang('messages.Capaian')10 *Optional</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.namakegiatan')</label>
                                <input disabled placeholder="{{$order->nama_kegiatan9}}" >
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.jenis')</label>
                                <input disabled placeholder="{{$order->jenis_kegiatan9}}">
                            </div>
                            <div class="input-field">
                                <label >@lang('messages.tingkat')</label>
                                <select disabled>
                                    <option selected aria-placeholder="{{$order->tingkat_kegiatan9}}"></option>
                                    <option>@lang('messages.intern')</option>
                                    <option>@lang('messages.regional')</option>
                                    <option>@lang('messages.nasional')</option>
                                    <option>@lang('messages.provinsi')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.sertif')</label>
                                <input disabled placeholder="{{$order->sertifikat9}}"  type="file" accept="pdf/*">
                            </div>  
                        </div>
                        <button type="submit" class="nextBtn" id="pay-button">
                            <span class="btnText">@lang('messages.bayar')</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div> 
                </div>
                </table>

</section>


        
    </body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <!-- JavaScript -->
</html>
      <script src="../../js/nav.js"></script>
      <script src="../../js/daftarlomba.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result){
              window.location.href= '/matalomba/lkti'
              alert("payment success!"); console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>