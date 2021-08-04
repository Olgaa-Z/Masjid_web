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
                    <form method="post" action="<?php echo site_url('Masjid/editMasjid'); ?>" 
                        enctype="multipart/form-data">

                        <input type ="hidden" name="id_masjid" value="<?php echo $row->id_masjid; ?>">


                        <label for="exampleFormControlInput1">NAMA MASJID</label>
                        <div class="form-group">
                            <input type="text" name="nama_masjid" class="form-control" value="<?php echo $row->nama_masjid; ?>">
                        </div>

                        <label for="exampleFormControlInput1">ALAMAT MASJID</label>
                        <div class="form-group">
                            <input type="text" name="alamat_masjid" class="form-control" value="<?php echo $row->alamat_masjid; ?>">
                        </div>

                        <label for="exampleFormControlInput1">NO TELP</label>
                        <div class="form-group">
                            <input type="text" name="no_telp" class="form-control" value="<?php echo $row->no_telp; ?>">
                        </div>

                        <label for="exampleFormControlInput1">EMAIL</label>
                        <div class="form-group">
                            <input type="text" name="email_masjid" class="form-control" value="<?php echo $row->email_masjid; ?>">
                        </div>

                        <div class="form-group">
                        <label for="usr">TUKAR LOGO :</label>
                        </div>

                        <div >
                            <input class="input-file" type="file" name="logo" id="file" value="<?php echo $row->logo;  ?>">
                        </div>

                        <label for="comment">DESKRIPSI</label>
                        <textarea id="summernote" name="deskripsi" value="<?php echo $row->deskripsi; ?>"></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>

                        <label for="comment">VISI MISI 1</label>
                        <textarea id="summernote" name="visimisi" value="<?php echo $row->visimisi; ?>"></textarea>

                        <label for="exampleFormControlInput1">VISI MISI</label>
                        <div class="form-group">
                            <input type="text" name="visimisi" class="form-control" value="<?php echo $row->visimisi; ?>">
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