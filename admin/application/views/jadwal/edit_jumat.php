<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-dark" style="margin-left : 10px; " href="<?php echo base_url('Jadwal/insertjadwalJumat');  ?>">
                <i class="now-ui-icons education_paper"></i>
                LIST PEMASUKAN
                </a>
                <h3 class="title" style="margin-left : 10px; ">TAMBAH  PEMASUKAN</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <?php
                    $jumat= $this->Jadwal_m->data_editjumat($this->uri->segment(3));
                    foreach ($jumat as $row) {
                ?>
                
                    <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Jadwal/editJumat'); ?>" 
                        enctype="multipart/form-data">

                        <input type ="hidden" name="id" value="<?php echo $row->id; ?>">

                        <label for="exampleFormControlInput1">TANGGAL</label>
                        <div class="form-group">
                            <input type="date" name="tanggal" class="input-tanggal" value="<?php echo $row->tanggal;  ?>" >
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">IMAM</label>
                            <input type="text" name="imam" class="form-control" id="exampleFormControlInput1" value="<?php echo $row->imam;  ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">KHATIB</label>
                            <input type="text" name="khatib" class="form-control" id="exampleFormControlInput1" value="<?php echo $row->khatib;  ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">MUAZIN</label>
                            <input type="text" name="muazin" class="form-control" id="exampleFormControlInput1" value="<?php echo $row->muazin;  ?>">
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



<?php $this->load->view('sidebar'); ?>