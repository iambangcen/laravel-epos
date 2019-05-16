<div class="modal fade" id="modal-form-cust" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-item" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title"></h3>
                </div>


                <div class="modal-body">
                    <input type="hidden" id="id" name="id">


                    <div class="box-body">
                        <div class="form-group">
                            <label >Kode Customers</label>
                            <input type="text" class="form-control" id="id" name="id"  autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Nama Customers</label>
                            <input type="text" class="form-control" id="nama" name="nama"   required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <table class="table table-striped">
                                <tr>
                                    <td>Kota</td>
                                        <td><input type="text" id="kota" name="kota" required>
                                        <span class="help-block with-errors"></span></td>
                                    <td>Alamat</td>
                                        <td><input type="text" id="alamat" name="alamat"   >
                                        <span class="help-block with-errors"></span></td>
                                </tr>
                                <tr>
                                    <td width="93">Kodepos</td>
                                        <td><input type="text" id="kodepos" name="kodepos"   >
                                        <span class="help-block with-errors"></span></td>
                                    <td width="80">Telp</td>
                                        <td><input type="text" id="telp" name="telp"   >
                                        <span class="help-block with-errors"></span></td>
                                </tr>
                                <tbody></tbody>
                            </table>
                        </div>

                        <div class="form-group"><br>
                            <label >Email</label>
                            <input type="text" class="form-control" id="email" name="email"   >
                            <span class="help-block with-errors"></span>
                        </div>

                         <div class="form-group"><br>
                            <label >Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"   >
                            <span class="help-block with-errors"></span>
                        </div>

                    </div>
                    <!-- /.box-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
