@extends('layouts.master')


@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title">Data Master Profile</h3>

            <a onclick="addForm()" class="btn btn-success pull-right" style="margin-top: -8px;">Tambah</a>
        </div>


        <!-- /.box-header -->
        <div class="box-body">
            <table id="profile-table" class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Perusahaan</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.box-body -->
        @include('profile.form')
    </div>
        
    
   
@endsection

@section('bot')

    <!-- DataTables -->
    <script src=" {{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>

    <!-- Validator  -->
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>
    
    <script type="text/javascript">
        const table = $('#profile-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.profile') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nama', name: 'nama'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        function viewdata(id) {
           window.location.href = "{{url('lihatProfile')}}" + "/" + id; // maybe you can discard the slash after room_detail.
        }

        function addForm() {
            save_method = 'add';
            $('input[name=_method]').val('POST');
            $('#modal-form-pro').modal('show');
            $('#modal-form-pro form')[0].reset();
            $('.modal-title').text('Form Master Profile');
        }

        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form-pro form')[0].reset();
            $.ajax({
                url: "{{ url('profile') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-form-pro').modal('show');
                    $('.modal-title').text('Edit Profile');

                    $('#id').val(data.id);
                    $('#nama').val(data.nama);
                },
                error : function() {
                    alert("Tidak ada data, method belum dibuat");
                }
            });
        }

        function deleteData(id){
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: 'Anda yakin ?',
                text: "Setelah dihapus Anda tidak dapat memulihkannya!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            }).then(function () {
                $.ajax({
                    url : "{{ url('profile') }}" + '/' + id,
                    type : "POST",
                    data : {'_method' : 'DELETE', '_token' : csrf_token},
                    success : function(data) {
                        table.ajax.reload();
                        swal({
                            title: 'Ok !',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error : function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });
        }

        $(function(){
            $('#modal-form-pro form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                        if (save_method == 'add')
                            url = "{{ url('profile') }}";
                        else
                            url = "{{ url('profile') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
                        //hanya untuk input data tanpa dokumen
//                      data : $('#modal-form form').serialize(),
                        data: new FormData($("#modal-form-pro form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-form-pro').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Oops...',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });
    </script>
@endsection
