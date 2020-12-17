@extends('investor.layouts.app')
@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Laporan </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apply_form_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3>Laporan</h3>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#bulanan" role="tab" aria-controls="home" aria-selected="true">Bulanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tahunan" role="tab" aria-controls="profile" aria-selected="false">Tahunan</a>
                    </li>
                </ul>
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
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="bulanan" role="tabpanel" aria-labelledby="home-tab">
                        @foreach($data as $li)
                        @if($li->harga_total_tanaman == null)
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
                        @endforeach
                    </div>
                    
                    <div class="tab-pane fade show active" id="tahunan" role="tabpanel" aria-labelledby="home-tab">
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
                                    {{$pendapatanInvestor = (($labaRugi*$li->hasil_investor/100)+$li->jumlah_modal)-$bagiRugiInves}}
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


@endsection