@extends('investor.layouts.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                <form action="/transaksi" class="apply_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach($mitra as $li)
                    <input type="hidden" name="idPetani" value="{{$li->id_petani}}">
                    @endforeach
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="apply_info_text text-center">
                                <h3>Form investasi</h3>
                                <!-- <p>We provide online instant cash loans with quick approval that suit your term length</p> -->
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="single_field">
                                <input type="text" placeholder="Nama petani" name="nama">
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="number" placeholder="Jumlah modal" name="jumlah" class="@error('jumlah') is-invalid @enderror">
                            </div>
                            @error('jumlah')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <select class="form-control" name="bank" id="pilih" class="@error('bank') is-invalid @enderror">
                                    <option selected disabled>Pilih Bank</option>
                                    <option value="Bank Mandiri">Bank Mandiri</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="CIMB Niaga">CIMB Niaga</option>
                                </select>
                                @error('bank')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <h1><span><p></p></span>
                        </div>
                        <div class="col-md-12">
                            <div class="single-input-fields">
                                <label>Upload bukti pembayaran</label>
                                <input type="file" name="img" placeholder="Bukti" class="@error('img') is-invalid @enderror">
                                @error('img')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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


<script>
    function displayVals() {
    var singleValues = $( "#pilih" ).val();
    if(singleValues =='BRI'){
        $( "p" ).html( "<b>Transfer ke nomer rekening:</b> 32186101407951536 a.n. Goodfarm");
    }
    else if(singleValues =='BCA'){
        $( "p" ).html( "<b>Transfer ke nomer rekening:</b> 4415161616 a.n. Goodfarm");
    }
    else if(singleValues =='Bank Mandiri'){
        $( "p" ).html( "<b>Transfer ke nomer rekening:</b> 46532676464 a.n. Goodfarm");
    }
    else if(singleValues =='BNI'){
        $( "p" ).html( "<b>Transfer ke nomer rekening:</b> 152465237636 a.n. Goodfarm");
    }
    else if(singleValues =='CIMB Niaga'){
        $( "p" ).html( "<b>Transfer ke nomer rekening:</b> 4634758587278 a.n. Goodfarm");
    }
    // When using jQuery 3:
    // var multipleValues = $( "#multiple" ).val();
    // $( "p" ).html( "<b>No rekening:</b> " + singleValues);
    }
    
    $( "select" ).change( displayVals );
    displayVals();    
</script>
@endsection