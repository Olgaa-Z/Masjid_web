<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="title" style="margin-left : 10px; ">EDIT DATA KAJIAN</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                
                <?php
                    $kajian= $this->Jadwal_m->data_editkajian($this->uri->segment(3));
                    foreach ($kajian as $row) {
                ?>

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Jadwal/editKajian'); ?>" 
                        enctype="multipart/form-data">

                        <input type ="hidden" name="id" value="<?php echo $row->id; ?>">

                        <label for="exampleFormControlInput1">TANGGAL</label>
                        <div class="form-group">
                            <input type="date" name="tanggal" class="input-tanggal" value="<?php echo $row->tanggal;  ?>">
                        </div>

                        <label for="exampleFormControlInput1">JUDUL KAJIAN </label>
                        <div class="form-group">
                            <input type="text" name="judul_kajian" class="form-control" value="<?php echo $row->judul_kajian;?>">
                        </div>


                        <label for="exampleFormControlInput1">USTADZ</label>
                        <div class="form-group">
                            <input type="text" name="ustadz" class="form-control" value="<?php echo $row->ustadz;?>">
                        </div>

                        <label for="comment">KETERANGAN</label>
                        <textarea id="summernote" name="keterangan"><?php echo $row->keterangan; ?></textarea>
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