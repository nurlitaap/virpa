@extends('layouts.template')

<head>
  <title>Deteksi</title></head>
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
      </li>
       <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
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
            <h1>Proses Deteksi</h1>
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
          <h3 class="card-title">Deteksi Lingkar Kepala Bayi</h3>

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

          <form action="/deteksi" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Nama Lengkap ..." /> 
            </div>
            <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option>-- Pilih --</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
            </div>
            <div class="form-group">
                    <label>Umur</label>
                    <input class="form-control" type="text" name="umur" id="umur" placeholder="Umur ..." />
            </div>
            <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="ttl" id="ttl" placeholder="Tempat Lahir ..." />
            </div>
            <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input class="form-control" type="date" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk ..." />
            </div>
            <div class="form-group">
                    <label>Tinggi Badan</label>
                    <input class="form-control" type="text" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan ..." />
            </div>
            <div class="form-group">
                    <label>Status Tinggi</label>
                    <select class="form-control" name="status_tinggi">
                      <option>-- Pilih --</option>
                      <option>Severly Stunted</option>
                      <option>Stunted</option>
                      <option>Normal</option>
                      <option>Tinggi</option>
                    </select>
            </div>
            <div class="form-group">
                    <label>Berat Badan</label>
                    <input class="form-control" type="text" name="berat_badan" id="berat_badan" placeholder="Berat Badan ..." />
            </div>
            <div class="form-group">
                    <label>Status Berat</label>
                    <select class="form-control" name="status_berat">
                      <option>-- Pilih --</option>
                      <option>Severly UnderWeight</option>
                      <option>Underweight</option>
                      <option>Normal</option>
                      <option>Overweight</option>
                    </select>
            </div>
            <div class="form-group">
              <label>Upload File Gambar</label>
              <p class="image_upload">
                <input type="file" name="gambar" id="gambar">
              </p>
            </div>
            <div> 
                    <button type="submit" class="btn btn-primary">Proses</button>
            </div>
          </form>

        </div>
    </div>
  </div>