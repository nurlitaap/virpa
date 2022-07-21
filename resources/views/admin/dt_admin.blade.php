@extends('layouts.template')

<head>
	<title>Data Admin</title></head>
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
            <h1>Data Admin</h1>
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
          <h3 class="card-title">Tabel Data Admin</h3>

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
                              <form action="/dtadmin2" method="GET">
                                <div class="input-group col-md-4">
                                  <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                                  <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                                </form>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Admin</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th width="13%">Aksi</th>
                                        </tr>
                                        @foreach($users as $user)
                                        <tr>
                                          <td>{{ $user->id }}</td>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->username }}</td>
                                          <td>{{ $user->email }}</td>
                                          <td>xxxxxxxx</td>
                                          <td>
                                            <a href="/dtadmin/edit/{{ $user->id }}" class="btn btn-warning" ><i class="fa fa-edit"></i></a>
                                            <a href="/dtadmin/hapus/{{ $user->id }}" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
                                          </td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                    <tbody>
                                    </table>
                                    Jumlah Data : {{ $users->total() }} <br/>

                                  </div>
                        </div>
                     </div>
                   </div>
     </div>
        </div>