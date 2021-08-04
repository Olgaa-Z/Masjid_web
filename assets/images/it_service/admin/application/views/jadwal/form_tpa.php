<?php $this->load->view('sidebar');  ?>
<?php $this->load->view('header');  ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-dark" style="margin-left : 10px; " href="<?php echo base_url('Jadwal/formjadwaltpa');  ?>">
                <i class="now-ui-icons education_paper"></i>
                LIHAT JADWAL
                </a>
                <h3 class="title" style="margin-left : 10px; ">JADWAL PENDIDIKAN TPA</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">


                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Jadwal/insertjadwaltpa'); ?>" 
                        enctype="multipart/form-data">

                        <label for="exampleFormControlInput1">TANGGAL</label>
                        <div class="form-group">
                            <input type="date" name="tanggal" class="input-tanggal">
                        </div>

                        <label for="comment">KETERANGAN</label>
                        <textarea id="summernote" name="keterangan"></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>


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


<?php $this->load->view('footer');  ?>