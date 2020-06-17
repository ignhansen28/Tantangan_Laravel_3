<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Validator;
use DB;

class EventController extends Controller
{
    public function getEventData(){
        $event = DB::table('events')
                ->select('nama_event','tanggal_event')
                ->get();

        return response()->json([
            'data' => $event
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = DB::table('events')->get();
        return response()->json([
            'status' =>200,
            'data' => $karyawan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request,[
            'nama_event' => 'required',
            'tanggal_event' =>'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' =>$validator->errors()
            ]);
        }

        Event::create([
            'nama_event' => $request->nama_event,
            'tanggal_event' => $request->tanggal_event
        ]);

        return response()->json([
            'message' => 'Sukses Input Event'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
