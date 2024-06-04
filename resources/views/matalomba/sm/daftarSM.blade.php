
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
      <link rel="stylesheet" href="../css/pendaftaransm.css">

      <title>@lang('messages.daftar')</title>
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
         <img src="../../img/smcaja.png" width="160" class="nav_logo"><a href="{{url('matalomba/shortmovie') }}" class="nav__logo"></a>
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="margin-right: 20rem" class="nav__item">
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
        <form action="/sm/checkout" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form first">
                <div class="details personal">
                        <span class="title">@lang('messages.ketua')</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nama_1">@lang('messages.Name')</label>
                                <input type="text" name="nama_1" id="nama_1" placeholder="@lang('messages.place') @lang('messages.Name')" @error('nama_1') is-invalid @enderror required>
                                @error('nama_1')
                                 <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="input-field">
                                <label for="email_1">Email  *untuk form UploadSM</label>
                                <input type="email" name="email_1" id="email_1" placeholder="@lang('messages.place') Email " @error('email_1') is-invalid @enderror required>
                                @error('email_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="fakultas_1" >@lang('messages.fakultas')</label>
                                <input type="text" name="fakultas_1" id="fakultas_1" placeholder="@lang('messages.place') @lang('messages.fakultas') "  @error('fakultas_1') is-invalid @enderror required>
                                @error('fakultas_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="prodi_1">@lang('messages.prodi')</label>
                                <input type="text" name="prodi_1" id="prodi_1" placeholder="@lang('messages.place') @lang('messages.prodi')" @error('prodi_1') is-invalid @enderror required>
                                @error('prodi_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="npm_1">@lang('messages.npm')</label>
                                <input type="text" name="npm_1" id="npm_1" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_1') is-invalid @enderror required>
                                @error('npm_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="jeniskelamin_1">@lang('messages.gender')</label>
                                <select name="jeniskelamin_1" id="jeniskelamin_1" @error('jeniskelamin_1') is-invalid @enderror required>
                                    <option selected>@lang('messages.pilih')</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                    @error('jeniskelamin_1')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="alamatlengkap_1">@lang('messages.alamat')</label>
                                <input  name="alamatlengkap_1" id="alamatlengkap_1" type="area" placeholder="@lang('messages.place') @lang('messages.alamat')" @error('alamatlengkap_1') is-invalid @enderror required>
                                @error('alamatlengkap_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="nomorhp_1">@lang('messages.Nomor')</label>
                                <input  name="nomorhp_1" id="nomorhp_1" type="Number" placeholder="@lang('messages.place') @lang('messages.Nomor')" @error('nomorhp_1') is-invalid @enderror required>
                                @error('nomorhp_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="ktm_1">@lang('messages.ktm')</label>
                                <input name="ktm_1" id="ktm_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_1') is-invalid @enderror required>
                                @error('ktm_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="foto_1">@lang('messages.foto')</label>
                                <input name="foto_1" id="foto_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_1') is-invalid @enderror required>
                                @error('foto_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="krs_1">@lang('messages.krs')i</label>
                                <input name="krs_1" id="krs_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_1') is-invalid @enderror required>
                                @error('krs_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="buktifollow_1">@lang('messages.bukti')</label>
                                <input name="buktifollow_1" id="buktifollow_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('buktifollow_1') is-invalid @enderror required>
                                @error('buktfollow_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="twibbon_1">Upload Twibbon *format:png,jpg maks 5mb</label>
                                <input name="twibbon_1" id="twibbon_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('twibbon_1') is-invalid @enderror required>
                                @error('twibbon_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="details ">
                        <span class="title">@lang('messages.member') 2</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nama_2">@lang('messages.Name')</label>
                                <input type="text" name="nama_2" id="nama_2" placeholder="@lang('messages.place') @lang('messages.Name')" @error('nama_2') is-invalid @enderror required>
                                @error('nama_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="email_2">Email</label>
                                <input type="email" name="email_2" id="email_2" placeholder="@lang('messages.place') Email " @error('email_2') is-invalid @enderror required>
                                @error('email_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="fakultas_2" >@lang('messages.fakultas')</label>
                                <input type="text" name="fakultas_2" id="fakultas_2" placeholder="@lang('messages.place') @lang('messages.fakultas') " @error('fakultas_2') is-invalid @enderror required>
                                @error('fakultas_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="prodi_2">@lang('messages.prodi')</label>
                                <input type="text" name="prodi_2" id="prodi_2" placeholder="@lang('messages.place') @lang('messages.prodi')" @error('prodi_2') is-invalid @enderror required>
                                @error('prodi_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="npm_2">@lang('messages.npm')</label>
                                <input type="text" name="npm_2" id="npm_2" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_2') is-invalid @enderror required>
                                @error('npm_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="jeniskelamin_2">@lang('messages.gender')</label>
                                <select name="jeniskelamin_2" id="jeniskelamin_2" @error('jeniskelamin_2') is-invalid @enderror required>
                                    <option selected>@lang('messages.pilih')</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                    @error('jeniskelamin_2')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="alamatlengkap_2">@lang('messages.alamat')</label>
                                <input  name="alamatlengkap_2" id="alamatlengkap_2" type="area" @error('alamatlengkap_2') is-invalid @enderror placeholder="@lang('messages.place') @lang('messages.alamat')" required>
                                @error('alamatlengkap_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="nomorhp_2">@lang('messages.Nomor')</label>
                                <input  name="nomorhp_2" id="nomorhp_2" type="Number" placeholder="@lang('messages.place') @lang('messages.Nomor')" @error('nomorhp_2') is-invalid @enderror required>
                                @error('nomorhp_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="ktm_2">@lang('messages.ktm')</label>
                                <input name="ktm_2" id="ktm_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_2') is-invalid @enderror required>
                                @error('ktm_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="foto_2">@lang('messages.foto')</label>
                                <input name="foto_2" id="foto_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_2') is-invalid @enderror required>
                                @error('foto_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="krs_2">@lang('messages.krs')</label>
                                <input name="krs_2" id="krs_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_2') is-invalid @enderror required>
                                @error('krs_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="buktifollow_2">@lang('messages.bukti')</label>
                                <input name="buktifollow_2" id="buktifollow_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('buktifollow_2') is-invalid @enderror required>
                                @error('buktifollow_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="twibbon_2">Upload Twibbon *format:png,jpg maks 5mb</label>
                                <input name="twibbon_2" id="twibbon_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('twibbon_2') is-invalid @enderror required>
                                @error('twibbon_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.member') 3</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nama_3">@lang('messages.Name')</label>
                                <input type="text" name="nama_3" id="nama_3" placeholder="@lang('messages.place') @lang('messages.Name')" @error('nama_3') is-invalid @enderror required>
                                @error('nama_3')
                                 <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="input-field">
                                <label for="email_3">Email</label>
                                <input type="email" name="email_3" id="email_3" placeholder="@lang('messages.place') Email " @error('email_3') is-invalid @enderror required>
                                @error('nama_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="fakultas_3" >@lang('messages.fakultas')</label>
                                <input type="text" name="fakultas_3" id="fakultas_3" placeholder="@lang('messages.place') @lang('messages.fakultas') "  @error('fakultas_3') is-invalid @enderror required>
                                @error('fakultas_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="prodi_3">@lang('messages.prodi')</label>
                                <input type="text" name="prodi_3" id="prodi_3" placeholder="@lang('messages.place') @lang('messages.prodi')" @error('prodi_3') is-invalid @enderror required>
                                @error('prodi_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="npm_3">@lang('messages.npm')</label>
                                <input type="text" name="npm_3" id="npm_3" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_3') is-invalid @enderror required>
                                @error('npm_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="jeniskelamin_3">@lang('messages.gender')</label>
                                <select name="jeniskelamin_3" id="jeniskelamin_3" @error('jeniskelamin_3') is-invalid @enderror required>
                                    <option selected>@lang('messages.pilih')</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                    @error('jeniskelamin_3')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="alamatlengkap_3">@lang('messages.alamat')</label>
                                <input  name="alamatlengkap_3" id="alamatlengkap_3" type="area" placeholder="@lang('messages.place') @lang('messages.alamat')" @error('alamatlengkap_3') is-invalid @enderror required>
                                @error('alamatlengkap_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="nomorhp_3">@lang('messages.Nomor')</label>
                                <input  name="nomorhp_3" id="nomorhp_3" type="Number" placeholder="@lang('messages.place') @lang('messages.Nomor')" @error('nomorhp_3') is-invalid @enderror required>
                                @error('nomorhp_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="ktm_3">@lang('messages.ktm')</label>
                                <input name="ktm_3" id="ktm_3" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_3') is-invalid @enderror required>
                                @error('ktm_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="foto_3">@lang('messages.foto')</label>
                                <input name="foto_3" id="foto_3" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_3') is-invalid @enderror required>
                                @error('foto_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="krs_3">@lang('messages.krs')</label>
                                <input name="krs_3" id="krs_3" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_3') is-invalid @enderror required>
                                @error('krs_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="buktifollow_3">@lang('messages.bukti')</label>
                                <input name="buktifollow_3" id="buktifollow_3" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('buktifollow_3') is-invalid @enderror required>
                                @error('buktfollow_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="twibbon_3">Upload Twibbon *format:png,jpg maks 5mb</label>
                                <input name="twibbon_3" id="twibbon_3" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('twibbon_3') is-invalid @enderror required>
                                @error('twibbon_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="details ">
                        <span class="title">@lang('messages.member') 4</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="nama_4">@lang('messages.Name')</label>
                                <input type="text" name="nama_4" id="nama_4" placeholder="@lang('messages.place') @lang('messages.Name')" @error('nama_4') is-invalid @enderror required>
                                @error('nama_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="email_4">Email</label>
                                <input type="email" name="email_4" id="email_4" placeholder="@lang('messages.place') Email " @error('email_4') is-invalid @enderror required>
                                @error('email_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="fakultas_4" >@lang('messages.fakultas')</label>
                                <input type="text" name="fakultas_4" id="fakultas_4" placeholder="@lang('messages.place') @lang('messages.fakultas') " @error('fakultas_4') is-invalid @enderror required>
                                @error('fakultas_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="prodi_4">@lang('messages.prodi')</label>
                                <input type="text" name="prodi_4" id="prodi_4" placeholder="@lang('messages.place') @lang('messages.prodi')" @error('prodi_4') is-invalid @enderror required>
                                @error('prodi_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="npm_4">@lang('messages.npm')</label>
                                <input type="text" name="npm_4" id="npm_4" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_4') is-invalid @enderror required>
                                @error('npm_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="jeniskelamin_4">@lang('messages.gender')</label>
                                <select name="jeniskelamin_4" id="jeniskelamin_4" @error('jeniskelamin_4') is-invalid @enderror required>
                                    <option selected>@lang('messages.pilih')</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                    @error('jeniskelamin_4')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="alamatlengkap_4">@lang('messages.alamat')</label>
                                <input  name="alamatlengkap_4" id="alamatlengkap_4" type="area" @error('alamatlengkap_4') is-invalid @enderror placeholder="@lang('messages.place') @lang('messages.alamat')" required>
                                @error('alamatlengkap_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="nomorhp_4">@lang('messages.Nomor')</label>
                                <input  name="nomorhp_4" id="nomorhp_4" type="Number" placeholder="M@lang('messages.place') @lang('messages.Nomor')" @error('nomorhp_4') is-invalid @enderror required>
                                @error('nomorhp_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="ktm_4">@lang('messages.ktm')</label>
                                <input name="ktm_4" id="ktm_4" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_4') is-invalid @enderror required>
                                @error('ktm_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="foto_4">@lang('messages.foto')</label>
                                <input name="foto_4" id="foto_4" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_4') is-invalid @enderror required>
                                @error('foto_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="krs_4">@lang('messages.krs')</label>
                                <input name="krs_4" id="krs_4" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_4') is-invalid @enderror required>
                                @error('krs_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="buktifollow_4">@lang('messages.bukti')</label>
                                <input name="buktifollow_4" id="buktifollow_4" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('buktifollow_4') is-invalid @enderror required>
                                @error('buktifollow_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="twibbon_4">Upload Twibbon *format:png,jpg maks 5mb</label>
                                <input name="twibbon_4" id="twibbon_4" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('twibbon_4') is-invalid @enderror required>
                                @error('twibbon_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="details personal">
                        <span class="title">@lang('messages.member') 5</span>
                        <div class="fields"> 
                            <div class="input-field">
                                <label for="nama_5">@lang('messages.Name')</label>
                                <input type="text" name="nama_5" id="nama_5" placeholder="@lang('messages.place') @lang('messages.Name')" @error('nama_5') is-invalid @enderror required>
                                @error('nama_5')
                                 <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="input-field">
                                <label for="email_5">Email</label>
                                <input type="email" name="email_5" id="email_5" placeholder="@lang('messages.place') Email " @error('email_5') is-invalid @enderror required>
                                @error('nama_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="fakultas_5" >@lang('messages.fakultas')</label>
                                <input type="text" name="fakultas_5" id="fakultas_5" placeholder="@lang('messages.place') @lang('messages.fakultas') "  @error('fakultas_5') is-invalid @enderror required>
                                @error('fakultas_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="prodi_5">@lang('messages.prodi')</label>
                                <input type="text" name="prodi_5" id="prodi_5" placeholder="@lang('messages.place') @lang('messages.prodi')" @error('prodi_5') is-invalid @enderror required>
                                @error('prodi_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="npm_5">@lang('messages.npm')</label>
                                <input type="text" name="npm_5" id="npm_5" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_5') is-invalid @enderror required>
                                @error('npm_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="jeniskelamin_5">@lang('messages.gender')</label>
                                <select name="jeniskelamin_5" id="jeniskelamin_5" @error('jeniskelamin_5') is-invalid @enderror required>
                                    <option selected>@lang('messages.pilih')</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                    @error('jeniskelamin_5')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="input-field">
                                <label for="alamatlengkap_5">@lang('messages.alamat')</label>
                                <input  name="alamatlengkap_5" id="alamatlengkap_5" type="area" placeholder="@lang('messages.place') @lang('messages.alamat')" @error('alamatlengkap_5') is-invalid @enderror required>
                                @error('alamatlengkap_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="nomorhp_5">@lang('messages.Nomor')</label>
                                <input  name="nomorhp_5" id="nomorhp_5" type="Number" placeholder="@lang('messages.place') @lang('messages.Nomor')" @error('nomorhp_5') is-invalid @enderror required>
                                @error('nomorhp_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="ktm_5">@lang('messages.ktm')</label>
                                <input name="ktm_5" id="ktm_5" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_5') is-invalid @enderror required>
                                @error('ktm_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="foto_5">@lang('messages.foto')</label>
                                <input name="foto_5" id="foto_5" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_5') is-invalid @enderror required>
                                @error('foto_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="krs_5">@lang('messages.krs')</label>
                                <input name="krs_5" id="krs_5" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_5') is-invalid @enderror required>
                                @error('krs_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="buktifollow_5">@lang('messages.bukti')</label>
                                <input name="buktifollow_5" id="buktifollow_5" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('buktifollow_5') is-invalid @enderror required>
                                @error('buktfollow_5')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="twibbon_5">Upload Twibbon *format:png,jpg maks 5mb</label>
                                <input name="twibbon_5" id="twibbon_5" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('twibbon_5') is-invalid @enderror required>
                                @error('twibbon_1')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="details ID">
                        <span class="title">@lang('messages.team')</span>
                        <div class="fields">
                            <div class="input-field">
                                <label for="instansi">@lang('messages.instansi')</label>
                                <input type="text" name="instansi" id="instansi" placeholder="@lang('messages.place') @lang('messages.instansi')" @error('instansi') is-invalid @enderror required>
                                @error('instansi')
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
                                <label for="surat_delegasi">@lang('messages.surat')</label>
                                <input type="file" name="surat_delegasi" id="surat_delegasi" accept=".pdf, .PDF" @error('surat_delegasi') is-invalid @enderror  required>
                                @error('surat_delegasi')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
    
                    </div>
                    <button type="submit" class="nextBtn">
                        <span class="btnText">Checkout</span>
                        <i class="uil uil-navigator"></i>
                    </button> 
            </div>
        </form>
    </div>

</section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <!-- JavaScript -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
      <script src="../../js/nav.js"></script>
      <script src="../../js/daftarlomba.js"></script>
   </body>
</html>
