@extends('layouts.master')


@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title"><u>Detail Barang</u></h3>

            <a href="/barang" class="btn btn-primary pull-right" style="margin-top: -8px;">wih</a>
        </div>


        <!-- /.box-header -->
        <div class="box-body">
            <table id="barang-table" class="table table-striped">
                <thead>
                    @foreach($varBarang as $a)

                        <tr>
                            <th width="150">ID</th>
                            <td>{{ $a->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama Barang</th>
                            <td>{{ $a->nama }}</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Satuan</th>
                            <th>Berat</th>
                            <th>Volume</th>
                            <th>Dimensi</th>
                            <th>Size</th>
                        </tr>
                        <tr>
                            <td>{{ $a->satuan }}</td>
                            <td>{{ $a->berat }}</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Jenis Barang</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Merk</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Warna</th>
                            <td>-</td>
                        </tr>

                    @endforeach
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
   
@endsection