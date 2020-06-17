<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KaryawanController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api');
    }

    public function getKaryawanData(){
        $karyawan = DB::table('karyawans')
                    ->select('nama', 'email', 'no_hp')
                    ->get();

        return response()->json([
            'data' => $karyawan
        ]);
}
}
