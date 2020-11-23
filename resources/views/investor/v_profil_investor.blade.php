@extends('investor.layouts.app')
@section('content')

<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Profil</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" style="margin-top: 120px;">
  <div class="container emp-profile">
        <div class="row">
            <!-- <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div> -->
            <div class="col-md-6">
                @foreach ($data as $li)
                <div class="profile-head">
                            <h5>
                                {{$li->nama_investor}}
                            </h5>
                            <h6>
                                {{$li->alamat}}
                            </h6>
                            <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ubah</a>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="col-md-2">
                <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                <a href="/investor/chat" class="btn btn-success">Chat</a>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-md-4">
                <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link</a><br/>
                    <a href="">Bootsnipp Profile</a><br/>
                    <a href="">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br/>
                    <a href="">Web Developer</a><br/>
                    <a href="">WordPress</a><br/>
                    <a href="">WooCommerce</a><br/>
                    <a href="">PHP, .Net</a><br/>
                </div>
            </div> -->
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        @foreach ($data as $li)
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$li->nama_investor}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tanggal lahir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$li->tanggal_lahir_investor}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jenis kelamin</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$li->jenis_kelamin}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jenis identitas</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$li->jenis_identitas}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>No. Indentitas</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$li->no_identitas_investor}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$li->email_investor}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>No. Handphone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$li->no_ponsel_investor}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$li->alamat}}</p>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="input-box" method="POST" action="/editProfil">
                            @csrf
                            <!-- <div class="input-box"> -->
                            <input type="hidden" name="id" value="{{$li->id_investor}}">
                            <input type="hidden" name="idAlamat" value="{{$li->id_alamat}}">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="nama" type="text" placeholder="Masukkan nama lengkap" class="form-control @error('nama') is-invalid @enderror" value="{{$li->nama_investor}}">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input name="email" type="email" placeholder="Masukkan email address" class="form-control @error('email') is-invalid @enderror" value="{{$li->email_investor}}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No. Handphone</label>
                                <input name="nohp" type="number" placeholder="Masukkan nomer handphone" class="form-control @error('nohp') is-invalid @enderror" value="{{$li->no_ponsel_investor}}">
                                @error('nohp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input name="tgllahir" type="date" placeholder="Masukkan tanggal lahir" class="form-control @error('tgllahir') is-invalid @enderror" value="{{$li->tanggal_lahir_investor}}">
                                @error('tgllahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input name="alamat" type="text" placeholder="Masukkan alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{$li->alamat}}">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="single-input-fields">
                                <select name="ddlProvinsi" id="ddlProvinsi" class="form-control" onchange="comboboxkota()">
                                    <option value="0" selected>- Pilih Provinsi -</option>
                                    <option value="1">Aceh</option>
                                    <option value="2">Sumatera Utara</option>
                                    <option value="3">Sumatera Barat</option>
                                    <option value="4">Riau</option>
                                    <option value="5">Jambi</option>
                                    <option value="7">Bengkulu</option>
                                    <option value="6">Sumatera Selatan</option>
                                    <option value="8">Lampung</option>
                                    <option value="10">Kepulauan Riau</option>
                                    <option value="9">Kepulauan Bangka Belitung</option>
                                    <option value="16">Banten</option>
                                    <option value="12">Jawa Barat</option>
                                    <option value="11">DKI Jakarta</option>
                                    <option value="13">Jawa Tengah</option>
                                    <option value="15">Jawa Timur</option>
                                    <option value="14">Daerah Istimewa Yogyakarta</option>
                                    <option value="17">Bali</option>
                                    <option value="18">Nusa Tenggara Barat</option>
                                    <option value="19">Nusa Tenggara Timur</option>
                                    <option value="20">Kalimantan Barat</option>
                                    <option value="22">Kalimantan Selatan</option>
                                    <option value="21">Kalimantan Tengah</option>
                                    <option value="23">Kalimantan Timur</option>
                                    <option value="26">Sulawesi Selatan</option>
                                    <option value="27">Sulawesi Tenggara</option>
                                    <option value="24">Sulawesi Utara</option>
                                    <option value="28">Gorontalo</option>
                                    <option value="30">Maluku</option>
                                    <option value="33">Papua Barat</option>
                                    <option value="32">Papua</option>
                                    <option value="31">Maluku Utara</option>
                                    <option value="25">Sulawesi Tengah</option>
                                </select>
                                <select name="ddlKota" id="ddlKota" class="form-control">
                                    <option selected="selected" value="0">- Pilih Kota -</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis kelamin</label>
                                <div class="default-select" id="default-select">
                                    <select name="jeniskelamin" class="form-control">
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis identitas</label>
                                <div class="default-select" id="default-select">
                                    <select name="jenisidentitas" class="form-control">
                                        <option value="1">KTP</option>
                                        <option value="2">SIM</option>
                                        <option value="3">Pasport</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No. Identitas</label>
                                <input name="noidentitas" type="number" placeholder="Masukkan nomer identitas" class="form-control @error('noidentitas') is-invalid @enderror" value="{{$li->no_identitas_investor}}">
                                @error('noidentitas')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- form Footer -->
                            <div class="register-footer">
                                <button type="submit" class="btn btn-primary">Selesai</button>
                                <a href="/investor/profil" class="btn btn-secondary">Batal</a>
                            </div>
                            <!-- <div class="login-footer">
                                
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>          
</div>

@endsection