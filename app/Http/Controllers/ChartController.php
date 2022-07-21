<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datalingkar;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function grafikLK(){
    // 	$lingkar = datalingkar::select("*")->whereBetween('lingkar_kepala',[30,34],[34,38],[38,42],[42,46],[46,50])->count();
    //     $uploadlingkar = [];
    //     if (is_array($lingkar) || is_object($lingkar)){
    //     	foreach ($lingkar as $key => $valuelingkar) {
    //         $uploadlingkar[] = DB::table('datalingkar')->where(DB::raw("(lingkar_kepala)"),$valuelingkar)->count();
    //     }
    //     }
    //     dd($lingkar);
    //     $grafik = ['lingkar'=> json_encode($lingkar,JSON_NUMERIC_CHECK),];
    	$lingkar = datalingkar::get();
    	$xAxis = [];
    	$series = [];
    	foreach($lingkar as $item){
    		array_push($xAxis, $item->name);

    		$angka = explode(" ",$item->lingkar_kepala);
    		array_push($series, floatval($angka[0]));
    	}
    	// $xAxis = json_encode($xAxis);
    	// $series = json_encode($series);
        // dd($series);
        return view('admin.grafikLK', compact('xAxis','series'));
    }
}
