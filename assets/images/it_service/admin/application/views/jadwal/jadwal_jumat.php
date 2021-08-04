<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">JADWAL JUMAT</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <a class="btn btn-info" style="margin-left : 10px; " href="<?php echo site_url('Jadwal/formjadwaljumat'); ?>">
                TAMBAH JADWAL
                </a>

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">IMAM</th>
                                <th scope="col">KHATIB</th>
                                <th scope="col">MUAZIN</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $jumat= $this->Jadwal_m->selectDataJumatan();
                                $no = 1;
                                foreach ($jumat as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td><?php echo $row->imam; ?></td>
                                        <td><?php echo $row->khatib; ?></td>
                                        <td><?php echo $row->muazin; ?></td>
                                        <td>
                                        <a class="btn btn-outline-success" href="#"> EDIT </a>
                                        <a class="btn btn-outline-danger" href="#"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>  
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
