<?php

namespace App\Http\Controllers;

use App\barang;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class barangController extends Controller
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
        return view('barang.index');
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
            'nama'          => 'required|string',
            'satuan' 		=> 'required',
            'berat'			=> 'required'
        ]);

        $input = $request->all();
        barang::create($input);
            return response()->json([
            'success' => true,
            'message' => 'Barang Disimpan'
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
        $data = barang::find($id);
        return $data;
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = barang::find($id);
        return $data;
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
        $this->validate($request , [
            'nama'          => 'required|string',
            'satuan'		=> 'required',
            'berat'			=> 'required'
        ]);

        $input = $request->all();
        $data = barang::findOrFail($id);
        $data->update($input);

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
        $data = barang::findOrFail($id);
        barang::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Penghapusan data berhasil..'
        ]);
    }

    public function apibarang(){
        $data = barang::all();

        return Datatables::of($data)
            ->addColumn('id', function ($data){
                return $data->id;
            })

            ->addColumn('nama', function ($data){
                return $data->nama;
            })
            
            ->addColumn('berat', function ($data){
                return $data->berat;
            })

            ->addColumn('action', function($data){
                return '<a onclick="viewdata('. $data->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> LIhat</a> ' .
                    '<a onclick="editForm('. $data->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    '<a onclick="deleteData('. $data->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';
            })
            
            ->make(true);
    }
}