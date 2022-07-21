@extends('layouts.template')

<head>
  <title>Registrasi</title></head>
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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
            <h1>Form Registrasi User</h1>
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
          <h3 class="card-title">Masukkan Data User</h3>

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
            <h3>Data Ibu</h3><br>
            <form action="#" method="POST">
                <div class="form-group">
                    <label>Nama Ibu</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap ..." /> 
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email ..." />
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input class="form-control" type="text" name="no_telp" id="no_telp" placeholder="Nomer Telepon ..." /> 
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="username" name="username" id="username" placeholder="Username ..." /> 
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password ..." /> 
                </div>
                <br>
                <h3>Data Balita</h3><br>
                <div class="form-group">
                    <label>Nama Balita</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap ..." /> 
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tanggal" id="tanggal"/> 
                </div>

                <div class="form-group">
                    <label>Umur</label>
                    <input class="form-control" type="number" name="umur" id="umur" placeholder="Umur Balita ..." /> 
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option>-- Pilih --</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                </div>

                <div> 
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
         </form>
      </div>
    </div>
  </div>