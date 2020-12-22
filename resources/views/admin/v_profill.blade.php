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

@foreach($data as $li)
@endforeach
    <div class="col-sm col-md-12">
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="/dashboard">&nbsp;Home&nbsp;</a></li>
            <li>&#47;&nbsp;<i class="fa fa-user"></i><a href="/profil">&nbsp;Profil&nbsp;</a></li>
            <li>&#47;&nbsp;<i class="fa fa-user"></i>&nbsp;{{$li->nama_investor}}&nbsp;</li>
        </ol>
        <div class="card shadow text-primary border-left-primary">
            <div class="card-header text-center"><h4><i class="fa fa-user">&nbsp;Profil Invesotor</i></h4></div><br>
                <div class="row col-12 card-text">
                    <div class="col-xl-3 sm-2 md-2 text-center ">
                        <div class="img" style="text-align: center;">
                            <!-- <img class="img-profile" src="https://robo.kulitekno.com/assets/img/person.png" alt="foto" style="width: 100px;  margin-bottom: 15px;"> -->
                        </div>
                    <!-- <h6>{{auth()->user()->role}}</h6> -->
                        <div style=" margin-bottom: 10px">
                            <!-- <a href="/dataku/edit/{{auth()->user()->id}}" class="btn btn-danger">Edit</a> -->
                        </div>
                    </div>
                    <div class="col-xl-7 sm-4 md-4 text-info">
                    
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
                            <hr>
                        <div id="chart">
                    
                        </div>
                    </div>
                </div>
        </div>
    </div>
            <div class="row" style="margin: 10px;">
                
            </div>
            
</div>


@endsection
