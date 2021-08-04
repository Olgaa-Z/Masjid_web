<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               <!--  <a class="btn btn-dark" style="margin-left : 10px; " href="<?php echo base_url('Keuangan/listpengeluaran');  ?>">
                <i class="now-ui-icons education_paper"></i>
                LIST PENGELUARAN
                </a> -->
                <h5 class="title" style="margin-left : 10px; ">EDIT DATA PENGELUARAN</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                                   
                <?php
                    $pemasukan= $this->Keuangan_m->data_editkeuangan($this->uri->segment(3));
                    foreach ($pemasukan as $row) {
                ?>
                
                
                    <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Keuangan/editPengeluaran'); ?>" 
                        enctype="multipart/form-data">

                        <input type ="hidden" name="id_keuangan" value="<?php echo $row->id_keuangan; ?>">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">JUMLAH ANGKA PENGELUARAN</label>
                            <input type="NUMBER" name="pengeluaran" class="form-control" id="exampleFormControlInput1" value="<?php echo $row->pengeluaran;?>">
                        </div>
                        <label for="exampleFormControlInput1">TANGGAL</label>
                        <div class="form-group">
                          
                            <input type="date" name="tanggal" class="input-tanggal" value="<?php echo $row->tanggal;?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">KETERANGAN</label>
                            <input type="text" name="deskripsi" class="form-control" id="exampleFormControlInput1" value="<?php echo $row->deskripsi;?>">
                        </div>

                        <!-- <a type="submit" class="btn btn-info" >
                        <i class="now-ui-icons ui-1_send"></i>
                            SIMPAN
                        </a> -->
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

      



<?php $this->load->view('footer'); ?>