<?php

namespace App\Http\Controllers;

use App\supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class supplierController extends Controller
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
    {   $sup = supplier::all();
        return view('supplier.index');
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
            'id'          => 'required'
        ]);

        $input = $request->all();
        supplier::create($input);
            return response()->json([
            'success' => true,
            'message' => 'Supplier Disimpan'
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
        $sup = supplier::find($id);
        return $sup;
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $sup = supplier::find($id);
        return $sup;
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
            'id'            => 'required|string',
            'nama'          => 'required'
        ]);

        $input = $request->all();
        $sup = supplier::findOrFail($id);
        $sup->update($input);

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
        $sup = supplier::findOrFail($id);
        supplier::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Penghapusan data berhasil..'
        ]);
    }

    public function apiSupplier(){
        $sup = supplier::all();

        return Datatables::of($sup)
            ->addColumn('id', function ($sup){
                return $sup->id;
            })

            ->addColumn('nama', function ($sup){
                return $sup->nama;
            })

            ->addColumn('action', function($sup){
                return '<a onclick="viewdata('. $sup->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> LIhat</a> ' .
                    '<a onclick="editForm('. $sup->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    '<a onclick="deleteData('. $sup->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';
            })
            
            ->make(true);
    }
}