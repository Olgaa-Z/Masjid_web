<?php $this->load->view('sidebar');  ?>
<?php $this->load->view('header');  ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">LIST PENGELUARAN</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                        <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah Pengeluaran</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $uang= $this->Keuangan_m->selectDataPengeluaran();
                                $no = 1;
                                foreach ($uang as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td> <?php echo $this->Currency_m->rps($row->pengeluaran); ?></td>
                                        <td><?php echo $row->deskripsi; ?></td>
                                        <td>
                                        <a class="btn btn-outline-success" href="#"> EDIT </a>
                                            <a class="btn btn-outline-danger" href="<?php echo site_url('Keuangan/deletePengeluaran/'.$row->id_keuangan); ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>  
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



<?php $this->load->view('footer');  ?>