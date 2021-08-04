<?php $this->load->view('sidebar')  ?>
<?php $this->load->view('header')  ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">TAMBAH DATA BERITA</h5>
                <a class="btn btn-info" style="margin-left : 10px; " href="<?php echo site_url('Berita'); ?>">
                <i class="now-ui-icons education_paper"></i>
                DATA BERITA
                </a>
              </div>
              <div class="card-body all-icons">
                <div class="row">


                
                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                <form  method="post" action="<?php echo site_url('Berita/insert'); ?>" 
                  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">JUDUL BERITA</label>
                        <input type="text" class="form-control" name="judul_berita" id="exampleFormControlInput1">
                    </div>

                    <div class="form-group">
                        <label for="usr">UPLOAD GAMBAR :</label>
                    </div>

                    <div >
                        <input class="input-file" type="file" name="gambar_berita" id="file">
                    </div>

                    <!-- <div class="form-row" style="margin-left: 5px;">
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                </div>
                            </div>
                    </div> -->

                    <label for="comment">ISI BERITA</label>
                    <textarea id="summernote" name="isi_berita"></textarea>
                      <script>
                        $(document).ready(function() {
                            $('#summernote').summernote();
                        });
                      </script>

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


<?php $this->load->view('footer')  ?>


