@extends('layouts.lkti')
@section('form')
<section>
    <div class="konten">
      <header>@lang('messages.pendaftaran')</header>
      <form action="/unasspc/checkout" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="form first">
              <div class="details personal">
            
                  <span class="title">@lang('messages.identitas')</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama">@lang('messages.Name')</label>
                          <input type="text" name="nama" id="nama" placeholder="@lang('messages.place') @lang('messages.Name')" @error('nama') is-invalid @enderror required>
                          @error('nama')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="email">Email </label>
                          <input type="email" name="email" id="email" placeholder="@lang('messages.place') Email " @error('email') is-invalid @enderror required>
                          @error('email')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror 
                      </div>
                      <div class="input-field">
                          <label for="fakultas" >@lang('messages.fakultas')</label>
                          <select name="fakultas" id="fakultas" @error('fakultas') is-invalid @enderror required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="FISIP">Fakultas Ilmu Sosisal dan Ilmu Politik</option>
                              <option id="FH">Fakultas Hukum</option>
                              <option id="FBS">Fakultas Bahasa dan Sastra</option>
                              <option id="FEB">Fakultas Ekonomi dan Bisnis</option>
                              <option id="FTS">Fakultas Teknik dan Sains</option>
                              <option id="FBP">Fakultas Biologi dan Pertanian</option>
                              <option id="FTKI">Fakultas Teknologi Komunikasi dan Informatika</option>
                              <option id="FIS">Fakultas Ilmu Kesehatan</option>
                          </select>
                          @error('fakultas')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div id="prodi" class="input-field">
                          @error('prodi')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="npm">@lang('messages.npm')</label>
                          <input type="number" name="npm" id="npm" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm') is-invalid @enderror required>
                          @error('npm')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="jeniskelamin">@lang('messages.gender')</label>
                          <select name="jeniskelamin" id="jeniskelamin" @error('jeniskelamin') is-invalid @enderror required>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.pria')</option>
                              <option>@lang('messages.wanita')</option>
                          </select>
                          @error('jeniskelamin')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="alamatlengkap">@lang('messages.alamat')</label>
                          <input  name="alamatlengkap" id="alamatlengkap" type="area" placeholder="@lang('messages.place') @lang('messages.alamat')" @error('alamatlengkap') is-invalid @enderror required>
                          @error('alamatlengkap')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="nomorhp">@lang('messages.Nomor')</label>
                          <input  name="nomorhp" id="nomorhp" type="Number" placeholder="@lang('messages.place') @lang('messages.Nomor')" @error('nomorhp') is-invalid @enderror required>
                          @error('nomorhp')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="ktm">@lang('messages.ktm') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                          <input name="ktm" id="ktm" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm') is-invalid @enderror required>
                          @error('ktm')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="foto">@lang('messages.foto') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                          <input name="foto" id="foto_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto') is-invalid @enderror required>
                          @error('foto')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="krs">@lang('messages.krs') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                          <input name="krs" id="krs" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs') is-invalid @enderror required>
                          @error('krs')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div class="input-field">
                          <label for="buktifollow">@lang('messages.bukti') *format: Pdf @lang('messages.max')</label>
                          <input name="buktifollow" id="buktifollow" type="file" accept=".pdf, .PDF" @error('buktifollow') is-invalid @enderror required>
                          @error('buktifollow')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                        <a href="https://drive.google.com/file/d/1utUt53aPPn7M2q5-7xHnC1C6IX5sfvSc/view?usp=drivesdk"><span class="title" style="color:blue">(Link Twibbon)</span></a>
                          <label for="twibbon">@lang('messages.unggah1') Twibbon *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                          <input name="twibbon" id="twibbon" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('twibbon') is-invalid @enderror required>
                          @error('twibbon')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="surat_delegasi">@lang('messages.surat') *format: Pdf @lang('messages.max')</label>
                          <input type="file" name="surat_delegasi" id="surat_delegasi" accept=".pdf, .PDF" @error('surat_delegasi') is-invalid @enderror required>
                          @error('surat_delegasi')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian')</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan" id="nama_kegiatan" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" required>
                          @error('nama_kegiatan')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan" id="jenis_kegiatan" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan" id="tingkat_kegiatan" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                          @error('tingkat_kegiatan')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="input-field">
                          <label for="sertifikat">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input type="file" name="sertifikat" id="sertifikat" accept=".pdf, .PDF" @error('sertifikat') is-invalid @enderror required>
                          @error('sertifikat')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian') 2 *Optional</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan1">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan1" id="nama_kegiatan1" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan1">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan1" id="jenis_kegiatan1" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan1')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru1" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan1">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan1" id="tingkat_kegiatan1" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat1">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat1" id="sertifikat1" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian') 3 *Optional</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan2">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan2" id="nama_kegiatan2" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan2">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan2" id="jenis_kegiatan2" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan2')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru2" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan2">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan2" id="tingkat_kegiatan2" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat2">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat2" id="sertifikat2" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian') 4 *Optional</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan3">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan3" id="nama_kegiatan3" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan3">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan3" id="jenis_kegiatan3" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan3')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru3" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan3">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan3" id="tingkat_kegiatan3" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat3">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat3" id="sertifikat3" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian') 5 *Optional</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan4">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan4" id="nama_kegiatan4" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan4">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan4" id="jenis_kegiatan4" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan4')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru4" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan4">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan4" id="tingkat_kegiatan4" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat4">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat4" id="sertifikat4" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian') 6 *Optional</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan5">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan5" id="nama_kegiatan5" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan5">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan5" id="jenis_kegiatan5" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan5')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru5" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan5">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan5" id="tingkat_kegiatan5" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat5">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat5" id="sertifikat5" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian') 7 *Optional</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan6">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan6" id="nama_kegiatan6" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan6">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan6" id="jenis_kegiatan6" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan6')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru6" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan6">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan6" id="tingkat_kegiatan6" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat6">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat6" id="sertifikat6" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian') 8 *Optional</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan7">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan7" id="nama_kegiatan7" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan7">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan7" id="jenis_kegiatan7" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan7')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru7" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan7">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan7" id="tingkat_kegiatan7" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat7">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat7" id="sertifikat7" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
              </div>
              <div class="details personal">
                  <span class="title">@lang('messages.Capaian') 9 *Optional</span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="nama_kegiatan8">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan8" id="nama_kegiatan8" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan8">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan8" id="jenis_kegiatan8" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan8')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru8" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan8">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan8" id="tingkat_kegiatan8" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat8">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat8" id="sertifikat8" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
              </div>
              <div class="details ID">
                  <span class="title">@lang('messages.Capaian') 10 *optional</span>
                  <div class="fields"> 
                      <div class="input-field">
                          <label for="nama_kegiatan9">@lang('messages.namakegiatan')</label>
                          <input name="nama_kegiatan9" id="nama_kegiatan9" type="text" placeholder="@lang('messages.place') @lang('messages.namakegiatan')" nullable >
                      </div>
                      <div class="input-field">
                          <label for="jenis_kegiatan9">@lang('messages.jenis')</label>
                          <select name="jenis_kegiatan9" id="jenis_kegiatan9" required>
                              <option selected>@lang('messages.pilih')</option>
                              <option id="kompetisi">@lang('messages.kompe')</option>
                              <option id="pengakuan">@lang('messages.pengakuan')</option>
                              <option id="penghargaan">@lang('messages.pengharga')</option>
                              <option id="karir_organisasi">@lang('messages.karir')</option>
                              <option id="hasil_karya">@lang('messages.hasilkarya')</option>
                              <option id="pemberdayaan">@lang('messages.pemberdayaan')</option>
                              <option id="kewirausahaan">@lang('messages.wira')</option>
                          </select>
                          @error('jenis_kegiatan9')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      <div id="baru9" class="input-field"></div> 
                      <div class="input-field">
                          <label for="tingkat_kegiatan9">@lang('messages.tingkat')</label>
                          <select name="tingkat_kegiatan9" id="tingkat_kegiatan9" nullable>
                              <option selected>@lang('messages.pilih')</option>
                              <option>@lang('messages.intern')</option>
                              <option>@lang('messages.regional')</option>
                              <option>@lang('messages.nasional')</option>
                              <option>@lang('messages.provinsi')</option>
                              <option>@lang('messages.kab')</option>
                          </select>
                      </div>
                      <div class="input-field">
                          <label for="sertifikat9">@lang('messages.sertif') *format: Pdf @lang('messages.max')</label>
                          <input name="sertifikat9" id="sertifikat9" type="file" accept=".pdf, .PDF" nullable>
                      </div>
                  </div>
                  <button type="submit" class="nextBtn">
                      <span class="btnText">@lang('messages.Daftar')</span>
                      <i class="uil uil-navigator"></i>
                  </button>
              </div> 
          </div>
      </form>
  </div>

</section>
@endsection

