@extends('investor.layouts.app')
@section('content')

<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Investasi</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apply_form_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="#" class="apply_form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="apply_info_text text-center">
                                <h3>Form investasi</h3>
                                <!-- <p>We provide online instant cash loans with quick approval that suit your term length</p> -->
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="text" placeholder="Nama petani" name="nama">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="text" placeholder="Jumlah modal" name="jumlah">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <select class="form-control" name="">
                                    <option selected disabled>Pilih Bank</option>
                                    <option value="Bank Mandiri">Bank Mandiri</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="CIMB Niaga">CIMB Niaga</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <div class="submit-btn3">
                                <button class="boxed-btn3" type="submit">Selesai</button>
                                <a href="/investor/dashboard" class="boxed-btn3">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection