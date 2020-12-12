@extends('petani.layouts.app')
@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Buat laporan</h3>
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
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="bulanan" role="tabpanel" aria-labelledby="home-tab">
                        <hr>
                        <h4>Laporan Bulanan</h4>
                        <hr>
                        <form method="post" action="/postLaporan" enctype="multipart/form-data">
                            @csrf
                            @foreach($ajuan as $li)
                            @endforeach
                            <div class="modal-body">
                                <div class="form-group">
                                <input type="hidden" name="id" value="{{$li->id_buka}}">
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
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> -->
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show active" id="tahunan" role="tabpanel" aria-labelledby="home-tab">
                        <hr>
                        <h4>Laporan Tahunan</h4>
                        <hr>
                        <form method="post" action="/postLaporan" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$li->id_buka}}">
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
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> -->
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection