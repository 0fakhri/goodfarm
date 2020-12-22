@extends('petani.layouts.app')
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

<!-- Modal inves-->

<!-- end inves -->

<!-- Modal laporan-->
<div class="modal fade" id="laporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#bulanan" role="tab" aria-controls="home" aria-selected="true">Bulanan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tahunan" role="tab" aria-controls="profile" aria-selected="false">Tahunan</a>
        </li>
    </ul>
        <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="bulanan" role="tabpanel" aria-labelledby="home-tab">
                <form method="post" action="/postLaporan" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $li)
                    @endforeach
                    <div class="modal-body">
                        <div class="form-group">
                        <input type="hidden" name="id" value="{{$li->id_petani}}">
                            <label>Jumlah benih awal</label>
                            <input type="text" class="form-control" name="benihAwal" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah benih ditanam</label>
                            <input type="number" class="form-control" name="benihTanam" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah benih mati</label>
                            <input type="number" class="form-control" name="benihMati" required>
                        </div>
                        <div class="form-group">
                            <label>Foto perkembangan hidroponik</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label>Video perkembangan hidroponik</label>
                            <input type="file" class="form-control" name="video" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                    </div>
                </form>
            </div>
            <div class="tab-pane fade show active" id="tahunan" role="tabpanel" aria-labelledby="home-tab">
                <form method="post" action="/postLaporan" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$li->id_petani}}">
                            <label>Jumlah benih awal</label>
                            <input type="text" class="form-control" name="benihAwal" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah benih ditanam</label>
                            <input type="number" class="form-control" name="benihTanam" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah benih mati</label>
                            <input type="number" class="form-control" name="benihMati" required>
                        </div>
                        <div class="form-group">
                            <label>Harga total jual tanaman</label>
                            <input type="number" class="form-control" name="total" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- end laporan -->

<div class="wrapper" style="margin-top: 120px;">
    <div class="container emp-profile">
        <div class="row">
            <!-- <div class="container"> -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link" id="home-tab"  href="/buka-inves">
                        <!-- <a class="btn btn-success" href="/buka-inves" > -->
                            Buka investasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab"  data-toggle="modal" data-target="#laporan">
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#laporan"> -->
                            Perkembangan hidroponik
                        </a>
                    </li>
                    <a class="nav-link" id="home-tab"  href="/laba-rugi">
                        <!-- <a class="btn btn-success" href="/buka-inves" > -->
                            Tambah data laba/rugi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="" data-toggle="modal" data-target="#logoutModal">
                            Logout
                        </a>  
                    </li>
                </ul>
                
                
                <!-- <a class="btn btn-success" href="/buka-inves" >
                    Buka investasi
                </a>
                <br>
                
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#laporan">
                    Perkembangan hidroponik
                </button>

                <br>
                <a class="btn btn-danger" href="" data-toggle="modal" data-target="#logoutModal">
                  Logout
                </a> -->
                <!-- <a class="btn btn-success" href="/petani/data-pengajuan" >
                    Lihat buka investasi
                </a> -->
                <!-- <a href="/laporan" class="btn btn-primary"></a> -->
                <!-- <a href="/logout" class="btn btn-danger">Logout</a> -->
            <!-- </div> -->
        </div>
            <div id="chart">
                    
            </div>
        <br>
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
            
            
            <!-- <div class="col-md-6"> -->
                <div class="container">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ubah</a>
                        </li>
                    </ul>
                </div>
            <!-- </div> -->
            
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

            <p hidden>
            {{$lama = 0}}
            @foreach($data2 as $li)
                    {{$masuk = $li->jumlah_modal}}
                    {{$hitung = $masuk+$lama}}
                    {{$lama = $hitung}}
            @endforeach
            {{$lama}}
            </p> 
            <h1></h1>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        @foreach ($data as $li)
                        @endforeach
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
                            <hr>
                            
                        
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="input-box" method="POST" action="/editProfilPetani">
                            @csrf
                            <!-- <div class="input-box"> -->
                            <input type="hidden" name="id" value="{{$li->id_petani}}">
                            <input type="hidden" name="idAlamat" value="{{$li->id_alamat}}">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="nama" type="text" placeholder="Masukkan nama lengkap" class="form-control @error('nama') is-invalid @enderror" value="{{$li->nama_petani}}">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input name="email" type="email" placeholder="Masukkan email address" class="form-control @error('email') is-invalid @enderror" value="{{$li->email_petani}}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No. Handphone</label>
                                <input name="nohp" type="number" placeholder="Masukkan nomer handphone" class="form-control @error('nohp') is-invalid @enderror" value="{{$li->no_ponsel_petani}}">
                                @error('nohp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input name="tgllahir" type="date" placeholder="Masukkan tanggal lahir" class="form-control @error('tgllahir') is-invalid @enderror" value="{{$li->tanggal_lahir_petani}}">
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
                                <input name="noidentitas" type="number" placeholder="Masukkan nomer identitas" class="form-control @error('noidentitas') is-invalid @enderror" value="{{$li->no_identitas_petani}}">
                                @error('noidentitas')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- form Footer -->
                            <div class="register-footer">
                                <button type="submit" class="btn btn-primary">Selesai</button>
                                <a href="/petani/profil" class="btn btn-secondary">Batal</a>
                            </div>
                            <!-- <div class="login-footer">
                                
                            </div> -->
                        </form>
                    </div>
                </div>
                
            </div>

        </div>
        <div class="col-md-6">

                <div class="profile-head">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#bulan" role="tab" aria-controls="home" aria-selected="true">Laporan Bulanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tahun" role="tab" aria-controls="profile" aria-selected="false">Laporan Tahunan</a>
                        </li>
                    </ul>
                </div>

            </div>
    <!-- </div> -->
        <div class="row">
            

            <p hidden>
            {{$lama = 0}}
            @foreach($data2 as $li)
                    {{$masuk = $li->jumlah_modal}}
                    {{$hitung = $masuk+$lama}}
                    {{$lama = $hitung}}
            @endforeach
            {{$lama}}
            </p> 
            <h1></h1>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="bulan" role="tabpanel" aria-labelledby="home-tab">
                    @foreach($data as $li)
                        @if($li->harga_total_tanaman == null)
                        <hr>
                        <h4>Laporan Bulanan</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Benih Awal </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$li->benih_awal}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Benih Ditanam </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$li->benih_ditanam}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Benih Mati </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$li->benih_mati}}</p>
                            </div>
                        </div>
                        @if($li->foto_perkembangan != null & $li->video_perkembangan !=null)
                        <div class="row">
                            <div class="col-md-6">
                                <label>Foto perkembangan </label>
                            </div>
                            <div class="col-md-6">
                                <p><img src="{{url($li->foto_perkembangan)}}" alt="" width="400px"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Video perkembangan </label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                <video id="my-video" class="video-js" controls preload="auto" width="400" height="200" data-setup="{}">
                                    <source src="{{url($li->video_perkembangan)}}" type='video/mp4'>
                                </video>
                                </p>
                            </div>
                        </div>
                        @endif
                        
                        @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="tahun" role="tabpanel" aria-labelledby="profile-tab">
                    @foreach($data as $li)
                        @if($li->harga_total_tanaman != null)
                        <h4>Laporan Tahunan</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Harga Investasi Terkini </label>
                            </div>
                            <div class="col-md-6">
                                <p hidden>
                                    {{$hi =($li->benih_awal-$li->benih_mati)*$li->harga_perbenih}}
                                </p>
                                <p>Rp {{$hi}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Biaya Admin Final </label>
                            </div>
                            <div class="col-md-6">
                                <p hidden>
                                    {{$BAF = $hi*5/100}}
                                </p>
                                <p>Rp {{$BAF}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Laba/Rugi </label>
                            </div>
                            <div class="col-md-6">
                                <p hidden>
                                    {{$labaRugi =$li->harga_total_tanaman-$hi}}
                                </p>
                                <p>Rp {{$labaRugi}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Bagi Rugi Investor  </label>
                            </div>
                            <div class="col-md-6">
                                <p hidden>
                                    {{$bagiRugiInves = $li->benih_mati*$li->hasil_investor/100}}
                                </p>
                                <p>{{$bagiRugiInves}} %</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Bagi Rugi Petani </label>
                            </div>
                            <div class="col-md-6">
                                <p hidden>
                                    {{$bagiRugiPetani = $li->benih_mati*$li->hasil_petani/100}}
                                </p>
                                <p>{{$bagiRugiPetani}} %</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Pendapatan Investor </label>
                            </div>
                            
                            <div class="col-md-6">
                                <p hidden>
                                    {{$pendapatanInvestor = (($labaRugi*$li->hasil_investor/100)+$lama)-$bagiRugiInves}}
                                </p>
                                <p>Rp {{$pendapatanInvestor}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Pendapatan Petani  </label>
                            </div>
                            <div class="col-md-6">
                                <p hidden>
                                    {{$pendapatanPetani = ($labaRugi*$li->hasil_petani/100)-$bagiRugiPetani}}
                                </p>
                                <p>Rp {{$pendapatanPetani}}</p>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                
            </div>

            </div>
  </div>          
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
var data_laba = <?php echo $data3; ?>;

    Highcharts.chart('chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Laba rugi'
        },
        subtitle: {
            // text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [
                'Panen 1',
                'Panen 2',
                'Panen 3',
                'Panen 4',
                'Panen 5',
                'Panen 6',
                'Panen 7',
                'Panen 8',
                'Panen 9',
                'Panen 10',
                'Panen 11',
                'Panen 12'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Penerimaan (Rp)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>Rp {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '',
            data: data_laba
            // [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        },]
    });
</script>
@endsection