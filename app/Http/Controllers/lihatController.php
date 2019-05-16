<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lihatController extends Controller
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

    public function indexBarang($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $query = DB::table('barang')->where('id',$id)->get();
        return view('/lihatbarang.indexBarang', ['varBarang' => $query]);
    }

    public function indexCustomers($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $query = DB::table('customers')->where('id',$id)->get();
        return view('/lihatcustomers.indexCustomers', ['varCustomers' => $query]);
    }

    public function indexSupplier($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $query = DB::table('supplier')->where('id',$id)->get();
        return view('/lihatsupplier.indexSupplier', ['varSupplier' => $query]);
    }

    public function indexPegawai($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $query = DB::table('Users')->where('id',$id)->get();
        return view('/lihatPegawai.indexPegawai', ['varPegawai' => $query]);
    }

    public function indexProfile($id)
    {
        $query = DB::table('profile')->where('id',$id)->get();
        return view('/lihatProfile.indexProfile', ['varProfile' => $query]);
    }
}