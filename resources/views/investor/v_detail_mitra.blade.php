@extends('investor.layouts.app')
@section('content')

<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Detail Mitra</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper" style="margin-top: 120px;">
  <div class="container emp-profile">
    <form method="post">
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
                @foreach ($mitra as $li)
                <div class="profile-head">
                            <h5>
                                {{$li->nama_petani}}
                            </h5>
                            <h6>
                                {{$li->alamat}}
                            </h6>
                            <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                    <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ubah</a>
                        </li>
                    </ul> -->
                </div>
                @endforeach
            </div>
            <div class="col-md-2">
                <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                <a href="/investor/list-mitra/detail/{{$li->id_petani}}/investasi" class="btn btn-primary">Investasi</a>
                <a href="/investor/list-mitra/detail/{{$li->id_petani}}/chat" class="btn btn-success">Chat</a>
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
                        @foreach ($mitra as $li)
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->nama_petani}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tanggal lahir</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->tanggal_lahir_petani}}</p>
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
                                    <p>{{$li->no_identitas_petani}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->email_petani}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>No. Handphone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->no_ponsel_petani}}</p>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Foto lahan</label>
                                </div>
                                <div class="col-md-6">
                                    <p><img src="{{url($li->foto_lahan_hidroponik)}}" alt="" width="300px"></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama tanaman</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->nama_tanaman}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Foto tanaman</label>
                                </div>
                                <div class="col-md-6">
                                    <p><img src="{{url($li->foto)}}" alt="" width="300px"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Bagi Hasil petani</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->hasil_petani}} %</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Bagi Hasil investor</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->hasil_investor}} %</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Harga perbenih</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Rp {{$li->harga_perbenih}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total lot</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->total_lot}} </p>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
                    </div>
                </div>
            </div>
        </div>
    </form> 
  </div>          
</div>

@endsection