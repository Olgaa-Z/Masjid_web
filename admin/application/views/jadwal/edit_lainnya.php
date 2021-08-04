<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="title" style="margin-left : 10px; ">EDIT DATA JADWAL KEGIATAN LAINNYA</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">


                <?php
                    $lainnya= $this->Jadwal_m->data_editlainnya($this->uri->segment(3));
                    foreach ($lainnya as $row) {
                ?>

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Jadwal/insertjadwallainnya'); ?>" 
                        enctype="multipart/form-data">

                        <label for="exampleFormControlInput1">TANGGAL</label>
                        <div class="form-group">
                            <input type="date" name="tanggal" class="input-tanggal" value="<?php echo $row->tanggal;  ?>" >
                        </div>

                        <label for="exampleFormControlInput1">KEGIATAN</label>
                        <div class="form-group">
                            <input type="text" name="kegiatan" class="form-control" value="<?php echo $row->kegiatan;  ?>">
                        </div>

                        <label for="comment">KETERANGAN</label>
                        <textarea id="summernote" name="keterangan"><?php echo $row->keterangan;  ?></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>


                        <button style ="margin-bottom:25px" class="btn btn-info" 
                            type="submit">Simpan</button>
                    </form>
                    </div>

                    <?php
                    }
                    ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php $this->load->view('footer'); ?>