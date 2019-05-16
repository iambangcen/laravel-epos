<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class profileController extends Controller
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
        return view('profile.index');
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
        profile::create($input);
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
        $pro = profile::find($id);
        return $pro;
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $pro = profile::find($id);
        return $pro;
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
        $pro = profile::findOrFail($id);
        $pro->update($input);

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
        $pro = profile::findOrFail($id);
        profile::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Penghapusan data berhasil..'
        ]);
    }

    public function apiProfile(){
        $pro = profile::all();

        return Datatables::of($pro)
            ->addColumn('id', function ($pro){
                return $pro->id;
            })

            ->addColumn('name', function ($pro){
                return $pro->nama;
            })

            ->addColumn('action', function($pro){
                return '<a onclick="viewdata('. $pro->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> LIhat</a> ';
            })
            
            ->make(true);
    }
}