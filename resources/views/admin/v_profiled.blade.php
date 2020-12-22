@extends('admin.layouts.master')
@section('content')
 <div class="row">
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

@foreach($data as $li)
@endforeach
    <div class="col-sm col-md-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/dashboard">&nbsp;Home&nbsp;</a></li>
            <li>&#47;&nbsp;<i class="fa fa-user"></i><a href="/profil">&nbsp;Profil&nbsp;</a></li>
            <li>&#47;&nbsp;<i class="fa fa-user"></i>&nbsp;{{$li->nama_petani}}&nbsp;</li>
        </ol>
        <div class="card shadow text-primary border-left-primary">
            <div class="card-header text-center"><h4><i class="fa fa-user">&nbsp;Profil Petani</i></h4></div><br>
                <div class="row col-12 card-text">
                    <div class="col-xl-3 sm-2 md-2 text-center ">
                        <div class="img" style="text-align: center;">
                        @if($li->logo_usaha != null)
                            <img class="img-profile" src="{{ url($li->logo_usaha) }}" alt="foto" style="width: 100px;  margin-top   : 15px;">
                        @endif
                        </div>
                    <!-- <h6>{{auth()->user()->role}}</h6> -->
                        <div style=" margin-bottom: 10px">
                            <!-- <a href="/dataku/edit/{{auth()->user()->id}}" class="btn btn-danger">Edit</a> -->
                        </div>
                    </div>
                    <div class="col-xl-7 sm-4 md-4 text-info">
                    
                        <div class="row">
                                <div class="col-md-6">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->nama_petani}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tanggal lahir</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->tanggal_lahir_petani}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Jenis kelamin</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->jenis_kelamin}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Jenis identitas</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->jenis_identitas}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>No. Indentitas</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->no_identitas_petani}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->email_petani}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>No. Handphone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->no_ponsel_petani}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$li->alamat}}</p>
                                </div>
                            </div>
                            <hr>
                        <div id="chart">
                    
                        </div>
                    </div>
                </div>
        </div>
    </div>
            <div class="row" style="margin: 10px;">
                
            </div>
            
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
var data_laba = <?php echo $data3; ?>;

    Highcharts.chart('chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Laba rugi'
        },
        subtitle: {
            // text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [
                'Panen 1',
                'Panen 2',
                'Panen 3',
                'Panen 4',
                'Panen 5',
                'Panen 6',
                'Panen 7',
                'Panen 8',
                'Panen 9',
                'Panen 10',
                'Panen 11',
                'Panen 12'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Penerimaan (Rp)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>Rp {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '',
            data: data_laba
            // [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        },]
    });
</script>
@endsection
