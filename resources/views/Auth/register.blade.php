

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registrasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@error('username')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Allert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{ $message }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>    
@enderror

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <!-- <img src="assets/img/logo/loder.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <!-- header end -->
    <main class="login-bg">
        <!-- Register Area Start -->
        <div class="register-form-area" style="margin-top: -20%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8" style="position: fixed;">
                        <div class="register-form text-center">
                            <!-- Login Heading -->
                            <div class="register-heading">
                                <span>Daftar</span>
                                <p>Pilih daftar sebagai</p>
                            </div>
                            <div class="container row justify-content-center">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link" id="home-tab" data-toggle="tab" href="#farmer" role="tab" aria-controls="home"
                                      aria-selected="true" style="color: rgb(92, 92, 92);">Petani</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="CV-tab" data-toggle="tab" href="#investor" role="tab" aria-controls="profile"
                                      aria-selected="false" style="color: rgb(92, 92, 92);">Investor</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Single Input Fields -->
                            <div class="tab-content" id="myTabContent" style="padding-bottom: -100px;">
                                <div class="tab-pane fade" id="farmer" role="tabpanel" aria-labelledby="home-tab">
                                    <form class="input-box" method="POST" action="/regCu" enctype="multipart/form-data">
                                        @csrf
                                        <!-- <div class="input-box"> -->
                                        <div class="single-input-fields">
                                            <label>Username</label>
                                            <input name="username" type="text" placeholder="Masukkan username" class="@error('username') is-invalid @enderror">
                                            @error('username')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Password</label>
                                            <input name="password" type="password" placeholder="Masukkan Password" class="@error('password') is-invalid @enderror">
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Nama Lengkap</label>
                                            <input name="nama" type="text" placeholder="Masukkan nama lengkap" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Email Address</label>
                                            <input name="email" type="email" placeholder="Masukkan email address" class="@error('email') is-invalid @enderror">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>No. Handphone</label>
                                            <input name="nohp" type="number" placeholder="Masukkan nomer handphone" class="@error('nohp') is-invalid @enderror">
                                            @error('nohp')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Tanggal lahir</label>
                                            <input name="tgllahir" type="date" placeholder="Masukkan tanggal lahir" class="@error('tgllahir') is-invalid @enderror">
                                            @error('tgllahir')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="role" value="petani">
                                        <div class="single-input-fields">
                                            <label>Alamat</label>
                                            <input name="alamat" type="text" placeholder="Masukkan alamat" class="@error('alamat') is-invalid @enderror">
                                            @error('alamat')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- <div class="single-input-fields">
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
                                        </div> -->
                                        <div class="single-input-fields">
                                            <label>Jenis kelamin</label>
											<div class="default-select" id="default-select">
												<select name="jeniskelamin" class="form-control">
													<option value="1">Laki-laki</option>
													<option value="2">Perempuan</option>
												</select>
											</div>
										</div>
                                        <div class="single-input-fields">
                                            <label>Jenis identitas</label>
											<div class="default-select" id="default-select">
												<select name="jenisidentitas" class="form-control">
													<option value="1">KTP</option>
													<option value="2">SIM</option>
													<option value="3">Pasport</option>
												</select>
											</div>
										</div>
                                        <div class="single-input-fields">
                                            <label>No. Identitas</label>
                                            <input name="noidentitas" type="number" placeholder="Masukkan nomer identitas" class="@error('noidentitas') is-invalid @enderror">
                                            @error('noidentitas')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Foto KTP</label>
                                            <input type="file" name="img" placeholder="Bukti" class="@error('img') is-invalid @enderror">
                                            @error('img')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Foto lahan hidroponik</label>
                                            <input type="file" name="img2" placeholder="Bukti" class="@error('img2') is-invalid @enderror">
                                            @error('img2')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- form Footer -->
                                        <div class="register-footer">
                                            <p> Sudah punya akun? <a href="{{ route('login') }}"> Login</a> disini</p>
                                            <button type="submit" class="submit-btn3">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="investor" role="tabpanel" aria-labelledby="CV-tab">
                                    <form class="input-box" method="POST" action="/regCu" enctype="multipart/form-data">
                                        @csrf
                                    <!-- <div class="input-box"> -->
                                    <div class="single-input-fields">
                                            <label>Username</label>
                                            <input name="username" type="text" placeholder="Masukkan username" class="@error('username') is-invalid @enderror">
                                            @error('username')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Password</label>
                                            <input name="password" type="password" placeholder="Masukkan Password" class="@error('password') is-invalid @enderror">
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Nama Lengkap</label>
                                            <input name="nama" type="text" placeholder="Masukkan nama lengkap" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Email Address</label>
                                            <input name="email" type="email" placeholder="Masukkan email address" class="@error('email') is-invalid @enderror">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>No. Handphone</label>
                                            <input name="nohp" type="number" placeholder="Masukkan nomer handphone" class="@error('nohp') is-invalid @enderror">
                                            @error('nohp')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Tanggal lahir</label>
                                            <input name="tgllahir" type="date" placeholder="Masukkan tanggal lahir" class="@error('tgllahir') is-invalid @enderror">
                                            @error('tgllahir')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="role" value="investor">
                                        <div class="single-input-fields">
                                            <label>Alamat</label>
                                            <input name="alamat" type="text" placeholder="Masukkan alamat" class="@error('alamat') is-invalid @enderror">
                                            @error('alamat')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- <div class="single-input-fields">
                                            <select name="ddlProvinsi" id="ddlProvinsi2" class="form-control" onchange="comboboxkota2()">
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
                                            <select name="ddlKota" id="ddlKota2" class="form-control">
                                                <option selected="selected" value="0">- Pilih Kota -</option>
                                            </select>
                                        </div> -->
                                        <div class="single-input-fields">
                                            <label>Jenis kelamin</label>
											<div class="default-select" id="default-select">
												<select name="jeniskelamin" class="form-control">
													<option value="1">Laki-laki</option>
													<option value="2">Perempuan</option>
												</select>
											</div>
										</div>
                                        <div class="single-input-fields">
                                            <label>Jenis identitas</label>
											<div class="default-select" id="default-select">
												<select name="jenisidentitas" class="form-control">
													<option value="1">KTP</option>
													<option value="2">SIM</option>
													<option value="3">Pasport</option>
												</select>
											</div>
										</div>
                                        <div class="single-input-fields">
                                            <label>No. Identitas</label>
                                            <input name="noidentitas" type="number" placeholder="Masukkan nomer identitas" class="@error('noidentitas') is-invalid @enderror">
                                            @error('noidentitas')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Foto KTP</label>
                                            <input type="file" name="img" placeholder="Bukti" class="@error('img') is-invalid @enderror">
                                            @error('img')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- form Footer -->
                                        <div class="register-footer">
                                            <p> Sudah punya akun? <a href="{{ route('login') }}"> Login</a> disini</p>
                                            <button type="submit" class="submit-btn3">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Area End -->
    </main>

    <!-- JS here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/comboBox.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  
</body>

</html>