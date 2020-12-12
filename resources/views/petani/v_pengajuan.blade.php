@extends('petani.layouts.app')
@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Data pengajuan</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<main role="main" class="container">
      <!-- <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Bootstrap</h6>
          <small>Since 2011</small>
        </div>
      </div> -->

      <div class="my-3 p-3 bg-white rounded box-shadow bg-dark">
        <h6 class="border-bottom border-gray pb-2 mb-0">Terbaru</h6>
        @foreach($ajuan as $li)
            <div class="media text-muted pt-3">
                <!-- <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded"> -->
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <a href="/petani/data-pengajuan/{{$li->id_buka}}">
                        <strong class="d-block text-gray-dark">{{$li->nama_tanaman}}</strong>
                        Satu investor telah melakukan investasi kepada anda. klik untuk lebih detail.
                        <!-- <img src="{{url($li->foto)}}" alt=""> -->
                    </a>
                </p>
                
            </div>
            
        @endforeach
        
        
        <!-- <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
        </div> -->
        <small class="d-block text-right mt-3">
          <a href="#">All updates</a>
        </small>
      </div>

      
    </main>


@endsection