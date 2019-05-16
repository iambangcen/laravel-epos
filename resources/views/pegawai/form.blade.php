<div class="modal fade" id="modal-form-peg" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
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
                            <label >No. ID (KTP/SIM)</label>
                            <input type="text" class="form-control" id="id" name="id"  autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Nama Pegawai</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Jenis Kelamin</label>
                            <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">
                            <span class="help-block with-errors"></span>
                        </div>                       

                        <table id="satuan-table" class="table table-striped table-condensed">
                            <tr>
                                <td width="93">Tempat Lahir</td>
                                    <td><input type="text" id="tempatlahir" name="tempatlahir"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Tgl. Lahir</td>
                                    <td><input type="date" id="tanggallahir" name="tanggallahir"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                        </table>

                        <div class="form-group">
                            <label >Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama">
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Suku</label>
                            <input type="text" class="form-control" id="suku" name="suku">
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip">
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Pendidikan</label>
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Status</label>
                            <input type="text" class="form-control" id="status" name="status">
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Telf</label>
                            <input type="text" class="form-control" id="telf" name="telf">
                            <span class="help-block with-errors"></span>
                        </div>

                        <table id="satuan-table" class="table table-striped table-condensed">
                            <tr>
                                <td width="93">Tgl. Masuk</td>
                                    <td><input type="date" id="masuk" name="masuk"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Tgl. Keluar</td>
                                    <td><input type="date" id="keluar" name="keluar"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
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
