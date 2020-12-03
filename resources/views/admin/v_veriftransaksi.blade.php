@extends('admin.layouts.master')
@section('content')
    <!-- <div class="col text-right"> -->
<div class="row">
</div>
<!-- Table -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="col-sm-12 col-md-6">
    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
    </div>
  </div>
  <div class="card-body" style="font-size: 15px;">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead style="background-color: #ddd;">
          <tr class="text-center">
              <th>Nama</th>
              <th>Jumlah modal</th>
              <th>Nama bank</th>
              <th>Bukti pembayaran</th>
              <th>Verifikasi</th>
          </tr>
        </thead>
              @foreach($data as $li)
        <tbody>
          <tr class="text-center">
              <td><a href="">{{$li->nama_investor}}</a></td>
              <td><a href="">{{$li->jumlah_modal}}</a></td>
              <td>{{$li->nama_bank}}</td>
              <td><img src="{{url($li->bukti_pembayaran)}}" alt=""></td>
              
              <td>
                <form action="/terima" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $li->id_investor }}">
                    <input type="hidden" name="status" value="Diterima">
                    <button type="submit">Terima</button>
                  </form>
                  <form action="/tolak" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $li->id_investor }}">
                    <input type="hidden" name="status" value="Ditolak">
                    <button type="submit">Menolak</button>
                  </form>
              </td>
          </tr>
          </tbody>
          @endforeach
      </table>
    </div>
  </div>
</div>
@endsection