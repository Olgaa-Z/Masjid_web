<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-dark" style="margin-left : 10px; " href="<?php echo base_url('Jadwal');  ?>">
                <i class="now-ui-icons education_paper"></i>
                 Lihat Galeri
                </a>
                <h3 class="title" style="margin-left : 10px; ">GALLERY</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                <form  method="post" action="<?php echo site_url('Galeri/insertgaleri'); ?>" 
                  enctype="multipart/form-data">

                    <label for="exampleFormControlInput1">TANGGAL</label>
                    <div class="form-group">
                            <?php 
                            date_default_timezone_set('Asia/Jakarta');
                            $date = new DateTime('now');
                            ?>
                        <input type="date" name="tanggal" class="input-tanggal" value="<?php new DateTime('now');?>">
                    </div>

                    <div class="form-group">
                        <label for="usr">FOTO :</label>
                    </div>

                    <div >
                        <input class="input-file" type="file" name="foto" id="file">
                    </div>

                    <label for="exampleFormControlInput1">KETERANGAN</label>
                        <div class="form-group">
                        <input type="text" name="keterangan" class="form-control" required="">
                    </div>

                    <button style ="margin-bottom:25px" class="btn btn-success" 
                            type="submit">Simpan</button>
                  </form>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php $this->load->view('footer'); ?>