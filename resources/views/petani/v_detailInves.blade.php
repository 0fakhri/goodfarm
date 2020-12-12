@extends('petani.layouts.app')
@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Detail transaksi</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #content {
        text-align: center;
        display: block;
        width: 100%;
        background: #fff;
        padding: 25px 20px;
        padding-bottom: 15px;
        -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
        -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
    }

    dt, dd {
        margin: auto;
        width: 50%;
        padding: 10px;
        margin-left: 50px;
    }

    #Box {
        margin: auto;
        width: 50%;
        padding: 10px;
    }

    footer {
        text-align: center;
    }
</style>

<div>
    <div id="content">
        <div class="notify successbox">
            <h1>Detail transaksi</h1><br />
            <!-- <span class="alerticon"><img src="http://s22.postimg.org/i5iji9hv1/check.png" alt="checkmark" /></span><br /> -->
        </div>

        <div id="Box">
            <hr />
            <dl class="dl-horizontal">
            @foreach($trans as $li)
                <dt>
                    Nama investor
                </dt>
                <dd>
                {{$li->nama_investor}}
                </dd>
                <dt>
                    Email investor
                </dt>
                <dd>
                {{$li->email_investor}}
                </dd>
                <dt>
                    No tlp investor
                </dt>
                <dd>
                {{$li->no_ponsel_investor}}
                </dd>
                <dt>
                    Jumlah nominal
                </dt>
                <dd>
                   Rp {{$li->jumlah_modal}}
                </dd>
            @endforeach

            </dl>
        </div>
    </div>
</div>


@endsection