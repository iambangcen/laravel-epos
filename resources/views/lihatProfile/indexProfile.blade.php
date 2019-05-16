@extends('layouts.master')


@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title"><u>Detail Perusahaan</u></h3>

            <a href="/customers" class="btn btn-primary pull-right" style="margin-top: -8px;">Kembali</a>
        </div>


        <!-- /.box-header -->
        <div class="box-body">
            <table id="" class="table table-striped">
                <thead>
                    @foreach($varProfile as $a)

                        <tr>
                            <th width="200">Kode Perusahaan</th>
                            <td>{{ $a->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama Perusahaan</th>
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
                            <th>Kodepos</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Telf.</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Website</th>
                            <td>isi</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>isi</td>
                        </tr>
                        <table class="table">
                            <tr>
                                <td width="200"><b>Luas Tanah</b></td>
                                    <td>isi</td>
                                <td width="200"><b>Luas Bangunan</b></td>
                                    <td>isi</td>
                            </tr>
                            <tr>
                                <td><b>No. Surat Izin</b></td>
                                    <td>isi</td>
                                <td><b>Tgl. Surat Izin</b></td>
                                    <td>isi</td>
                            </tr>
                        </table>

                    @endforeach
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
   
@endsection