@extends('layouts.template')

<head>
  <title>Dashboard</title></head>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-cog"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Data Balita</span>
            <span class="info-box-number">{{ $datalingkar->total() }}</span>
          </div></div></div></div>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form action="/home" method="GET">
                            <div class="input-group col-md-4">
                              <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                              <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                            </form>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bayi</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Umur</th>
                                            <th>TTL</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Lingkar Kepala</th>
                                            <th>Status Lingkar Kepala</th>
                                            <th>Tinggi Badan</th>
                                            <th>Status Tinggi Badan</th>
                                            <th>Berat Badan</th>
                                            <th>Status Berat Badan</th>
                                        </tr>
                                        @foreach($datalingkar as $dtlk)
                                        <tr>
                                          <td>{{ $dtlk->id }}</td>
                                          <td>{{ $dtlk->name }}</td>
                                          <td>{{ $dtlk->jenis_kelamin }}</td>
                                          <td>{{ $dtlk->umur }}</td>
                                          <td>{{ $dtlk->ttl }}</td>
                                          <td>{{ $dtlk->tanggal_masuk }}</td>
                                          <td>{{ $dtlk->lingkar_kepala }}</td>
                                          <td>{{ $dtlk->status }}</td>
                                          <td>{{ $dtlk->tinggi_badan }}</td>
                                          <td>{{ $dtlk->status_tinggi }}</td>
                                          <td>{{ $dtlk->berat_badan }}</td>
                                          <td>{{ $dtlk->status_berat }}</td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                    <tbody>
                                    </table>
                                    Jumlah Data : {{ $datalingkar->total() }} <br/>

                                    {{ $datalingkar->links('pagination::bootstrap-5') }}
                        </div>
                     </div>
                   </div>
     </div>
</div>
</div>
 <div id="container" style="width:1050px;height:400px;"></div>
      <script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" style="width:30%;max-width:200px">
    
    Highcharts.chart('container', {
        title: {
            text: 'Grafik Pertumbuhan Balita'
        },
         xAxis: {
          
            categories: {!! json_encode($xAxis) !!}
        },
        yAxis: {
            title: {
                text: 'Nilai Ukuran (Lingkar=cm, Tinggi=cm, Berat=kg)'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Lingkar Kepala',
            data:{!! json_encode($series) !!}},
            {
             name: 'Tinggi Badan',
            data:{!! json_encode($series1) !!}},
            {
            name: 'Berat Badan',
            data:{!! json_encode($series2) !!},              
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 20
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
 </script>