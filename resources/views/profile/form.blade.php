<div class="modal fade" id="modal-form-pro" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
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
                            <label >Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama" name="nama"   required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >No. NPWP</label>
                            <input type="text" class="form-control" id="npwp" name="npwp"   >
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"   >
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi"   >
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Telf.</label>
                            <input type="text" class="form-control" id="telf" name="telf"   >
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Kodepos</label>
                            <input type="text" class="form-control" id="kodepos" name="kodepos"   >
                            <span class="help-block with-errors"></span>
                        </div>

                        <table class="table table-striped table-condensed">
                            <tr>
                                <td width="93">Website</td>
                                    <td><input type="text" id="website" name="website"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Email</td>
                                    <td><input type="text" id="email" name="email"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                        </table>
                        <table class="table table-striped table-condensed">
                            <tr>
                                <td width="93">No. Surat Izin</td>
                                    <td><input type="text" id="no" name="no"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Tgl. Surat Izin</td>
                                    <td><input type="date" id="tgl" name="stgl"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="93">Luas Tanah</td>
                                    <td><input type="text" id="tanah" name="tanah"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Luas Bangunan</td>
                                    <td><input type="text" id="bangunan" name="bangunan"   >
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
