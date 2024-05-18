
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
      <link rel="stylesheet" href="../../css/pendaftaranspc.css">

      <title>@lang('messages.daftar')</title>
   </head>
   <body>
      
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
         <nav class="nav container">
         <img src="../../img/spcaja.png" width="145" class="nav_logo"><a href="{{url('matalomba/lkti') }}" class="nav__logo" ></a>
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="margin-right: 12rem" class="nav__item">
						<li><a href="../locale/ind" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                  </li>

                  <li class="nav__item">
                     <a href="#peserta" class="nav__link">@lang('messages.peserta')</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/scoreLKTI') }}" class="nav__link">@lang('messages.score')</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/lkti') }}" class="nav__link">@lang('messages.round')</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="{{url('matalomba/lkti') }}" class="nav__link">@lang('messages.juri')</a>
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
        <form action="/lkti/checkout" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title">@lang('messages.identitas')</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama">@lang('messages.Name')</label>
                            <input type="text" name="nama" id="nama" placeholder="@lang('messages.place') @lang('messages.Name')" required>
                        </div>
                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="@lang('messages.place') Email " required>
                        </div>
                        <div class="input-field">
                            <label for="fakultas" >@lang('messages.fakultas')</label>
                            <input type="text" name="fakultas" id="fakultas" placeholder="@lang('messages.place') @lang('messages.fakultas') " required>
                        </div>
                        <div class="input-field">
                            <label for="prodi">@lang('messages.prodi')</label>
                            <input type="text" name="prodi" id="prodi" placeholder="@lang('messages.place') @lang('messages.prodi')" required>
                        </div>
                        <div class="input-field">
                            <label for="npm">NPM</label>
                            <input type="text" name="npm" id="npm" placeholder="@lang('messages.place') NPM" required>
                        </div>
                        <div class="input-field">
                            <label for="jeniskelamin">@lang('messages.gender')</label>
                            <select name="jeniskelamin" id="jeniskelamin" required>
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.pria')</option>
                                <option>@lang('messages.wanita')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="alamatlengkap">@lang('messages.alamat')</label>
                            <input  name="alamatlengkap" id="alamatlengkap" type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label for="nomorhp">@lang('messages.Nomor')</label>
                            <input  name="nomorhp" id="nomorhp" type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label for="ktm">@lang('messages.ktm')</label>
                            <input name="ktm" id="ktm" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="foto">@lang('messages.foto')</label>
                            <input name="foto" id="foto_1" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="krs">@lang('messages.krs')i</label>
                            <input name="krs" id="krs" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="buktifollow">@lang('messages.bukti')</label>
                            <input name="buktifollow" id="buktifollow" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="instansi">@lang('messages.instansi')</label>
                            <input type="text" name="instansi" id="instansi" placeholder="Masukkan Asal Instansi" required>
                        </div>
                        <div class="input-field">
                            <label for="surat_delegasi">@lang('messages.surat')</label>
                            <input type="file" name="surat_delegasi" id="surat_delegasi" accept="pdf/*" required>
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian') *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan" id="nama_kegiatan" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan" id="jenis_kegiatan" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan" id="tingkat_kegiatan">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat">@lang('messages.sertif')</label>
                            <input name="sertifikat" id="sertifikat" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian')1 *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan1">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan1" id="nama_kegiatan1" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan1">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan1" id="jenis_kegiatan1" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan1">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan1" id="tingkat_kegiatan1">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat1">@lang('messages.sertif')</label>
                            <input name="sertifikat1" id="sertifikat1" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian')2 *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan2">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan2" id="nama_kegiatan2" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan2">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan2" id="jenis_kegiatan2" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan2">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan2" id="tingkat_kegiatan2">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat2">@lang('messages.sertif')</label>
                            <input name="sertifikat2" id="sertifikat2" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian')3 *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan3">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan3" id="nama_kegiatan3" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan3">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan3" id="jenis_kegiatan3" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan3">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan3" id="tingkat_kegiatan3">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat3">@lang('messages.sertif')</label>
                            <input name="sertifikat3" id="sertifikat3" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian')4 *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan4">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan4" id="nama_kegiatan4" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan4">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan4" id="jenis_kegiatan4" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan4">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan4" id="tingkat_kegiatan4">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat4">@lang('messages.sertif')</label>
                            <input name="sertifikat4" id="sertifikat4" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian')5 *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan5">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan5" id="nama_kegiatan5" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan5">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan5" id="jenis_kegiatan5" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan5">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan5" id="tingkat_kegiatan5">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat5">@lang('messages.sertif')</label>
                            <input name="sertifikat5" id="sertifikat5" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian')6 *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan6">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan6" id="nama_kegiatan6" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan6">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan6" id="jenis_kegiatan6" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan6">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan6" id="tingkat_kegiatan6">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat6">@lang('messages.sertif')</label>
                            <input name="sertifikat6" id="sertifikat6" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian')7 *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan7">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan7" id="nama_kegiatan7" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan7">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan7" id="jenis_kegiatan7" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan7">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan7" id="tingkat_kegiatan7">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat7">@lang('messages.sertif')</label>
                            <input name="sertifikat7" id="sertifikat7" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details personal">
                    <span class="title">@lang('messages.Capaian')8 *Optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan8">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan8" id="nama_kegiatan8" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan8">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan8" id="jenis_kegiatan8" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan8">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan8" id="tingkat_kegiatan8">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat8">@lang('messages.sertif')</label>
                            <input name="sertifikat8" id="sertifikat8" type="file" accept="pdf/*">
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">@lang('messages.Capaian') 9 *optional</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_kegiatan9">@lang('messages.namakegiatan')</label>
                            <input name="nama_kegiatan9" id="nama_kegiatan9" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" >
                        </div>
                        <div class="input-field">
                            <label for="jenis_kegiatan9">@lang('messages.jenis')</label>
                            <input name="jenis_kegiatan9" id="jenis_kegiatan9" type="text" placeholder="@lang('messages.place') @lang('messages.jenis')">
                        </div>
                        <div class="input-field">
                            <label for="tingkat_kegiatan9">@lang('messages.tingkat')</label>
                            <select name="tingkat_kegiatan9" id="tingkat_kegiatan9">
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.intern')</option>
                                <option>@lang('messages.regional')</option>
                                <option>@lang('messages.nasional')</option>
                                <option>@lang('messages.provinsi')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="sertifikat9">@lang('messages.sertif')</label>
                            <input name="sertifikat9" id="sertifikat9" type="file" accept="pdf/*">
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
      <script src="../../js/main.js"></script>
      <script src="../../js/daftarlomba.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
