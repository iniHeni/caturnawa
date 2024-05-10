
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
      <link rel="stylesheet" href="../../css/pendaftaran.css">

      <title>Caturnawa - Daftar</title>
   </head>
   <body>
      
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
         <nav class="nav container">
         <img src="../../img/edcaja.png" width="160" class="nav_logo"><a href="{{url('matalomba/edc') }}" class="nav__logo" style="margin-left: -7rem"></a>
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="margin-right: 16rem" class="nav__item">
						<li><a href="#" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="{{url('matalomba/daftarEDC_eng') }}" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">Beranda</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">Peserta</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/scoreLKTI') }}" class="nav__link">Skor</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">Babak</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">Juri</a>
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
        <header>Pendaftaran</header>
        <form action="https://app.sandbox.midtrans.com/payment-links/PembayaranUNASFEST2024">
            <div class="form first">
            <div class="details personal">
                    <span class="title">Debater 1</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Masukkan Email Kamu" required>
                        </div>
                        <div class="input-field">
                            <label>Fakultas</label>
                            <input type="text" placeholder="Masukkan Fakultas Asal" required>
                        </div>
                        <div class="input-field">
                            <label>Prodi</label>
                            <input type="text" placeholder="Masukkan Prodi Asal" required>
                        </div>
                        <div class="input-field">
                            <label>NPM</label>
                            <input type="text" placeholder="Masukkan NPM" required>
                        </div>
                        <div class="input-field">
                            <label>Jenis Kelamin</label>
                            <select required>
                                <option selected>Pilih</option>
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Alamat</label>
                            <input type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label>No Whatssapp</label>
                            <input type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label>Kartu Tanda Mahasiswa</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>Foto Formal Background Merah </label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>Kartu Rencana Studi</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>Bukti Follow Sosial Media UnasFest</label>
                            <input type="file" accept="image/*" require>
                        </div>
                    </div>
                </div>
                <div class="details ">
                    <span class="title">Debater 2</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Masukkan Email Kamu" required>
                        </div>
                        <div class="input-field">
                            <label>Fakultas</label>
                            <input type="text" placeholder="Masukkan Fakultas Asal" required>
                        </div>
                        <div class="input-field">
                            <label>Prodi</label>
                            <input type="text" placeholder="Masukkan Prodi Asal" required>
                        </div>
                        <div class="input-field">
                            <label>NPM</label>
                            <input type="text" placeholder="Masukkan NPM" required>
                        </div>
                        <div class="input-field">
                            <label>Jenis Kelamin</label>
                            <select required>
                                <option selected>Pilih</option>
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Alamat</label>
                            <input type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label>No Whatssapp</label>
                            <input type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label>Kartu Tanda Mahasiswa</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>Foto Formal Background Merah</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>Kartu Rencana Studi</label>
                            <input type="file" accept="image/*" require>
                        </div>
                        <div class="input-field">
                            <label>Bukti Follow Sosial Media UnasFest</label>
                            <input type="file" accept="image/*" require>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Berkas Team</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Asal Instansi</label>
                            <input type="text" placeholder="Masukkan Asal Instansi" required>
                        </div>
                        <div class="input-field">
                            <label>Surat Delegasi dari Kampus</label>
                            <input type="file" accept="pdf/*" require>
                        </div>
                    </div>
                    <button type="submit" class="nextBtn">
                        <span class="btnText">Pembayaran</span>
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
            const. submit = document.querySelector('.sumbit');
            submit.addEventListener('click', function(){
            Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
            });  
            })
      </script>