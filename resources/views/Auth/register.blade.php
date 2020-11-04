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
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <!-- header end -->
    <main class="login-bg">
        <!-- Register Area Start -->
        <div class="register-form-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="register-form text-center">
                            <!-- Login Heading -->
                            <div class="register-heading">
                                <span>Sign Up</span>
                                <p>Create your account to get full access</p>
                            </div>
                            <div class="container row justify-content-center">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                      aria-selected="true" style="color: rgb(92, 92, 92);">Customer</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="CV-tab" data-toggle="tab" href="#CV" role="tab" aria-controls="profile"
                                      aria-selected="false" style="color: rgb(92, 92, 92);">CV Perencana</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Single Input Fields -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form class="input-box" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- <div class="input-box"> -->
                                        <div class="single-input-fields">
                                            <label>Full name</label>
                                            <input type="text" placeholder="Enter full name" name="name" class="@error('name') is-invalid @enderror">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Email Address</label>
                                            <input type="email" placeholder="Enter email address" class="@error('name') is-invalid @enderror">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Password</label>
                                            <input type="password" placeholder="Enter Password" name="password" class="@error('name') is-invalid @enderror">
                                        </div>
                                        @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <!-- <div class="single-input-fields">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="Confirm Password">
                                        </div> -->
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="CV" role="tabpanel" aria-labelledby="CV-tab">
                                    <form class="input-box" action="">
                                        @csrf
                                    <!-- <div class="input-box"> -->
                                        <div class="single-input-fields">
                                            <label>Nama CV</label>
                                            <input type="text" placeholder="Enter full name">
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Email Address</label>
                                            <input type="email" placeholder="Enter email address">
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Password</label>
                                            <input type="password" placeholder="Enter Password">
                                        </div>
                                        <div class="single-input-fields">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="Confirm Password">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- form Footer -->
                            <div class="register-footer">
                                <p> Already have an account? <a href="login.html"> Login</a> here</p>
                                <button type="submit" class="submit-btn3">Sign Up</button>
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