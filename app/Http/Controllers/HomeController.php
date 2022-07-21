<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datalingkar;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
   
    
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //mengambil data dari tabel datalingkar
        $datalingkar = DB::table('datalingkar')->paginate(5);
        //mengirim data ke view admin/dt_admin
        return view('admin.dashboard',['datalingkar' => $datalingkar]);
    }
    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $datalingkar = DB::table('datalingkar')
        ->where('name','like',"%".$search."%")
        ->orwhere('umur','like',"%".$search."%")
        ->orwhere('jenis_kelamin','like',"%".$search."%")
        ->paginate(6);
        
        $lingkar = datalingkar::where('name','like',"%".$search."%")->get();
        $xAxis = [];
        $series = [];
        $series1 = [];
        $series2 = [];
        foreach($lingkar as $item){
            array_push($xAxis, $item->tanggal_masuk);

            $angka = explode(" ",$item->lingkar_kepala);
            array_push($series, floatval($angka[0]));

            $angka1 = explode(" ",$item->tinggi_badan);
            array_push($series1, floatval($angka1[0]));

            $angka2 = explode(" ",$item->berat_badan);
            array_push($series2, floatval($angka2[0]));
        }
        // $xAxis = json_encode($xAxis);
        // $series = json_encode($series);
        // dd($series);
        // return view('admin.dashboard', compact('xAxis','series'));
    
 
            // mengirim data pegawai ke view index
        return view('admin.dashboard',['datalingkar' => $datalingkar, 'xAxis' => $xAxis, 'series'=>$series, 'series1'=>$series1, 'series2'=>$series2]);
    }

}
