@extends('admin.layouts.master')
@section('content')
    <!-- <div class="col text-right"> -->
<div class="row">
</div>
<!-- Table -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="col-sm-12 col-md-6">
    <h6 class="m-0 font-weight-bold text-primary">Data Petani dan Investor</h6>
    </div>
  </div>
  <div class="card-body" style="font-size: 15px;">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead style="background-color: #ddd;">
          <tr class="text-center">
              <th>Nama</th>
              <th>username</th>
              <th>E-mail</th>
              <th>No HP</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Provinsi</th>
              <th>Verifikasi</th>
          </tr>
        </thead>
              @foreach($data as $user)
        <tbody>
          <tr class="text-center">
              <td><a href="">{{$user->nama_investor}}</a></td>
              <td><a href="">{{$user->username}}</a></td>
              <td>{{$user->email_investor}}</td>
              <td>{{$user->no_ponsel_investor}}</td>
              <td>{{$user->alamat}}</td>
              <td>{{$user->kota}}</td>
              <td>{{$user->provinsi}}</td>
              <td></td>
          </tr>
          </tbody>
          @endforeach
      </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead style="background-color: #ddd;">
          <tr class="text-center">
              <th>Nama</th>
              <th>username</th>
              <th>E-mail</th>
              <th>No HP</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Provinsi</th>
              <th>Verifikasi</th>
          </tr>
        </thead>
              @foreach($data2 as $user2)
        <tbody>
          <tr class="text-center">
              <td><a href="">{{$user2->nama_petani}}</a></td>
              <td><a href="">{{$user->username}}</a></td>
              <td>{{$user2->email_petani}}</td>
              <td>{{$user2->no_ponsel_petani}}</td>
              <td>{{$user2->alamat}}</td>
              <td>{{$user2->kota}}</td>
              <td>{{$user2->provinsi}}</td>
              <td>
                <form action="" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{ $user2->id_petani }}">
                  <input type="hidden" name="status" value="Diterima">
                  <button type="submit">Terima</button>
                </form>
                <form action="" method="post">
                  <input type="hidden" name="id" value="{{ $user2->id_petani }}">
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