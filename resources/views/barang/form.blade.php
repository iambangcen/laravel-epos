<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
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
                            <label >Nama Barang</label>
                            <input type="text" class="form-control" id="nama" name="nama"   required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Satuan</label>
                            {!! Form::select('satuan', array(
                                    'Pieces' => array('ONS' => 'ONS'),
                                    'Lusin' => array('KG' => 'KG')), null,
                                    ['class' => 'form-control select', 'placeholder' => '-- Silakan pilih bosquee --', 'required']
                                )
                            !!} 
                            <span class="help-block with-errors"></span>
                        </div>

                        <table id="satuan-table" class="table table-striped table-condensed">
                            <tr>
                                <td width="93">Berat</td>
                                    <td><input type="text" id="berat" name="berat"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Volume</td>
                                    <td><input type="text" id="volume" name="volume"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                        </table>
                        <table id="satuan-table" class="table table-striped table-condensed">
                            <tr>
                                <td width="93">Dimensi (P.L.T)</td>
                                    <td><input type="text" id="dimensi" name="dimensi"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Size</td>
                                    <td><input type="text" id="size" name="size"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                            <tbody></tbody>
                        </table>

                        <div class="form-group"><br>
                            <label >Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk"   >
                            <span class="help-block with-errors"></span>
                        </div>

                         <div class="form-group"><br>
                            <label >Warna</label>
                            <input type="text" class="form-control" id="warna" name="warna"   >
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Jenis Barang</label>
                            {!! Form::select(
                                'jenis', ['kain', 'kapas'], null, [
                                'class' => 'form-control select',
                                'placeholder' => '-- Silakan pilih bosquee --']
                                )
                            !!} 
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Tipe Barang</label>
                            {!! Form::select(
                                'tipe', ['x', 'xl'], null, [
                                'class' => 'form-control select',
                                'placeholder' => '-- Silakan pilih bosquee --']
                                )
                            !!} 
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label class="control-sidebar-subheading"><Font color="red" size="5"><center> Input Harga & Stok Barang </Font> (opsional) </center></label>
                                <input type="checkbox" class="pull-left" unchecked>
                            <p>
                                Consinyesion
                                <label class="pull-right">Stok saat ini : isi</label>
                            </p>

                        </div>
                        <table id="harga-table" class="table table-striped table-condensed">
                            <tr>
                                <td>Harga Pokok</td>
                                    <td><input type="text" id="hp" name="hp"   >
                                    <span class="help-block with-errors"></span></td>
                                <td>Harga Jual</td>
                                    <td><input type="text" id="hj" name="hj"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                            <tbody></tbody>
                        </table>

                        <table id="stok-table" class="table table-striped table-condensed">
                            <tr>
                                <td width="93">Stok Max</td>
                                    <td><input type="text" id="max" name="max"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Stok Min</td>
                                    <td><input type="text" id="min" name="min"   >
                                    <span class="help-block with-errors"></span></td>
                            </tr>
                        </table>
                        <table id="stok-table" class="table table-striped table-condensed">
                            <tr>
                                <td width="93">Stok In</td>
                                    <td><input type="text" id="in" name="in"   >
                                    <span class="help-block with-errors"></span></td>
                                <td width="80">Stok Out</td>
                                    <td><input type="text" id="out" name="out"   >
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
