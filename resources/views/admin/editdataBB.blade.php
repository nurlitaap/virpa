@extends('layouts.template')

<body>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Berat Badan</h1>
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
          <h3 class="card-title">Berat Badan Balita</h3>

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
        	@foreach($datalingkar as $dtlk)
          <form action="/dataBB/update" method="POST">
            {{ @csrf_field() }}
            <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Nama Lengkap ..." value="{{ $dtlk->name }}"> 
            </div>
            <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" value="{{ $dtlk->jenis_kelamin }}">
                      <option>-- Pilih --</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
            </div>
            <div class="form-group">
                    <label>Umur</label>
                    <input class="form-control" type="text" name="umur" id="umur" placeholder="Umur ..." value="{{ $dtlk->umur }}"> 
            </div>
            <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="ttl" id="ttl" placeholder="Tempat Lahir ..." value="{{ $dtlk->ttl }}">
            </div>
            <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input class="form-control" type="date" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk ..." value="{{ $dtlk->tanggal_masuk }}">
            </div>
            <div class="form-group">
                    <label>Berat Badan</label>
                    <input class="form-control" type="text" name="berat_badan" id="berat_badan" placeholder="Berat Badan ..." value="{{ $dtlk->berat_badan }}">
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
            <div> 
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        @endforeach
        </div>
    </div>
  </div>
</body>
</html>