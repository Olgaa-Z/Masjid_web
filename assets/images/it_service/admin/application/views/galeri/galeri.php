<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-dark" style="margin-left : 10px; " href="<?php echo base_url('Galeri/formgaleri');  ?>">
                <i class="now-ui-icons education_paper"></i>
                TAMBAH
                </a>
                <h3 class="title" style="margin-left : 10px; ">GALLERY</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $galeri= $this->Galery_m->selectDataGaleri();
                                $no = 1;
                                foreach ($galeri as $row) {
                                  
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td>
                                            <img src="<?php echo base_url();
                                            ?>assets/galeri/<?php echo $row->foto;
                                            ?>" style="width: 80px"> 
                                        </td>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td><?php echo $row->keterangan; ?></td>
                                        <td>
                                            <a class="btn btn-outline-success" href="#"> EDIT </a>
                                            <a class="btn btn-outline-danger" href="#" onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>   
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