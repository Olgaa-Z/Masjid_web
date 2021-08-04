
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">FASILITAS MASJID</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <a class="btn btn-info" style="margin-left : 10px; " href="<?php echo site_url('Masjid/takmirform'); ?>">
                TAMBAH FASILITAS
                </a>

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Fasilitas</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $fasilitas= $this->Masjid_m->selectDataFasilitas();
                                $no = 1;
                                foreach ($fasilitas as $row) {
                                  
                                    ?>    
                                    <tr>
                                        <td scope="row"><?php echo $no++; ?></td>
                                        <td><?php echo $row->nama_fasilitas; ?></td>
                                        <td>
                                            <img src="<?php echo base_url();
                                            ?>assets/fasilitas/<?php echo $row->gambar_fasilitas;
                                            ?>" style="width: 80px"> 
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-success" href="#"> EDIT </a>
                                            <a class="btn btn-outline-danger" href="#"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>   
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