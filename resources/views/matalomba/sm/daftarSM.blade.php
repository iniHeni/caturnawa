@extends('layouts.sm')
@section('form')
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
                              <label for="email_1">Email </label>
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
                              <input type="number" name="npm_1" id="npm_1" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_1') is-invalid @enderror required>
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
                              <label for="ktm_1">@lang('messages.ktm') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
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
                              <label for="krs_1">@lang('messages.krs1') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="krs_1" id="krs_1" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_1') is-invalid @enderror required>
                              @error('krs_1')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="buktifollow_1">@lang('messages.bukti')(Instagram,Tiktok,Youtube) *format: Pdf @lang('messages.max')</label>
                              <input name="buktifollow_1" id="buktifollow_1" type="file" accept=".pdf, .PDF" @error('buktifollow_1') is-invalid @enderror required>
                              @error('buktfollow_1')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                            <a href="https://drive.google.com/drive/folders/1yZ9-xiJoF2-Ybaa_GGrZdidOiWpQYHW8"><span class="title" style="color:blue">(Link Twibbon)</span></a>
                              <label for="twibbon_1">Upload Twibbon *format: Png, jpg, jpeg, png @lang('messages.max') </label>
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
                              <input type="number" name="npm_2" id="npm_2" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_2') is-invalid @enderror required>
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
                              <label for="ktm_2">@lang('messages.ktm') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
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
                              <label for="krs_2">@lang('messages.krs1') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="krs_2" id="krs_2" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_2') is-invalid @enderror required>
                              @error('krs_2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="buktifollow_2">@lang('messages.bukti')(Instagram,Tiktok,Youtube) *format: Pdf @lang('messages.max')</label>
                              <input name="buktifollow_2" id="buktifollow_2" type="file" accept=".pdf, .PDF" @error('buktifollow_2') is-invalid @enderror required>
                              @error('buktifollow_2')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                            <a href="https://drive.google.com/drive/folders/1yZ9-xiJoF2-Ybaa_GGrZdidOiWpQYHW8"><span class="title" style="color:blue">(Link Twibbon)</span></a>
                              <label for="twibbon_2">Upload Twibbon *format: Png, jpg, jpeg, png @lang('messages.max') </label>
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
                              <input type="number" name="npm_3" id="npm_3" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_3') is-invalid @enderror required>
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
                              <label for="ktm_3">@lang('messages.ktm') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="ktm_3" id="ktm_3" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_3') is-invalid @enderror required>
                              @error('ktm_3')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="foto_3">@lang('messages.foto') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="foto_3" id="foto_3" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_3') is-invalid @enderror required>
                              @error('foto_3')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="krs_3">@lang('messages.krs1') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="krs_3" id="krs_3" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_3') is-invalid @enderror required>
                              @error('krs_3')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="buktifollow_3">@lang('messages.bukti')(Instagram,Tiktok,Youtube) *format: Pdf @lang('messages.max')</label>
                              <input name="buktifollow_3" id="buktifollow_3" type="file" accept=".pdf, .PDF" @error('buktifollow_3') is-invalid @enderror required>
                              @error('buktfollow_3')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                            <a href="https://drive.google.com/drive/folders/1yZ9-xiJoF2-Ybaa_GGrZdidOiWpQYHW8"><span class="title" style="color:blue">(Link Twibbon)</span></a>
                              <label for="twibbon_3">Upload Twibbon *format: Png, jpg, jpeg, png @lang('messages.max')</label>
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
                              <input type="number" name="npm_4" id="npm_4" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_4') is-invalid @enderror required>
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
                              <input  name="nomorhp_4" id="nomorhp_4" type="Number" placeholder="@lang('messages.Nomor')" @error('nomorhp_4') is-invalid @enderror required>
                              @error('nomorhp_4')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="ktm_4">@lang('messages.ktm') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="ktm_4" id="ktm_4" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_4') is-invalid @enderror required>
                              @error('ktm_4')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="foto_4">@lang('messages.foto') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="foto_4" id="foto_4" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_4') is-invalid @enderror required>
                              @error('foto_4')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="krs_4">@lang('messages.krs1') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="krs_4" id="krs_4" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_4') is-invalid @enderror required>
                              @error('krs_4')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="buktifollow_4">@lang('messages.bukti')(Instagram,Tiktok,Youtube) *format: Pdf @lang('messages.max')</label>
                              <input name="buktifollow_4" id="buktifollow_4" type="file" accept=".pdf, .PDF" @error('buktifollow_4') is-invalid @enderror required>
                              @error('buktifollow_4')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                            <a href="https://drive.google.com/drive/folders/1yZ9-xiJoF2-Ybaa_GGrZdidOiWpQYHW8"><span class="title" style="color:blue">(Link Twibbon)</span></a>
                              <label for="twibbon_4">Upload Twibbon *format: Png, jpg, jpeg, png @lang('messages.max')</label>
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
                              <input type="number" name="npm_5" id="npm_5" placeholder="@lang('messages.place') @lang('messages.npm')" @error('npm_5') is-invalid @enderror required>
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
                              <label for="ktm_5">@lang('messages.ktm') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="ktm_5" id="ktm_5" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('ktm_5') is-invalid @enderror required>
                              @error('ktm_5')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="foto_5">@lang('messages.foto') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="foto_5" id="foto_5" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('foto_5') is-invalid @enderror required>
                              @error('foto_5')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="krs_5">@lang('messages.krs1') *format: Png, jpg, jpeg, png @lang('messages.max')</label>
                              <input name="krs_5" id="krs_5" type="file" accept=".png, .jpg, .jpeg, .PNG" @error('krs_5') is-invalid @enderror required>
                              @error('krs_5')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                              <label for="buktifollow_5">@lang('messages.bukti')(Instagram,Tiktok,Youtube) *format: Pdf @lang('messages.max')</label>
                              <input name="buktifollow_5" id="buktifollow_5" type="file" accept=".pdf, .PDF" @error('buktifollow_5') is-invalid @enderror required>
                              @error('buktfollow_5')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="input-field">
                            <a href="https://drive.google.com/drive/folders/1yZ9-xiJoF2-Ybaa_GGrZdidOiWpQYHW8"><span class="title" style="color:blue">(Link Twibbon)</span></a>
                              <label for="twibbon_5">Upload Twibbon *format: Png, jpg, jpeg, png @lang('messages.max')</label>
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
                              <label for="namateam">@lang('messages.teamm')</label>
                              <input type="text" name="namateam" id="namateam" placeholder="@lang('messages.place') @lang('messages.teamm')"  @error('instansi') is-invalid @enderror required>
                              @error('instansi')
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
                          <div class="input-field">
                              <label for="bio">@lang('messages.lembarbio') *format: Pdf @lang('messages.max')</label>
                              <input type="file" name="bio" id="bio" accept=".pdf, .PDF" @error('bio') is-invalid @enderror  required>
                              @error('bio')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
  
                  </div>
                  <button type="submit" class="nextBtn">
                      <span class="btnText">@lang('messages.Daftar')</span>
                      <i class="uil uil-navigator"></i>
                  </button> 
          </div>
      </form>
  </div>

</section>
@endsection
