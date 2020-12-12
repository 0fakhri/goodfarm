@extends('investor.layouts.app')
@section('content')

<style>
        /* body{margin-top:15%;
    background:#eee;
    } */

    /* CONTACTS */
    .contact-box {
    background-color: #ffffff;
    border: 1px solid #e7eaec;
    padding: 20px;
    margin-bottom: 20px;
    }
    .contact-box > a {
    color: inherit;
    }
    .contact-box.center-version {
    border: 1px solid #e7eaec;
    padding: 0;
    }
    .contact-box.center-version > a {
    display: block;
    background-color: #ffffff;
    padding: 20px;
    text-align: center;
    }
    .contact-box.center-version > a img {
    width: 80px;
    height: 80px;
    margin-top: 10px;
    margin-bottom: 10px;
    }
    .contact-box.center-version address {
    margin-bottom: 0;
    }
    .contact-box .contact-box-footer {
    text-align: center;
    background-color: #ffffff;
    border-top: 1px solid #e7eaec;
    padding: 15px 20px;
    }
    a{
        text-decoration:none !important;    
    }
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Laporan hidroponik</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin: 10px;">
    <div class="row" >
        <div class="card" style="width: 100%;">
            <!-- <div class="card-header">List profil investor</div> -->
            <div class="card-body" >
                @foreach($data as $li)
                    <div class="col-md-3" style="display: inline-block;">
                        <div class="contact-box center-version">
                        <img src="{{url($li->foto)}}" alt="" width="200px" style="margin: 20px 50px 20px 50px;">
                            <a href="/investor/laporan/{{$li->id_buka}}">
                            
                                <h3 class="m-b-xs" style="margin-bottom: 20px;"><strong>{{$li->nama_tanaman}}</strong></h3>
                    
                                <div class="font-bold">{{$li->jenis_kelamin}}</div>
                                <address class="m-t-md">
                                    <!-- <strong>Twitter, Inc.</strong><br> -->
                                    {{$li->alamat}},{{$li->kota}}<br>
                                    {{$li->provinsi}}<br>
                                    <abbr title="Phone">P:</abbr> {{$li->no_ponsel_investor}}
                                </address>
                    
                            </a>
                            <div class="contact-box-footer">
                                <div class="m-t-xs btn-group">
                                    <a class="btn btn-xs btn-white" href="tel:{{$li->no_ponsel_investor}}"><i class="fa fa-phone"></i> Call </a>
                                    <a class="btn btn-xs btn-white" href="mailto:{{$li->email_investor}}"><i class="fa fa-envelope"></i> Email</a>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<main role="main" class="container">
      <!-- <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Bootstrap</h6>
          <small>Since 2011</small>
        </div>
      </div> -->
      <p hidden>
            {{$lama = 0}}
            @foreach($data as $li)
                    {{$masuk = $li->jumlah_modal}}
                    {{$hitung = $masuk+$lama}}
                    {{$lama = $hitung}}
            @endforeach
            {{$lama}}
            </p> 
            <h1></h1>
      <div class="my-3 p-3 bg-white rounded box-shadow bg-dark">
        <!-- <h6 class="border-bottom border-gray pb-2 mb-0">Laporan</h6> -->
        
        @foreach ($data as $li)
        <h4>Profil</h4>
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
            
            <hr>
        @endforeach
            
        
           
        
        
        <!-- <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
        </div> -->
        <small class="d-block text-right mt-3">
          <a href="#">All updates</a>
        </small>
      </div>

      
    </main>


@endsection