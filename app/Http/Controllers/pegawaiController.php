<?php

namespace App\Http\Controllers;

use App\pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class pegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin,staff');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.index');
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request , [
            'id'            => 'required',
            'nama'          => 'required|string'
        ]);

        $input = $request->all();
        pegawai::create($input);
            return response()->json([
            'success' => true,
            'message' => 'Data disimpan'
        ]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brg = pegawai::find($id);
        return $brg;
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $brg = pegawai::find($id);
        return $brg;
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
        
        $input = $request->all();
        $brg = pegawai::findOrFail($id);
        $brg->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Ok !'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brg = pegawai::findOrFail($id);
        pegawai::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Penghapusan data berhasil..'
        ]);
    }

    public function apiPegawai(){
        $brg = pegawai::all();

        return Datatables::of($brg)
            ->addColumn('id', function ($brg){
                return $brg->id;
            })

            ->addColumn('name', function ($brg){
                return $brg->name;
            })

            ->addColumn('action', function($brg){
                return '<a onclick="viewdata('. $brg->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> LIhat</a> ';
            })
            
            ->make(true);
    }
}