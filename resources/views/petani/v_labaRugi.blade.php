@extends('petani.layouts.app')
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Laba Rugi</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apply_form_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="/postLaba" class="apply_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- @foreach($data as $li) -->
                    <input type="hidden" name="id" value="{{$li->id_petani}}">
                    <h4></h4>
                    <!-- @endforeach -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="apply_info_text text-center">
                                <h3>Laba Rugi</h3>
                                <!-- <p>We provide online instant cash loans with quick approval that suit your term length</p> -->
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="number" placeholder="Cost/biaya pengeluaran" name="cost" class="@error('cost') is-invalid @enderror">
                            </div>
                            @error('cost')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="number" placeholder="Jumlah produk yang terjual (Kg)" name="jumlah" class="@error('jumlah') is-invalid @enderror">
                            </div>
                            @error('jumlah')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="number" placeholder="Harga yang terjual pada masa panen (Kg)" name="harga" class="@error('harga') is-invalid @enderror">
                            </div>
                            @error('harga')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <div class="submit-btn3">
                                <button class="boxed-btn3" type="submit">Selesai</button>
                                <a href="/petani/profil" class="boxed-btn3">Batal</a>
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