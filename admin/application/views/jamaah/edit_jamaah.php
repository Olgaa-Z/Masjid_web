<?php $this->load->view('sidebar');?>
<?php $this->load->view('header'); ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">EDIT DATA JAMAAH</h5>
                
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <?php
                    $jamaah= $this->Jamaah_m->editjamaahdata($this->uri->segment(3));
                    foreach ($jamaah as $row) {
                ?>

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                <form  method="post" action="<?php echo site_url('Jamaah/editJamaah'); ?>" 
                  enctype="multipart/form-data">

                    <input type ="hidden" name="id_jamaah" value="<?php echo $row->id_jamaah; ?>">  
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NAMA</label>
                        <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" value="<?php echo $row->nama;?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">UMUR</label>
                        <input type="number" class="form-control" name="umur" id="exampleFormControlInput1" value="<?php echo $row->umur;?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">JENIS KELAMIN </label><br>
                        <input type="text" class="form-control" name="jk" id="exampleFormControlInput1" value="<?php echo $row->jk;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" value="<?php echo $row->alamat;?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">KATEGORI ZAKAT</label>
                        <input type="text" class="form-control" name="zakat" id="exampleFormControlInput1" value="<?php echo $row->zakat;?>">
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
