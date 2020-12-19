@extends('petani.layouts.app')
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
                    <h3>Penilaian</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="padding">
    <div class="container shop">
        <div class="row">
            <div class="col-sm-12 col-lg-12 product-page">
                <div class="row top-pad-80">
                    <div class="col-md-12">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="nav-item">
                                    <a href="#messages" class="nav-link active" aria-controls="messages" class="nav-link" role="tab" data-toggle="tab">Review</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                                                <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="item" style="background-color: #2125;"><br/><hr/>
                                            @if (isset($review) && count($review) > 0)
                                        @foreach($review as $rev)

                                        <div class="post-meta" style="background-color:#e6e1e1;padding: 5px;margin: 15px;">
                                            <!-- Author  -->
                                            <span class="author" style="color: black;"> <i class="fa fa-user"></i>&nbsp; <b>{{$rev->nama_investor}}</b></span>
                                            <!-- Meta Date -->

                                            <!-- <span class="time" style="font-size: 10px"> <i class="fa fa-calendar"></i>&nbsp;{{$rev->buat}}</span> -->
                                            <!-- Category -->

                                            <div class="star-rating pull-right">
                                                <span class="pull-right">
                                                @for ($i = 0; $i < $rev->bintang; $i++)
                                                @if ($i < $rev->bintang)
                                                <span class="fa fa-star"></span>
                                                @else
                                                <span class="fa fa-star"></span>
                                                @endif
                                                @endfor</span>
                                            </div>
                                            <hr>
                                            <span>
                                            {{$rev->komentar}}
                                            </span>
                                            
                                            <span></span>

                                        </div>

                                    <hr />
                                    @endforeach
                                    @else()
                                    <div class="post-meta" style="background-color:#e6e1e1;padding: 5px;margin: 15px;"><p>Belum ada Review</p></div><hr/>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection