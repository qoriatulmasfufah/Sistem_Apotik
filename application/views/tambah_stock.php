        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <?php
                    if (!empty($notif)){
                        echo '<div class="alert alert-danger">'.$notif.'</div>';
                    }
                 ?>
                    <h1 class="page-header">Apotik</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Obat
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form role="form" method="post" action="<?php echo base_url();?>index.php/obat/tambah_stock">

                                        <div class="form-group">
                                            <label>ID Obat</label>
                                            <input type="text" name="id_obat" class="form-control" value="<?php echo $detil->id_obat; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" name="nm_obat" class="form-control" value="<?php echo $detil->nm_obat; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tambah Stock</label>
                                            <input type="text" name="jumlah_tambah" class="form-control" value=" ">
                                        </div>
                                       <!--  <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock" class="form-control">
                                        </div> -->


                                        
                                       <!--  <div class="form-group">
                                            <label>Indikasi</label>
                                            <textarea type="text" name="indikasi" class="form-control" rows="3"></textarea>
                                        </div> -->
                                        
                                        
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-md-success">
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.