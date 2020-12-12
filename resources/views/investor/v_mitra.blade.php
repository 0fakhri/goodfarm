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
                    <h3>Mitra</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- style="margin-top: 10%;" -->
<div>
<!-- style="margin: 0px 50px 0px 50px;" -->
    <div class="row" >
        <div class="card" style="width: 100%;">
            <!-- <div class="card-header">List profil petani</div> -->
            <div class="card-body">
                @foreach($data as $li)
                    <div class="col-md-3" style="display: inline-block;">
                        <div class="contact-box center-version">
                            <a href="/investor/list-mitra/detail/{{$li->id_petani}}">
                                
                                <h3 class="m-b-xs" style="margin-bottom: 20px;"><strong>{{$li->nama_petani}}</strong></h3>
                    
                                <div class="font-bold">{{$li->jenis_kelamin}}</div>
                                <address class="m-t-md">
                                    <!-- <strong>Twitter, Inc.</strong><br> -->
                                    {{$li->alamat}},{{$li->kota}}<br>
                                    {{$li->provinsi}}<br>
                                    <abbr title="Phone">P:</abbr> {{$li->no_ponsel_petani}}
                                </address>
                    
                            </a>
                            <div class="contact-box-footer">
                                <div class="m-t-xs btn-group">
                                    <a class="btn btn-xs btn-white" href="tel:{{$li->no_ponsel_petani}}"><i class="fa fa-phone"></i> Call </a>
                                    <a class="btn btn-xs btn-white" href="mailto:{{$li->email_petani}}"><i class="fa fa-envelope"></i> Email</a>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection