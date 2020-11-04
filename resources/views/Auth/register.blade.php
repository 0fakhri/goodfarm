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
                                <span>Sign Up</span>
                                <p>Create your account to get full access</p>
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
                                    <form class="input-box" method="POST" action="/regCu">
                                        @csrf
                                        <!-- <div class="input-box"> -->
                                        <div class="single-input-fields">
                                            <label>Nama Lengkap</label>
                                            <input name="nama" type="text" placeholder="Masukkan nama lengkap" class="@error('name') is-invalid @enderror">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Email Address</label>
                                            <input name="email" type="email" placeholder="Masukkan email address" class="@error('name') is-invalid @enderror">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{session('error')}}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>No. Handphone</label>
                                            <input name="nohp" type="number" placeholder="Masukkan nomer handphone" >
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Tanggal lahir</label>
                                            <input name="tgllahir" type="date" placeholder="Masukkan tanggal lahir" >
                                        </div>
                                        <input type="hidden" name="role" value="farmer">
                                        <div class="single-input-fields">
                                            <label>Username</label>
                                            <input name="username" type="text" placeholder="Masukkan username" >
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Alamat</label>
                                            <input name="alamat" type="text" placeholder="Masukkan alamat" >
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Jenis kelamin</label>
											<div class="default-select" id="default-select">
												<select>
													<option value="1">Laki-laki</option>
													<option value="2">Perempuan</option>
												</select>
											</div>
										</div>
                                        <div class="single-input-fields">
                                            <label>Jenis identitas</label>
											<div class="default-select" id="default-select">
												<select>
													<option value="1">KTP</option>
													<option value="2">SIM</option>
													<option value="3">Pasport</option>
												</select>
											</div>
										</div>
                                        <div class="single-input-fields">
                                            <label>No. Identitas</label>
                                            <input name="noidentitas" type="number" placeholder="Masukkan nomer identitas" >
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Password</label>
                                            <input name="password" type="password" placeholder="Masukkan Password" class="@error('name') is-invalid @enderror">
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Confirm Password</label>
                                            <input name="password_confirmation" type="password" placeholder="Confirm Password" >
                                        </div>
                                        <!-- form Footer -->
                                        <div class="register-footer">
                                            <p> Already have an account? <a href="{{ route('login') }}"> Login</a> here</p>
                                            <button type="submit" class="submit-btn3">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="CV" role="tabpanel" aria-labelledby="CV-tab">
                                    <form class="input-box" method="POST" action="/regCu" enctype="multipart/form-data">
                                        @csrf
                                    <!-- <div class="input-box"> -->
                                        <div class="single-input-fields">
                                            <label>Nama CV</label>
                                            <input name="nama_cv" type="text" placeholder="Masukkan nama CV">
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Email Address</label>
                                            <input name="email" type="email" placeholder="Masukkan email address">
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Password</label>
                                            <input name="password" type="password" placeholder="Masukkan Password">
                                        </div>
                                        <input type="hidden" name="role" value="cv">
                                        <div class="single-input-fields">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="Confirm Password">
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Alamat</label>
                                            <input name="alamat" type="text" placeholder="Alamat">
                                        </div>
                                        
                                        <div class="single-input-fields">
                                            <label>Upload Bukti</label>
                                            <input type="file" name="img" placeholder="Bukti">
                                        </div>
                                        <!-- form Footer -->
                                        <div class="register-footer">
                                            <p> Already have an account? <a href="{{ route('login') }}"> Login</a> here</p>
                                            <button type="submit" class="submit-btn3">Sign Up</button>
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