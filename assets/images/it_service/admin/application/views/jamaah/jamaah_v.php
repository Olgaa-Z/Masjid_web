<?php $this->load->view('sidebar');?>
<?php $this->load->view('header');?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">DATA JAMAAH</h5>
                <a class="btn btn-info" style="margin-left : 10px; " href="<?php echo site_url('Jamaah/formJamaah'); ?>">
                <i class="now-ui-icons education_paper"></i>
                TAMBAH JAMAAH 
                </a>
                <a class="btn btn-info" style="margin-left : 10px; " href="<?php echo site_url('Jamaah/importJamaah'); ?>">
                <i class="now-ui-icons education_paper"></i>
                IMPORT DATA 
                </a>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $jamaah= $this->Jamaah_m->selectData();
                                $no = 1;
                                foreach ($jamaah as $row) {
                                  
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->nama; ?></td>
                                        <td><?php echo $row->umur; ?></td>
                                        <td><?php echo $row->jk; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td>
                                            <a class="btn btn-outline-success" href="#"> EDIT </a>
                                            <a class="btn btn-outline-danger" href="<?php echo site_url('Jamaah/deleteJamaah/'.$row->id_jamaah); ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>   
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

<?php $this->load->view('footer');?>