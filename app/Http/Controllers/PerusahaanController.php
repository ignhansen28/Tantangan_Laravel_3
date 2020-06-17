<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PerusahaanController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api');
    }

    public function getEventPerusahaanKaryawanData(){
        $eventPerusahaanKaryawan = DB::table('perusahaans')
                                ->join('karyawans', 'perusahaan_id', '=', 'karyawans.perusahaan_id')
                                ->join('events', 'event_id', '=', 'perusahaans.event_id')
                                ->select('nama_event','tanggal_event','nama_perusahaan','karyawans.nama', 'email', 'no_hp')
                                ->get();

        return response()->json([
            'data' => $eventPerusahaanKaryawan
        ]);

    }
}
