<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\Absen;
use App\Models\Siswa;
use DB;

class AbsenController extends Controller
{
    function index() {
        $builder = DB::table('absen')->get();
        $data_result['list_data'] = $builder;
        return view('absen.index', $data_result);
    }

    function getCreateAbsen() {
        return view('absen.create');
    }

    function postCreateAbsen() {
        $id_siswa = Request::get('id');
        $status = Request::get('status');
        $keterangan = Request::get('keterangan');

        DB::table('absen')->insert([
            'id_siswa' => $id_siswa,
            'status' => $status,
            'keterangan' => $keterangan
        ]);

        return redirect('absen');
    }

    function getEditAbsen($id) {
        $builder = DB::table('absen')->where('id', $id)->first();
        $result_data['Absen'] = $builder;
        return view('absen.edit', $result_data);
    }

    function postEditAbsen() {
        $id = Request::get('id');
        $id_siswa = Request::get('id_siswa');
        $status = Request::get('status');
        $keterangan = Request::get('keterangan');

        DB::table('absen')->where('id', $id)->update([
            'id_siswa' => $id_siswa,
            'status' => $status,
            'keterangan' => $keterangan
        ]);

        return redirect('absen');
    }

    function cariAbsen() {
        $id = Request::get('id');
        if ($id == '' ) {

            $data['val'] = 2;

        }else {

            $isi = Siswa::where('nis', '=', $id)->first();
            if (empty($isi)) {

                $data['val'] = 0;

            }else {

                $data['val'] = 1;
                $data['data'] = $isi;

            }
        }

        return Response($data);
    }

    function deleteAbsen($id) {
        DB::table('absen')->where('id', $id)->delete();

        return redirect('absen');
    }
}
