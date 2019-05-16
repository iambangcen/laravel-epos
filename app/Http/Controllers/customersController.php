<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class customersController extends Controller
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
        return view('customers.index');
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
            'kota'          => 'required'
        ]);

        $input = $request->all();
        customers::create($input);
            return response()->json([
            'success' => true,
            'message' => 'Cust Disimpan'
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
        $brg = customers::find($id);
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
        
        $brg = customers::find($id);
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
        $this->validate($request , [
            'nama'          => 'required|string',
            'kota'		    => 'required'
        ]);

        $input = $request->all();
        $brg = customers::findOrFail($id);
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
        $brg = customers::findOrFail($id);
        customers::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Penghapusan data berhasil..'
        ]);
    }

    public function apiCustomers(){
        $brg = customers::all();

        return Datatables::of($brg)
            ->addColumn('id', function ($brg){
                return $brg->id;
            })

            ->addColumn('nama', function ($brg){
                return $brg->nama;
            })
            
            ->addColumn('kota', function ($brg){
                return $brg->kota;
            })

            ->addColumn('action', function($brg){
                return '<a onclick="viewdata('. $brg->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> LIhat</a> ' .
                    '<a onclick="editForm('. $brg->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    '<a onclick="deleteData('. $brg->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';
            })
            
            ->make(true);
    }
}