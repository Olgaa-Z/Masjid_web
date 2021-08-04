<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="title" style="margin-left : 10px; ">SOSIAL MEDIA</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table" id="dataTable">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">SOCMED</th>
                                <th scope="col">LINK</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $socmed= $this->Etc->selectDataSocmed();
                                $no = 1;
                                foreach ($socmed as $row) {
                                    ?>  
                                    <tr>    
                                        <th><?php echo $no++; ?></th>
                                        <td><?php echo $row->socmed; ?></td>
                                        <td><?php echo $row->link; ?></td>
                                        <td>
                                          <a class="btn btn-outline-success" href="<?php echo site_url('Dashboard/editSocmedForm/' . $row->id); ?>"> EDIT </a>
                                          <a class="btn btn-outline-danger" href="<?php echo site_url('Dashboard/deleteSocmed/'.$row->id); ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>  
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