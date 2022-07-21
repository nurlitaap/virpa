@extends('layouts.template')

<head>
  <title>Data Lingkar Kepala</title></head>
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
            <h1>Data Lingkar Kepala</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Lingkar Kepala Bayi</h3>

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
                            <form action="/dataLK2" method="GET">
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
                                            <th>Tanggal Lahir</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Lingkar Kepala</th>
                                            <th>Status Pertumbuhan</th>
                                            <th width="13%">Aksi</th>
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
                                          <td>
                                            <a href="/dataLK/edit/{{ $dtlk->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i></a>
                                            <a href="/dataLK/hapus/{{ $dtlk->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
                                          </td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                    <tbody>
                                    </table>
                                    Jumlah Data : {{ $datalingkar->total() }} <br/>

                                    {{ $datalingkar->links('pagination::bootstrap-5') }}
                                    <br><br>
                                    <h5>Data Lingkar Kepala Normal</h5>
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Usia</th>
                                            <th>Laki-laki</th>
                                            <th>Perempuan</th>
                                        </tr>
                                        <tr>
                                          <td>0 bulan</td>
                                          <td>32 - 37 cm</td>
                                          <td>31,5 - 36,8 cm</td>
                                        </tr>
                                        <tr>
                                          <td>1 bulan</td>
                                          <td>34,7 - 40 cm</td>
                                          <td>34 - 39 cm</td>
                                        </tr>
                                        <tr>
                                          <td>2 bulan</td>
                                          <td>36,5 - 41,5 cm</td>
                                          <td>37,8 - 41 cm</td>
                                        </tr>
                                        <tr>
                                          <td>3 bulan</td>
                                          <td>38 - 42,7 cm</td>
                                          <td>37 - 42 cm</td>
                                        </tr>
                                        <tr>
                                          <td>4 bulan</td>
                                          <td>39,3 - 44 cm</td>
                                          <td>38 - 43 cm</td>
                                        </tr>
                                        <tr>
                                          <td>5 bulan</td>
                                          <td>40 - 45 cm</td>
                                          <td>38,9 - 44 cm</td>
                                        </tr>
                                        <tr>
                                          <td>6 bulan</td>
                                          <td>41 - 45,7 cm</td>
                                          <td>39,5 - 44,8 cm</td>
                                        </tr>
                                        <tr>
                                          <td>7 bulan</td>
                                          <td>41,5 - 46,5 cm</td>
                                          <td>40,1 - 46,5 cm</td>
                                        </tr>
                                        <tr>
                                          <td>8 bulan</td>
                                          <td>42 - 47 cm</td>
                                          <td>40,8 - 46 cm</td>
                                        </tr>
                                        <tr>
                                          <td>9 bulan</td>
                                          <td>42,5 - 47,5 cm</td>
                                          <td>41,2 - 46,5 cm</td>
                                        </tr>
                                        <tr>
                                          <td>10 bulan</td>
                                          <td>43 - 48 cm</td>
                                          <td>41,5 - 47 cm</td>
                                        </tr>
                                        <tr>
                                          <td>11 bulan</td>
                                          <td>43,3 - 48,4 cm</td>
                                          <td>41,8 - 47,3 cm</td>
                                        </tr>
                                        <tr>
                                          <td>12 bulan</td>
                                          <td>43,5 - 48,6 cm</td>
                                          <td>42,2 - 47,6 cm</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </table>
                                  </div>
                                </tbody>
                        </div>
                     </div>
                   </div>
     </div>
        </div>