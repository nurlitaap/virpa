@extends('layouts.template')

<body>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Mengubah Data Admin</h1>
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
          <h3 class="card-title">Masukkan Data Diri Anda</h3>

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
            @foreach($users as $user)
            <form action="/dtadmin/update" method="POST">
            {{ @csrf_field() }}
            <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" placeholder="Nama Lengkap ..." /> 
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" id="username" value="{{ $user->username }}"placeholder="Username ..." />  
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}"placeholder="Email ..." /> 
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password ...">
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