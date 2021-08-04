<?php $this->load->view('sidebar');?>
<?php $this->load->view('header');?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="title">DATA JAMAAH PENERIMA ZAKAT</h3>
             
              </div>
            
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table" id="dataTable">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kategori Zakat</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $jamaah= $this->Jamaah_m->selectJamaahZakat();
                                $no = 1;
                                foreach ($jamaah as $row) {
                                  
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->nama; ?></td>
                                        <td><?php echo $row->umur; ?></td>
                                        <td><?php echo $row->jk; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td><?php echo $row->zakat; ?></td>
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

<?php $this->load->view('footer');?>