<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">PROFIL MASJID</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Nama masjid</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $masjid= $this->Masjid_m->selectData();
                                $no = 1;
                                foreach ($masjid as $row) {
                                  
                                    ?>    
                                    <tr>
                                        <td><?php echo $row->nama_masjid; ?></td>
                                        <td>
                                            <img src="<?php echo base_url();
                                            ?>assets/logo/<?php echo $row->gambar;
                                            ?>" style="width: 80px"> 
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url();
                                            ?>assets/logo/<?php echo $row->logo;
                                            ?>" style="width: 80px"> 
                                        </td>
                                        <td><?php echo $row->no_telp; ?></td>
                                        <td><?php echo $row->alamat_masjid; ?></td>
                                        <td><?php echo $row->email_masjid; ?></td>
                                        <td  style="text-align: justify;"><?php echo $row->deskripsi ?></td>
                                        <td>
                                            <a class="btn btn-outline-success" href="<?php echo site_url('Masjid/editmasjidform/' . $row->id_masjid); ?>"> EDIT </a>
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