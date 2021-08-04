<?php $this->load->view('sidebar');?>
<?php $this->load->view('header'); ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">EDIT DATA TAKMIR</h5>
                
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <?php
                    $takmir= $this->Masjid_m->data_edittakmir($this->uri->segment(3));
                    // $news = $this->Berita_m->selectid($this->uri->segment(3));
                    foreach ($takmir as $row) {
                ?>

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                <form  method="post" action="<?php echo site_url('Masjid/editTakmir'); ?>" 
                  enctype="multipart/form-data">

                    <input type ="hidden" name="id_takmir" value="<?php echo $row->id_takmir; ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NAMA TAKMIR</label>
                        <input type="text" class="form-control" name="nama_takmir" id="exampleFormControlInput1" value="<?php echo $row->nama_takmir; ?>">
                    </div>

                    <div class="form-group">
                        <label for="usr">UPLOAD FOTO:</label> 
                    </div>

                    <div >
                        <input class="input-file" type="file" name="foto_takmir" id="file" value="<?php echo $row->foto_takmir; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">NO HP</label>
                        <input type="number" class="form-control" name="no_hp" id="exampleFormControlInput1" value="<?php echo $row->no_hp; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">BIDANG</label>
                        <input type="text" class="form-control" name="bidang" id="exampleFormControlInput1" value="<?php echo $row->bidang; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">JENIS KELAMIN </label><br>
                        <label class="radio-inline"><input type='radio' name='jk_takmir' value='laki-laki' checked /> Laki-laki</label>
                        <label class="radio-inline"><input type='radio' name='jk_takmir' value='perempuan' /> Perempuan</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" value="<?php echo $row->alamat; ?> ">
                    </div>

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

<?php $this->load->view('header'); ?>
