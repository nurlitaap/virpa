<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\datalingkar;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    //ADMIN
    public function indexAdmin()
    {
        //mengambil data dari tabel users
        $users = DB::table('users')->paginate(5);
        //mengirim data ke view admin/dt_admin
        return view('admin.dt_admin',['users' => $users]);
    }

    public function editAdmin($id)
    {
        //mengambil data users berdasarkan id yang dipilih
        $users = DB::table('users')->where('id',$id)->get();
        //passing data users yang didapat ke view edit.blade.php
        return view('admin.editAdmin', ['users' => $users]);
    }

    public function updateAdmin(Request $request)
    {
        //update data users berdasarkan id
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //alihkan halaman ke halaman data admin
        return redirect('/dtadmin');
    }

    public function hapusAdmin($id)
    {
        //menghapus data users berdasarkan id
        DB::table('users')->where('id', $id)->delete();
        //alihkan halaman he halaman dat admin
        return redirect('/dtadmin');
    }

    public function searchAdmin(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $users = DB::table('users')
        ->where('name','like',"%".$search."%")
        ->orwhere('username','like',"%".$search."%")
        ->paginate(5);
 
            // mengirim data pegawai ke view index
        return view('admin.dt_admin',['users' => $users]);
    }

    //DATA LINGKAR KEPALA
    public function indexdataLK()
    {
        //mengambil data dari tabel datalingkar
        $datalingkar = DB::table('datalingkar')->paginate(5);
        //mengirim data ke view admin/dt_admin
        return view('admin.dataLK',['datalingkar' => $datalingkar]);
    }

    public function editdataLK($id)
    {
        //mengambil data users berdasarkan id yang dipilih
        $datalingkar = DB::table('datalingkar')->where('id',$id)->get();
        //passing data users yang didapat ke view edit.blade.php
        return view('admin.editdataLK', ['datalingkar' => $datalingkar]);
    }

    public function updatedataLK(Request $request)
    {
        //update data users berdasarkan id
        DB::table('datalingkar')->where('id', $request->id)->update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
            'ttl' => $request->ttl,
            'tanggal_masuk' => $request->tanggal_masuk,
            'gambar' => $request->gambar,
        ]);
        //alihkan halaman ke halaman data admin
        return redirect('/dataLK');
    }

    public function hapusdataLK($id)
    {
        //menghapus data users berdasarkan id
        DB::table('datalingkar')->where('id', $id)->delete();
        //alihkan halaman he halaman dat admin
        return redirect('/dataLK');
    }

    public function searchdataLK(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $datalingkar = DB::table('datalingkar')
        ->where('name','like',"%".$search."%")
        ->orwhere('umur','like',"%".$search."%")
        ->orwhere('jenis_kelamin','like',"%".$search."%")
        ->paginate(6);
 
            // mengirim data pegawai ke view index
        return view('admin.dataLK',['datalingkar' => $datalingkar]);
    }
    
    //DATA TINGGI BADAN
    public function indexdataTB()
    {
        //mengambil data dari tabel datatinggibadan
        $datalingkar = DB::table('datalingkar')->paginate(5);
        //mengirim data ke view admin/dt_admin
        return view('admin.dataTB',['datalingkar' => $datalingkar]);
    }

    public function editdataTB($id)
    {
        //mengambil data users berdasarkan id yang dipilih
        $datalingkar = DB::table('datalingkar')->where('id',$id)->get();
        //passing data users yang didapat ke view edit.blade.php
        return view('admin.editdataTB', ['datalingkar' => $datalingkar]);
    }

    public function updatedataTB(Request $request)
    {
        //update data users berdasarkan id
        DB::table('datalingkar')->where('id', $request->id)->update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
            'ttl' => $request->ttl,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tinggi_badan' => $request->tinggi_badan,
            'status_tinggi' => $request->status_tinggi,
        ]);
        //alihkan halaman ke halaman data admin
        return redirect('/dataTB');
    }

    public function hapusdataTB($id)
    {
        //menghapus data users berdasarkan id
        DB::table('datalingkar')->where('id', $id)->delete();
        //alihkan halaman he halaman dat admin
        return redirect('/dataTB');
    }

    public function searchdataTB(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $datalingkar = DB::table('datalingkar')
        ->where('name','like',"%".$search."%")
        ->orwhere('umur','like',"%".$search."%")
        ->orwhere('jenis_kelamin','like',"%".$search."%")
        ->paginate(6);
 
            // mengirim data pegawai ke view index
        return view('admin.dataTB',['datalingkar' => $datalingkar]);
    }
    
    //DATA BERAT BADAN
    public function indexdataBB()
    {
        //mengambil data dari tabel datatinggibadan
        $datalingkar = DB::table('datalingkar')->paginate(5);
        //mengirim data ke view admin/dt_admin
        return view('admin.dataBB',['datalingkar' => $datalingkar]);
    }

    public function editdataBB($id)
    {
        //mengambil data users berdasarkan id yang dipilih
        $datalingkar = DB::table('datalingkar')->where('id',$id)->get();
        //passing data users yang didapat ke view edit.blade.php
        return view('admin.editdataBB', ['datalingkar' => $datalingkar]);
    }

    public function updatedataBB(Request $request)
    {
        //update data users berdasarkan id
        DB::table('datalingkar')->where('id', $request->id)->update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
            'ttl' => $request->ttl,
            'tanggal_masuk' => $request->tanggal_masuk,
            'berat_badan' => $request->berat_badan,
            'status_berat' => $request->status_berat,
        ]);
        //alihkan halaman ke halaman data admin
        return redirect('/dataBB');
    }

    public function hapusdataBB($id)
    {
        //menghapus data users berdasarkan id
        DB::table('datalingkar')->where('id', $id)->delete();
        //alihkan halaman he halaman dat admin
        return redirect('/dataBB');
    }

    public function searchdataBB(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $datalingkar = DB::table('datalingkar')
        ->where('name','like',"%".$search."%")
        ->orwhere('umur','like',"%".$search."%")
        ->orwhere('jenis_kelamin','like',"%".$search."%")
        ->paginate(6);
 
            // mengirim data pegawai ke view index
        return view('admin.dataBB',['datalingkar' => $datalingkar]);
    }
}
