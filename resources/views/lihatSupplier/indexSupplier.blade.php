@extends('layouts.master')


@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title"><u>Detail Supplier</u></h3>

            <a href="/supplier" class="btn btn-primary pull-right" style="margin-top: -8px;">Kembali</a>
        </div>


        <!-- /.box-header -->
        <div class="box-body">
            <table id="supplier-table" class="table table-striped">
                <thead>
                    @foreach($varSupplier as $a)

                        <tr>
                            <th width="150">ID</th>
                            <td>{{ $a->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama Supplier</th>
                            <td>{{ $a->nama }}</td>
                        </tr>
                        <tr>
                            <th>No. NPWP</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Kota</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Kodepos</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Telf.</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th bgcolor="red"><center>Data Bank</center></th>
                        </tr>
                        <tr>
                            <th><center>No. Rekening</center></th>
                            <th><center>Bank</center></th>
                            <th><center>Atas Nama</center></th>
                        </tr>
                        <tr>
                            <td><center>isi</center></td>
                            <td><center>isi</center></td>
                            <td><center>isi</center></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Website.</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>isi</td>
                        </tr>

                    @endforeach
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
   
@endsection