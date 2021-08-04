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
                <h3 class="title" style="margin-left : 10px; ">EDIT SOSIAL MEDIA</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <?php
                    $socmed= $this->Etc->data_editsocmed($this->uri->segment(3));
                    foreach ($socmed as $row) {
                ?>


                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Dashboard/editsocmed'); ?>" 
                        enctype="multipart/form-data">

                        <input type="hidden" name="id" class="form-control" value="<?php echo $row->id;  ?>">

                        <label for="exampleFormControlInput1">SOCMED</label>
                        <div class="form-group">
                            <input type="text" name="socmed" class="form-control" value="<?php echo $row->socmed;  ?>">
                        </div>

                        <label for="exampleFormControlInput1">LINK</label>
                        <div class="form-group">
                            <input type="text" name="link" class="form-control" value="<?php echo $row->link;  ?>">
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


<?php $this->load->view('footer');  ?>