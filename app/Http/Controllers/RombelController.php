<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\Kelas;
use DB;

class RombelController extends Controller
{
    function index() {
        $builder = DB::table('kelas')->get();
        $tampilvaluedata['list_data'] = $builder;
        return view('rombel.index', $tampilvaluedata);
    }

    function getCreateRombel() {
        return view('rombel.create');
    }

    function postCreateRombel() {
        $kelas = Request::get('kelas');
        $nama_kelas = Request::get('nama_kelas');

        DB::table('kelas')->insert([
            "kelas" => $kelas,
            "nama_kelas" => $nama_kelas
        ]);

        return redirect('rombel');
    }

    function getEditRombel($id) {
        $builder = DB::table('kelas')->where("id", $id)->first();
        $tampilvaluedata['Kelas'] = $builder;
        return view('rombel.edit', $tampilvaluedata);
    }

    function postEditRombel() {
        $id = Request::get('id');
        $kelas = Request::get('kelas');
        $nama_kelas = Request::get('nama_kelas');

        DB::table('kelas')->where('id', $id)->update([
            "kelas" => $kelas,
            "nama_kelas" => $nama_kelas
        ]);

        return redirect('rombel');
    }

    function getDeleteRombel($id) {
        DB::table('kelas')->where("id", $id)->delete();

        return redirect('rombel');
    }
}
