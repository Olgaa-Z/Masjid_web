<?php $this->load->view('sidebar');?>
<?php $this->load->view('header'); ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">TAMBAH DATA TAKMIR</h5>
                
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                <form  method="post" action="<?php echo site_url('Masjid/insertTakmir'); ?>" 
                  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NAMA TAKMIR</label>
                        <input type="text" class="form-control" name="namatakmir" id="exampleFormControlInput1" required="Isi Nama Takmir">
                    </div>

                    <div class="form-group">
                        <label for="usr">UPLOAD FOTO:</label> 
                    </div>

                    <div >
                        <input class="input-file" type="file" name="fototakmir" id="file">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">NO HP</label>
                        <input type="number" class="form-control" name="nohp" id="exampleFormControlInput1" required="">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">JENIS KELAMIN </label><br>
                        <label class="radio-inline"><input type='radio' name='jk' value='laki-laki' checked /> Laki-laki</label>
                        <label class="radio-inline"><input type='radio' name='jk' value='perempuan' /> Perempuan</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" required="">
                    </div>

                    <button style ="margin-bottom:25px" class="btn btn-info" 
                            type="submit">Simpan</button>
                  </form>
                  </div>

                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php $this->load->view('header'); ?>
