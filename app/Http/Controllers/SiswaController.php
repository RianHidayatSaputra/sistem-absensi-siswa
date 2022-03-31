<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
Use App\Models\Siswa;
use DB;


class SiswaController extends Controller
{
    function index() {
        $builder = DB::table('siswa')->get();
        $tampildata['list_data'] = $builder;
        return view('siswa.index', $tampildata);
    }

    function getCreateSiswa() {
        return view("siswa.create");
    }

    function postCreateSiswa(Request $request) {
        $nis = Request::get("nis");
        $nama = Request::get("nama");
        $rombel = Request::get("rombel");
        $rayon = Request::get("rayon");

        DB::table('siswa')->insert([
            'nis' => $nis,
            'nama' => $nama,
            'rombel' => $rombel,
            'rayon' => $rayon
        ]);

        return redirect('siswa');
    }

    function getEditSiswa($id) {
        $builder = DB::table('siswa')->where('id',$id)->first();
        $tampildata['Siswa'] = $builder;
        return view('siswa.edit', $tampildata);
    }
    
    function postEditSiswa() {
        $id = Request::get('id');
        $nis = Request::get('nis');
        $nama = Request::get('nama');
        $rombel = Request::get('rombel');
        $rayon = Request::get('rayon');

        DB::table('siswa')->where('id', $id)->update([
            'nis' => $nis,
            'nama' => $nama,
            'rombel' => $rombel,
            'rayon' => $rayon
        ]);

        return redirect('siswa');
    }

    function delete($id) {
        DB::table('siswa')->where('id', $id)->delete();

        return redirect('siswa');
    }
}
