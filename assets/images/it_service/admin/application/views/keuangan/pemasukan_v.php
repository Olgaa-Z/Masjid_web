<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <!-- <a class="btn btn-dark" style="margin-left : 10px; " href="<?php echo base_url('Keuangan/listpemasukan');  ?>">
                <i class="now-ui-icons education_paper"></i>
                LIST PEMASUKAN
                </a> -->
                <h5 class="title" style="margin-left : 10px; ">TAMBAH  PEMASUKAN</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                
                    <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Keuangan/insertPemasukan'); ?>" 
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">JUMLAH ANGKA PEMASUKAN</label>
                            <input type="NUMBER" name="pemasukan" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <label for="exampleFormControlInput1">TANGGAL</label>
                        <div class="form-group">
                          
                            <input type="date" name="tanggal" class="input-tanggal">
                        </div>

                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">KETERANGAN</label>
                            <input type="text" name="deskripsi" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <!-- <a type="submit" class="btn btn-info" >
                        <i class="now-ui-icons ui-1_send"></i>
                            SIMPAN
                        </a> -->
                        <button style ="margin-bottom:25px" class="btn btn-info" 
                            type="submit">Simpan</button>
                    </form>
                    </div>
                
                  
                  
                </div>
              </div>

                <div class="card-header"  >
                <h5 class="title"style="margin-left: 30px;">LIST PEMASUKAN</h5>
                </div>
              <div class="card-body all-icons">
                <div class="row">
                  
                        <div class="table-responsive" style="margin-right: 35px; margin-left : 35px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah Pemasukan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $uang= $this->Keuangan_m->selectData();
                                $no = 1;
                                foreach ($uang as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td> <?php echo $this->Currency_m->rps($row->pemasukan); ?></td>
                                        <td><?php echo $row->deskripsi; ?></td>
                                        <td>
                                        <a class="btn btn-outline-success" href="#"> EDIT </a>
                                            <a class="btn btn-outline-danger" href="<?php echo site_url('Keuangan/deletePemasukan/'.$row->id_keuangan); ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>  
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                        </div>



                </div>
              </div>
       


            </div>
          </div>
        </div>
      </div>


            

      



<?php $this->load->view('footer'); ?>