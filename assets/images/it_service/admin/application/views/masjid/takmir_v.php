<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">TAKMIR MASJID</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                
                <a class="btn btn-info" style="margin-left : 10px; " href="<?php echo site_url('Masjid/takmirform'); ?>">
                TAMBAH TAKMIR
                </a>

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Nama Takmir</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Sebagai</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">ALamat</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $takmir= $this->Masjid_m->selectDataTakmir();
                                $no = 1;
                                foreach ($takmir as $row) {
                                  
                                    ?>    
                                    <tr>
                                        <td><?php echo $row->nama_takmir; ?></td>
                                        <td>
                                            <img src="<?php echo base_url();
                                            ?>assets/img/<?php echo $row->foto_takmir;
                                            ?>" style="width: 80px"> 
                                        </td>
                                        <td><?php echo $row->bidang; ?></td>
                                        <td><?php echo $row->jk_takmir; ?></td>
                                        <td><?php echo $row->no_hp; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td>
                                            <a class="btn btn-outline-success" href="#"> EDIT </a>
                                            <a class="btn btn-outline-danger" href="<?php echo site_url('Masjid/deleteTakmir/'.$row->id_takmir); ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>   
                                        </tr>
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