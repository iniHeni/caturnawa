
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
      <link rel="stylesheet" href="../css/navmenu.css">
      <link rel="stylesheet" href="../css/pendaftaransm.css">

      <title>@lang('messages.daftar')</title>
   </head>
   <body>
      
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
         <nav class="nav container">
         <img src="../../img/smcaja.png" width="165" class="nav_logo"><a href="{{url('matalomba/shortmovie') }}" class="nav__logo" style="margin-left: -9rem"></a>
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="margin-right: 13rem" class="nav__item">
						<li><a href="../locale/ind" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
                    <li class="nav__item">
                        <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                     </li>
   
                     <li class="nav__item">
                        <a href="#" class="nav__link">@lang('messages.peserta')</a>
                     </li>
   
                     <li class="nav__item">
                        <a href="{{url('matalomba/scoreSM') }}" class="nav__link">@lang('messages.score')</a>
                     </li>
   
                     <li class="nav__item">
                        <a href="{{url('matalomba/shortmovie') }}" class="nav__link">@lang('messages.round')</a>
                     </li>
                     
                     <li class="nav__item">
                        <a href="{{url('matalomba/shortmovie') }}" class="nav__link">@lang('messages.juri')</a>
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
        <form action="https://app.sandbox.midtrans.com/payment-links/PembayaranUNASFEST2024">
            <div class="form first">
                <div class="details personal">
                    <span class="title">@lang('messages.ketua')</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>@lang('messages.Name')</label>
                            <input type="text" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Masukkan Email Kamu" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.fakultas')</label>
                            <input type="text" placeholder="Masukkan Fakultas Asal" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.prodi')</label>
                            <input type="text" placeholder="Masukkan Prodi Asal" required>
                        </div>
                        <div class="input-field">
                            <label>NPM</label>
                            <input type="text" placeholder="Masukkan NPM" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.gender')</label>
                            <select required>
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.pria')</option>
                                <option>@lang('messages.wanita')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.instansi')</label>
                            <input type="text" placeholder="Masukkan Asal Instansi" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.alamat')</label>
                            <input type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.Nomor')</label>
                            <input type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.ktm')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.foto')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.krs')</label>
                            <input type="file" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.bukti')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <span class="title">@lang('messages.member') 1</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>@lang('messages.Name')</label>
                            <input type="text" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Masukkan Email Kamu" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.fakultas')</label>
                            <input type="text" placeholder="Masukkan Fakultas Asal" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.prodi')</label>
                            <input type="text" placeholder="Masukkan Prodi Asal" required>
                        </div>
                        <div class="input-field">
                            <label>NPM</label>
                            <input type="text" placeholder="Masukkan NPM" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.gender')</label>
                            <select required>
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.pria')</option>
                                <option>@lang('messages.wanita')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.instansi')</label>
                            <input type="text" placeholder="Masukkan Asal Instansi" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.alamat')</label>
                            <input type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.Nomor')</label>
                            <input type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.ktm')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.foto')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.krs')</label>
                            <input type="file" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.bukti')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <span class="title">@lang('messages.member') 2</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>@lang('messages.Name')</label>
                            <input type="text" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Masukkan Email Kamu" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.fakultas')</label>
                            <input type="text" placeholder="Masukkan Fakultas Asal" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.prodi')</label>
                            <input type="text" placeholder="Masukkan Prodi Asal" required>
                        </div>
                        <div class="input-field">
                            <label>NPM</label>
                            <input type="text" placeholder="Masukkan NPM" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.gender')</label>
                            <select required>
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.pria')</option>
                                <option>@lang('messages.wanita')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.instansi')</label>
                            <input type="text" placeholder="Masukkan Asal Instansi" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.alamat')</label>
                            <input type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.Nomor')</label>
                            <input type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.ktm')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.foto')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.krs')</label>
                            <input type="file" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.bukti')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <span class="title">@lang('messages.member') 3</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>@lang('messages.Name')</label>
                            <input type="text" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Masukkan Email Kamu" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.fakultas')</label>
                            <input type="text" placeholder="Masukkan Fakultas Asal" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.prodi')</label>
                            <input type="text" placeholder="Masukkan Prodi Asal" required>
                        </div>
                        <div class="input-field">
                            <label>NPM</label>
                            <input type="text" placeholder="Masukkan NPM" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.gender')</label>
                            <select required>
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.pria')</option>
                                <option>@lang('messages.wanita')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.instansi')</label>
                            <input type="text" placeholder="Masukkan Asal Instansi" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.alamat')</label>
                            <input type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.Nomor')</label>
                            <input type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.ktm')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.foto')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.krs')</label>
                            <input type="file" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.bukti')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <span class="title">@lang('messages.member') 4</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>@lang('messages.Name')</label>
                            <input type="text" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Masukkan Email Kamu" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.fakultas')</label>
                            <input type="text" placeholder="Masukkan Fakultas Asal" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.prodi')</label>
                            <input type="text" placeholder="Masukkan Prodi Asal" required>
                        </div>
                        <div class="input-field">
                            <label>NPM</label>
                            <input type="text" placeholder="Masukkan NPM" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.gender')</label>
                            <select required>
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.pria')</option>
                                <option>@lang('messages.wanita')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.instansi')</label>
                            <input type="text" placeholder="Masukkan Asal Instansi" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.alamat')</label>
                            <input type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.Nomor')</label>
                            <input type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.ktm')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.foto')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.krs')</label>
                            <input type="file" require>
                        </div>
                        <div class="input-field">
                            <label>@lang('messages.bukti')</label>
                            <input type="file" accept="image/*" require>
                        </div>
                </div>
                <div class="details ID">
                <span class="title">@lang('messages.team')</span>
                    <div class="fields">
                    <div class="input-field">
                            <label>@lang('messages.surat')</label>
                            <input type="file" accept="pdf/*" require>
                        </div>
                    <div class="input-field">
                            <label>@lang('messages.link') </label>
                            <input type="text"  require>
                        </div>
                    </div>
                    <button type="submit" class="nextBtn">
                        <span class="btnText">@lang('messages.bayar')</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
        </form>
    </div>

</section>

        
    </body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <!-- JavaScript -->
</html>
      <script src="../../js/nav.js"></script>
      <script src="../../js/daftarlomba.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>
            const. submit = document.querySelector('.submit');
            submit.addEventListener('click', function(){
            Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
            });  
            })
      </script>