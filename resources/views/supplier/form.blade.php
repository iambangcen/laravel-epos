<div class="modal fade" id="modal-form-sup" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  id="form-item" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
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
                            <label >id</label>
                            <input type="text" class="form-control" id="id" name="id"  autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Nama Supplier</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >No. NPWP</label>
                            <input type="text" class="form-control" id="npwp" name="npwp">
                            <span class="help-block with-errors"></span>
                        </div>                       

                        <table class="table table-striped table-condensed">
                            <tr>
                                <td width="93">Kota</td>
                                    <td><input type="text" id="kota" name="kota"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Kodepos</td>
                                    <td><input type="text" id="kodepos" name="kodepos"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                            <tr>
                                <td width="93">Telf.</td>
                                    <td><input type="text" id="telf" name="telf"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Hp.</td>
                                    <td><input type="text" id="hp" name="hp"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                        </table>

                        <div class="form-group">
                            <label >Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label class="control-sidebar-subheading"><Font color="red" size="5"><center> Data Bank </Font></center></label>
                        </div>
                        <table id="harga-table" class="table table-striped table-condensed">
                            <tr>
                                <td>No. Rekening</td>
                                    <td><input type="text" id="rek" name="rek"   >
                                    <span class="help-block with-errors"></span></td>
                                <td>Bank</td>
                                    <td><input type="text" id="bank" name="bank"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                            <tr>
                                <td>Atas Nama</td>
                                    <td><input type="text" id="atasnama" name="atasnama"   >
                                    <span class="help-block with-errors"></span></td>
                                <td>Email</td>
                                    <td><input type="text" id="email" name="email"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                            <tbody></tbody>
                        </table>

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
