@extends('layouts.master')


@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title"><u>Detail Customer</u></h3>

            <a href="/customers" class="btn btn-primary pull-right" style="margin-top: -8px;">wih</a>
        </div>


        <!-- /.box-header -->
        <div class="box-body">
            <table id="" class="table table-striped">
                <thead>
                    @foreach($varCustomers as $a)

                        <tr>
                            <th width="150">Kode Customers</th>
                            <td>{{ $a->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama Customers</th>
                            <td>{{ $a->nama }}</td>
                        </tr>
                        <tr>
                            <th>Kota</th>
                            <td>{{ $a->kota }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Kodepos</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Telf</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
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