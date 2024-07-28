@extends('layouts.kdbi')
@section('form')
<section>
    <div class="konten">
      <header>@lang('messages.pendaftaran')</header>
      <form action="/unaskdbi/checkout" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="form first">
              <div class="details personal">
               
                      <span class="title">Debater 1 *@lang('messages.keterangan')</span>
                      <div class="fields">
                          <div class="input-field">
                              <label for="nama_1">@lang('messages.Name')</label>
                              <input type="text" name="nama_1" id="nama_1" placeholder="@lang('messages.place') @lang('messages.Name')" @error('nama_1') is-invalid @enderror required>
                              @error('nama_1')
                               <div class="text-danger">{{ $message }}</div>
                               @enderror
                          </div>
                          <div class="input-field">
                              <label for="email_1">Email</label>
                              <input type="email" name="email_1" id="email_1" placeholder="@lang('messages.place') Email " @error('email_1') is-invalid @enderror required>
                              @error('nama_1')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="fakultas_1" >@lang('messages.fakultas')</label>
                              <select name="fakultas_1" id="fakultas_1" @error('fakultas_1') is-invalid @enderror required>
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
                              @error('fakultas_1')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div id="prodi_1" class="input-field">
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
                              <label for="foto_1">@lang('messages.foto') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="foto_1" id="foto_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_1') is-invalid @enderror required>
                              @error('foto_1')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="krs_1">@lang('messages.krs') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="krs_1" id="krs_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_1') is-invalid @enderror required>
                              @error('krs_1')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="buktifollow_1">@lang('messages.bukti') *format: Pdf @lang('messages.max') </label>
                              <input name="buktifollow_1" id="buktifollow_1" type="file" accept=".pdf, .PDF"  @error('buktifollow_1') is-invalid @enderror required>
                              @error('buktfollow_1')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                            <a href="https://drive.google.com/drive/folders/1yZ9-xiJoF2-Ybaa_GGrZdidOiWpQYHW8"><span class="title" style="color:blue">(Link Twibbon)</span></a>
                              <label for="twibbon">@lang('messages.unggah1') Twibbon *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="twibbon" id="twibbon" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('twibbon') is-invalid @enderror required>
                              @error('twibbon')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                  </div>
                  <div class="details ">
                      <span class="title">Debater 2 *@lang('messages.keterangan')</span>
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
                              <select name="fakultas_2" id="fakultas_2" @error('fakultas_2') is-invalid @enderror required>
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
                              @error('fakultas_2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div id="prodi_2" class="input-field">
                              @error('prodi_2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="npm_2">@lang('messages.npm') </label>
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
                              <label for="ktm_2">@lang('messages.ktm')*format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="ktm_2" id="ktm_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_2') is-invalid @enderror required>
                              @error('ktm_2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="foto_2">@lang('messages.foto') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="foto_2" id="foto_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_2') is-invalid @enderror required>
                              @error('foto_2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="krs_2">@lang('messages.krs') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="krs_2" id="krs_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_2') is-invalid @enderror required>
                              @error('krs_2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="buktifollow_2">@lang('messages.bukti') *format: Pdf @lang('messages.max')</label>
                              <input name="buktifollow_2" id="buktifollow_2" type="file" accept=".pdf, .PDF" @error('buktifollow_2') is-invalid @enderror required>
                              @error('buktifollow_2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                            <a href="https://drive.google.com/drive/folders/1yZ9-xiJoF2-Ybaa_GGrZdidOiWpQYHW8"><span class="title" style="color:blue">(Link Twibbon)</span></a>
                              <label for="twibbon2">@lang('messages.unggah1') Twibbon *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="twibbon2" id="twibbon2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('twibbon2') is-invalid @enderror required>
                              @error('twibbon2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                  </div>
                  <div class="details ID">
                      <span class="title">@lang('messages.team')</span>
                      <div class="fields">
                          <div class="input-field">
                              <label for="namateam">@lang('messages.teamm4')</label>
                              <input type="text" name="namateam" id="namateam" placeholder="@lang('messages.place') @lang('messages.teamm')"  @error('namateam') is-invalid @enderror required>
                              @error('namateam')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="surat_delegasi">@lang('messages.surat') *format: Pdf @lang('messages.max')</label>
                              <input type="file" name="surat_delegasi" id="surat_delegasi" accept=".pdf, .PDF" @error('surat_delegasi') is-invalid @enderror  required>
                              @error('surat_delegasi')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
  
                  </div>
                  <button type="submit" class="nextBtn">
                      <span class="btnText">@lang('messages.bayar')</span>
                      <i class="uil uil-navigator"></i>
                  </button> 
              </div>
      </form>
  </div>

</section>
@endsection
    
           