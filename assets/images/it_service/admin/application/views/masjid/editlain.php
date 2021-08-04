<?php $this->load->view('sidebar');  ?>
<?php $this->load->view('header');  ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="title" style="margin-left : 10px; ">EDIT DATA MASJID</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <?php
                    $masjid= $this->Masjid_m->selectData();
                    foreach ($masjid as $row) {
                ?>

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Masjid/editLain'); ?>" 
                        enctype="multipart/form-data">

                        <input type ="hidden" name="id_masjid" value="<?php echo $row->id_masjid; ?>">


                        <label for="comment">SEJARAH</label>
                        <textarea id="summernote" name="sejarah" value="<?php echo $row->sejarah; ?>"></textarea>

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