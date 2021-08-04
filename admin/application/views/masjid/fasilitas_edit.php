<?php $this->load->view('sidebar');  ?>
<?php $this->load->view('header');  ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="title" style="margin-left : 10px; ">EDIT DATA FASILITAS MASJID</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <?php
                    $fasilitas= $this->Masjid_m->data_editfasilitas($this->uri->segment(3));
                    // $news = $this->Berita_m->selectid($this->uri->segment(3));
                    foreach ($fasilitas as $row) {
                ?>

                <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Masjid/editFasilitas'); ?>" 
                        enctype="multipart/form-data">

                        <input type ="hidden" name="id_fasilitas" value="<?php echo $row->id_fasilitas; ?>">


                        <label for="exampleFormControlInput1">FASILITAS</label>
                        <div class="form-group">
                            <input type="text" name="nama_fasilitas" class="form-control" value="<?php echo $row->nama_fasilitas; ?>">
                        </div>


                        <div class="form-group">
                        <label for="usr">TUKAR FOTO :</label>
                        </div>

                        <div >
                            <input class="input-file" type="file" name="gambar_fasilitas" id="file" value="<?php echo $row->gambar_fasilitas;  ?>">
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