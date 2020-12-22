@extends('investor.layouts.app')
@section('content')
<style>
        /* body{margin-top:15%;
    background:#eee;
    } */

    /* CONTACTS */
    .contact-box {
    background-color: #ffffff;
    border: 1px solid #e7eaec;
    padding: 20px;
    margin-bottom: 20px;
    }
    .contact-box > a {
    color: inherit;
    }
    .contact-box.center-version {
    border: 1px solid #e7eaec;
    padding: 0;
    }
    .contact-box.center-version > a {
    display: block;
    background-color: #ffffff;
    padding: 20px;
    text-align: center;
    }
    .contact-box.center-version > a img {
    width: 80px;
    height: 80px;
    margin-top: 10px;
    margin-bottom: 10px;
    }
    .contact-box.center-version address {
    margin-bottom: 0;
    }
    .contact-box .contact-box-footer {
    text-align: center;
    background-color: #ffffff;
    border-top: 1px solid #e7eaec;
    padding: 15px 20px;
    }
    a{
        text-decoration:none !important;    
    }
    .rating {
  display: inline-block;
  position: relative;
  height: 20px;
  line-height: 8px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
  font-size: 2.73em;
}

.rating label:last-child .icon {
  color: #797676;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #ffce30;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #797676;
  text-shadow: 0 0 5px #ffce30;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Penilaian</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin: 10px;">
    <div class="row" >
        <div class="card" style="width: 100%;">
            <!-- <div class="card-header">List profil investor</div> -->
            <div class="card-body">
                @foreach($data as $li)
                    @foreach($review as $rev)
                    <div class="col-md-3" style="display: inline-block;">
                        <div class="contact-box center-version">
                            <img src="{{url($li->logo_usaha)}}" alt="" width="200px" style="margin: 20px 50px 20px 50px;">
                            <a href="">

                                <h3 class="m-b-xs" style="margin-bottom: 20px;"><strong>{{$li->nama_petani}}</strong></h3>
                                
                                <div class="font-bold">{{$li->jenis_kelamin}}</div>
                                <address class="m-t-md">
                                    <!-- <strong>Twitter, Inc.</strong><br> -->

                                    {{$li->alamat}}<br>
                                    {{$li->email_petani}}<br>
                                    <abbr title="Phone">No Telp.</abbr> {{$li->no_ponsel_petani}}
                                </address>
                                
                            </a>
                            <div class="contact-box-footer">
                                        @if($rev->petani_id == $li->id_petani)
                                        <span class="pull-center">
                                            @for ($i = 0; $i < $rev->bintang; $i++)
                                                @if ($i < $rev->bintang)
                                                <span class="fa fa-star"></span>
                                                @else
                                                <span class="fa fa-star"></span>
                                                @endif
                                            @endfor
                                        </span>
                                        @endif
                                    </div>
                            <div class="contact-box-footer">
                                    
                                <div class="m-t-xs btn-group">
                                    @if($rev->petani_id == $li->id_petani)
                                        @if($rev->id_penilaian != null)
                                            <a data-toggle="modal" data-target="#edit" class="btn btn-primary">Edit</a>
                                        @endif
                                    @else
                                        <a data-toggle="modal" data-target="#rating{{$li->id_petani}}" class="btn btn-primary">Penilaian</a>
                                    @endif
                                    <!-- <a class="btn btn-xs btn-white" href="mailto:{{$li->email_investor}}"><i class="fa fa-envelope"></i> Email</a> -->
                                    
                                    
                                    <!-- end rating -->
                                        <!-- Modal edit rating-->
                                        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit penilaian</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                                <div class="tab-content profile-tab" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="bulanan" role="tabpanel" aria-labelledby="home-tab">
                                                        <form method="post" action="/editRating">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="text" name="id" value="{{$rev->id_penilaian}}" hidden="">
                                                                    <label for="">Nama Petani</label>
                                                                    <h5>{{$li->nama_petani}}<span style="font-family: initial;font-style: italic;"></span></h5>
                                                                </div>

                                                                <div class="form-group">
                                                                    <h5 for="">Beri Rating</h5><span></span>
                                                                    <div class="rating">
                                                                    <label >
                                                                        <input type="radio" name="rating" value="1" />
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="rating" value="2" />
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="rating" value="3" />
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="rating" value="4" />
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="rating" value="5" />
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                        <span class="icon">★</span>
                                                                    </label>
                                                                    </div>
                                                                    @error('rating')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Komentar</label>
                                                                    <textarea class="form-control" name="review">{{$rev->komentar}}</textarea>
                                                                    @error('review')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>


                                                                </div>
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    <!-- end ratingupdate -->
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>
@foreach($data as $li)
<!-- Modal rating-->
<div class="modal fade" id="rating{{$li->id_petani}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Buat penilaian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="bulanan" role="tabpanel" aria-labelledby="home-tab">
                    <form method="post" action="/postRating">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$li->id_petani}}">
                                <!-- <input type="text" name="id" value="" hidden=""> -->
                                <label for="">Nama Petani</label>
                                <h5>{{$li->nama_petani}}<span style="font-family: initial;font-style: italic;"></span></h5>
                            </div>

                            <div class="form-group">
                                <h5 for="">Beri Rating</h5><span></span>
                                <div class="rating">
                                <label >
                                    <input type="radio" name="rating" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="rating" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="rating" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="rating" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="rating" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                </div>
                                @error('rating')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Komentar</label>
                                <textarea class="form-control" name="review"></textarea>
                                @error('review')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach
@endsection