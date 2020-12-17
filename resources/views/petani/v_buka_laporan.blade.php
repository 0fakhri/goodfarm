@extends('petani.layouts.app')
@section('content')

<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Buka Inves</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="apply_form_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="/bukaInves" class="apply_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            @foreach($data as $li)
                            @endforeach
                            <input type="hidden" name="id" value="{{$li->id_petani}}">
                            <label>Nama tanaman</label>
                            <input type="text" class="form-control" name="namaTanaman" required>
                        </div>
                        <div class="form-group">
                            <label>Foto tanaman</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label>Bagi hasil petani (dalam %)</label>
                            <input type="number" class="form-control" name="petani" required>
                        </div>
                        <div class="form-group">
                            <label>Bagi hasil investor (dalam %)</label>
                            <input type="number" class="form-control" name="investor" required>
                        </div>
                        <div class="form-group">
                            <label>Harga per benih (dalam Rp) </label>
                            <input type="number" class="form-control" name="hargaBenih" required>
                        </div>
                        <div class="form-group">
                            <label>Total Lot</label>
                            <input type="number" class="form-control" name="lot" required>
                        </div>
                        <div class="form-group">
                            <label>Periode (dalam tahun)</label>
                            <input type="number" class="form-control" name="periode" value="1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <a class="btn btn-secondary" href="/petani/profil">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection