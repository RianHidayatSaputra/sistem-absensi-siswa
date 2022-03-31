<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\Absen;
use App\Models\Siswa;
use DB;

class LaporanController extends Controller
{
    
    function laporan() {
        $default_result = Request::get('bulan');
        if($default_result == ''){
            $default_result = date('m');
        }
        $query = DB::table('absen')->join('siswa', 'siswa.id', '=', 'absen.id_siswa')->select('absen.id', 'absen.id_siswa', 'siswa.nis', 'siswa.nama', 'siswa.rombel', 'siswa.rayon', 'absen.status', 'absen.keterangan', 'absen.created_at')->whereMonth('absen.created_at', $default_result)->get();
        $result['datas'] = $query;

        return view('laporan.index', $result);
    }

    function cetakLaporan() {
        $query = DB::table('absen')->join('siswa', 'siswa.id', '=', 'absen.id_siswa')->select('absen.id', 'absen.id_siswa', 'siswa.nis', 'siswa.nama', 'siswa.rombel', 'siswa.rayon', 'absen.status', 'absen.keterangan', 'absen.created_at')->whereMonth('absen.created_at', Request::get('bulan'))->get();
        $result['datas'] = $query;

        return view('laporan.cetak', $result);
    }
}
