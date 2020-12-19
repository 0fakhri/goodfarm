@extends('admin.layouts.master')
@section('content')
 <div class="row">
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
  <div class="col-sm col-md-12">
    <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/dashboard">&nbsp;Home&nbsp;</a></li>
              <li>&#47;&nbsp;<i class="fa fa-user"></i>&nbsp;Profile</li>
            </ol>
           <div class="card shadow text-primary border-left-primary">
            <div class="card-header text-center"><h4><i class="fa fa-user">&nbsp;PROFIL ADMIN</i></h4></div><br>
               <div class="row col-12 card-text">
                <div class="col-xl-3 sm-2 md-2 text-center ">
                  <div class="img" style="text-align: center;">
                    <img class="img-profile" src="https://robo.kulitekno.com/assets/img/person.png" alt="foto" style="width: 100px;  margin-bottom: 15px;">
                  </div>
                  <!-- <h6>{{auth()->user()->role}}</h6> -->
                  <div style=" margin-bottom: 10px">
                    <!-- <a href="/dataku/edit/{{auth()->user()->id}}" class="btn btn-danger">Edit</a> -->
                  </div>
                </div>
                <div class="col-xl-7 sm-4 md-4 text-info">
                  <p style="margin-top: 5px; margin-bottom: 1rem;" class="text-justify">Username: {{auth()->user()->username}}</p>
                  <p> @<span></span>{{auth()->user()->username}}</p>
                  <h6>
                   <!-- <span><i class="icon_clock_alt"></i>Akun Dibuat: {{auth()->user()->created_at}}</span> -->
                   </h6>
                </div>
                </div>
                </div>
              </div>
            <div class="row" style="margin: 10px;">
                
            </div>
            <div class="col-sm col-md-12">
                <div class="card shadow text-primary border-left-primary">
                    <div class="card-header text-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#petani" role="tab" aria-controls="pills-home" aria-selected="true">
                                    Petani
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#investor" role="tab" aria-controls="pills-profile" aria-selected="false">
                                    Investor
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="petani" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="table-responsive" style="width: 100%;">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="background-color: #ddd;">
                                    <tr class="text-center">
                                        <!-- <th>Logo</th> -->
                                        <th>Nama</th>
                                        <th>Tanggal lahir</th>
                                        <th>E-mail</th>
                                        <th>No HP</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Ktp</th>
                                        <th>No. Identitas</th>
                                    </tr>
                                    </thead>
                                    @foreach($data2 as $user)
                                    <tbody>
                                    <tr class="text-center">
                                        <!-- <td>
                                            @if($user->foto_ktp_investor)
                                            <img src="" alt="" width="200px">
                                            @endif
                                        </td> -->
                                        <td><a href="">{{$user->nama_investor}}</a></td>
                                        <td>{{date('d F y', strtotime($user->tanggal_lahir_investor))}}</td>
                                        <td>{{$user->email_investor}}</td>
                                        <td>{{$user->no_ponsel_investor}}</td>
                                        <td>{{$user->alamat}}</td>
                                        <td>{{$user->jenis_kelamin}}</td>
                                        <td><img src="{{url($user->foto_ktp_investor)}}" alt="" width="200px"></td>
                                        <td>{{$user->no_identitas_investor}}</td>

                                    </tr>
                                    </tbody>
                                    @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="investor" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="table-responsive" style="width: 100%;">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="background-color: #ddd;">
                                    <tr class="text-center">
                                        <th>Logo</th>
                                        <th>Nama</th>
                                        <th>Tanggal lahir</th>
                                        <th>E-mail</th>
                                        <th>No HP</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No. Identitas</th>
                                        <th>Ktp</th>
                                        <th>Foto lahan hidroponik</th>
                                    </tr>
                                    </thead>
                                    @foreach($data as $user)
                                    <tbody>
                                    <tr class="text-center">
                                        <td>
                                            @if($user->logo_usaha != null)
                                            <img src="{{ url($user->logo_usaha) }}" alt="" width="200px">
                                            @endif
                                        </td>
                                        <td><a href="">{{$user->nama_petani}}</a></td>
                                        <td>{{date('d F y', strtotime($user->tanggal_lahir_petani))}}</td>
                                        <td>{{$user->email_petani}}</td>
                                        <td>{{$user->no_ponsel_petani}}</td>
                                        <td>{{$user->alamat}}</td>
                                        <td>{{$user->jenis_kelamin}}</td>
                                        <td>{{$user->no_identitas_petani}}</td>
                                        <td><img src="{{url($user->foto_ktp_petani)}}" alt="" width="200px"></td>
                                        <td><img src="{{url($user->foto_lahan_hidroponik)}}" alt="" width="200px"></td>

                                    </tr>
                                    </tbody>
                                    @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
