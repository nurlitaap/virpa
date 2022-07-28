<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\beratbadan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\datalingkar;
use App\Models\tinggibadan;

class DataController extends Controller
{
  public function saveData(Request $request) {
    $data = $request->all();

    $validator = Validator::make($data, [
      'uid' => ['required', 'string'],
      'name' => ['required', 'string', 'max:255'],
      'jenis_kelamin' => ['required', 'string', 'max:255'],
      'umur' => ['required', 'string', 'max:255'],
      'ttl' => ['required', 'date'],
      'tanggal_masuk' => ['required', 'date'],
      'tinggi_badan' => ['required', 'string', 'max:255'],
      'status_tinggi' => ['required', 'string', 'max:255'],
      'berat_badan' => ['required', 'string', 'max:255'],
      'status_berat' => ['required', 'string', 'max:255'],
      'lingkar_kepala' => ['required', 'string', 'max:255'],
      'status' => ['required', 'string', 'max:255'],
      'gambar' => ['required', 'string'],
      'growthID' => ['required', 'string'],
    ]);
  
    if($validator->fails()){
        $response['response'] = $validator->errors();
        return response()->json([$response], 422);
    }



  tinggibadan::create([
    'uid' => $data['uid'],
    'name' => $data['name'],
    'jenis_kelamin' => $data['jenis_kelamin'],
    'umur' => $data['umur'],
    'ttl' => $data['ttl'],
    'tanggal_masuk' => $data['tanggal_masuk'],
    'tinggi_badan' => $data['tinggi_badan'],
    'status' => $data['status_tinggi'],
    'growthID' => $data['growthID'],
  ]);

  beratbadan::create([
    'uid' => $data['uid'],
    'name' => $data['name'],
    'jenis_kelamin' => $data['jenis_kelamin'],
    'umur' => $data['umur'],
    'ttl' => $data['ttl'],
    'tanggal_masuk' => $data['tanggal_masuk'],
    'berat_badan' => $data['berat_badan'],
    'status' => $data['status_berat'],
    'growthID' => $data['growthID'],
  ]);

  datalingkar::create($data);

  return response()->json([
    'data' => $data,
    'message' => 'Data berhasil ditambahkan'
  ], 200);
  }
}