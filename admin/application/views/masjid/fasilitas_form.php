<?php $this->load->view('sidebar');?>
<?php $this->load->view('header'); ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">TAMBAH DATA FASILITAS MASJID</h5>
                
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                <form  method="post" action="<?php echo site_url('Masjid/insertFasilitas'); ?>" 
                  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">FASILITAS</label>
                        <input type="text" class="form-control" name="nama_fasilitas" id="exampleFormControlInput1" required="Isi nama fasilitas yang disediakan">
                    </div>

                    <div class="form-group">
                        <label for="usr">UPLOAD FOTO:</label> 
                    </div>

                    <div >
                        <input class="input-file" type="file" name="gambar_fasilitas" id="file">
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
