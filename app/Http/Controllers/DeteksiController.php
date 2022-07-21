<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\datalingkar;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DeteksiController extends Controller
{
    public function datalingkar()
    {
        return view('admin.deteksi');
    }

     public function datalingkarStore(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'umur' => ['required', 'string', 'max:255'],
            'ttl' => ['required', 'date'],
            'tanggal_masuk' => ['required', 'date'],
            'tinggi_badan' => ['required', 'string', 'max:255'],
            'status_tinggi' => ['required', 'string', 'max:255'],
            'berat_badan' => ['required', 'string', 'max:255'],
            'status_berat' => ['required', 'string', 'max:255'],
            'gambar' => ['required'],
        ]);

        $data = $request->all();
        // dd($data);
        $data['gambar'] = $request->file('gambar')->store(
            'assets/image', 'public'
        );

        $command = 'py string.py "storage/'.$data['gambar'].'"';
        // dd($command);
        $process = exec($command);
        // dd($process);
        $data['lingkar_kepala'] = $process;
        $status = "";
        $split = explode(" ", $process);
        $umur_split = explode(" ", $data["umur"]);
        $umur = $umur_split[0];
        $hasil = $split[0];

        if($umur == 0) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 32 <= $hasil && $hasil <= 37) {
                    $status = "Normal";
                } else if ( $hasil < 32 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 37) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 31.5 <= $hasil && $hasil <= 36.8) {
                    $status = "Normal";
                } else if ( $hasil < 31.5 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 36.8) {
                    $status = "Diatas Normal";
                }
            }
        }
        else if($umur == 1) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 34.7 <= $hasil && $hasil <= 40) {
                    $status = "Normal";
                } else if ( $hasil < 34.7 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 40) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 34 <= $hasil && $hasil <= 39) {
                    $status = "Normal";
                } else if ( $hasil < 34 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 39) {
                    $status = "Diatas Normal";
                }
            }
        }
        else if($umur == 2) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 36.5 <= $hasil && $hasil <= 41.5) {
                    $status = "Normal";
                } else if ( $hasil < 36.5 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 41.5) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 37.8 <= $hasil && $hasil <= 41) {
                    $status = "Normal";
                } else if ( $hasil < 37.8 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 41) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 3) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 38 <= $hasil && $hasil <= 42.7) {
                    $status = "Normal";
                } else if ( $hasil < 38 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 42.7) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 37 <= $hasil && $hasil <= 42) {
                    $status = "Normal";
                } else if ( $hasil < 37 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 42) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 4) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 39.3 <= $hasil && $hasil <= 44) {
                    $status = "Normal";
                } else if ( $hasil < 39.3 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 44) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 38 <= $hasil && $hasil <= 43) {
                    $status = "Normal";
                } else if ( $hasil < 38 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 43) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 5) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 40 <= $hasil && $hasil <= 45) {
                    $status = "Normal";
                } else if ( $hasil < 40 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 45) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 38.9 <= $hasil && $hasil <= 44) {
                    $status = "Normal";
                } else if ( $hasil < 38.9 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 44) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 6) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 41 <= $hasil && $hasil <= 45.7) {
                    $status = "Normal";
                } else if ( $hasil < 41 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 45.7) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 39.5 <= $hasil && $hasil <= 44.8) {
                    $status = "Normal";
                } else if ( $hasil < 39.5 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 44.8) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 7) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 41.5 <= $hasil && $hasil <= 46.5) {
                    $status = "Normal";
                } else if ( $hasil < 41.5 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 46.5) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 40.1 <= $hasil && $hasil <= 45.5) {
                    $status = "Normal";
                } else if ( $hasil < 40.1 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 45.5) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 8) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 42 <= $hasil && $hasil <= 47) {
                    $status = "Normal";
                } else if ( $hasil < 42 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 47) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 40.8 <= $hasil && $hasil <= 46) {
                    $status = "Normal";
                } else if ( $hasil < 40.8 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 46) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 9) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 42.5 <= $hasil && $hasil <= 47.5) {
                    $status = "Normal";
                } else if ( $hasil < 42.5 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 47.5) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 41.2 <= $hasil && $hasil <= 46.5) {
                    $status = "Normal";
                } else if ( $hasil < 41.2 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 46.5) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 10) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 43 <= $hasil && $hasil <= 48) {
                    $status = "Normal";
                } else if ( $hasil < 43 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 48) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 41.5 <= $hasil && $hasil <= 47) {
                    $status = "Normal";
                } else if ( $hasil < 41.5 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 47) {
                    $status = "Diatas Normal";
                }
            }
        }
         else if($umur == 11) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 43.3 <= $hasil && $hasil <= 48.4) {
                    $status = "Normal";
                } else if ( $hasil < 43.3 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 48.4) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 41.8 <= $hasil && $hasil <= 47.3) {
                    $status = "Normal";
                } else if ( $hasil < 41.8 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 47.3) {
                    $status = "Diatas Normal";
                }
            }
        }
        else if($umur == 12) {
            if( $data['jenis_kelamin'] == "Laki-laki") {
                if( 43.5 <= $hasil && $hasil <= 48.6) {
                    $status = "Normal";
                } else if ( $hasil < 43.5 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 48.6) {
                    $status = "Diatas Normal";
                }
            } else {
                if( 42.2 <= $hasil && $hasil <= 47.6) {
                    $status = "Normal";
                } else if ( $hasil < 42.2 ) {
                    $status = "Dibawah Normal";
                } else if( $hasil > 47.6 ) {
                    $status = "Diatas Normal";
                }
            }
        }

         
        $data['status'] = $status;
        // dd($request);
        datalingkar::create($data);
        return back()->with('Selesai','Data Berhasil Disimpan');
    }

    protected function create(array $data)
    {
        return datalingkar::create([
            'name' => $data['name'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'umur' => $data['umur'],
            'ttl' => $data['ttl'],
            'tanggal_masuk' => $data['tanggal_masuk'],
            'tinggi_badan' => $data['tinggi_badan'],
            'status_tinggi' => $data['status_tinggi'],
            'berat_badan' => $data['berat_badan'],
            'status_berat' => $data['status_berat'],
            'gambar' => $data['gambar'],
            'lingkar_kepala' => $data['lingkar_kepala']
        ]);
    }

    public function python()
    {
        $text = 'coba';
        $process = exec('py string.py "storage/assets/image/StIzyHD62uxuAojvoh1glBTXdlvJy957CgCk3YpP.jpg"');
        // $process->run();
        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);}
         echo $process;
        // Result (string): {'neg': 0.204, 'neu': 0.531, 'pos': 0.265, 'compound': 0.1779}
    }
}
