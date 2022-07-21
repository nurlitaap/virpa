@extends('layouts.template')

<body>
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
        	@foreach($datalingkar as $dtlk)
          <form action="/dataLK/update" method="POST">
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
              <label>Upload File Gambar</label>
              <p class="image_upload">
                <input type="file" name="gambar" id="gambar" value="{{ $dtlk->gambar }}">
              </p>
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