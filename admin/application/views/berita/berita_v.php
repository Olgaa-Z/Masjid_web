<?php $this->load->view('sidebar');  ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="title">BERITA</h3>
                <p class="category">Handcrafted by our friends from <a href="https://nucleoapp.com/?ref=1712">NucleoApp</a></p>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                        <a class="btn btn-info" style="margin-right: 10px; margin-left : 10px;" href="<?php echo site_url('Berita/formTambah'); ?>">
                        <i class="now-ui-icons ui-1_simple-add"></i>
                        Tambah Data Berita
                        </a>
                        <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table" id="dataTable">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                
                                $berita= $this->Berita_m->selectData();
                                $no = 1;
                                foreach ($berita as $row) {
                                  
                                  
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo character_limiter ($row->judul_berita, 15); ?></td>
                                        <td>
                                            <img src="<?php echo base_url();
                                            ?>assets/upload/<?php echo $row->gambar_berita;
                                            ?>" style="width: 80px"> 
                                        </td>
                                        
                                    
                                        
                                        <td style="text-align: justify;">
                                          <?php 
                                           echo character_limiter( $row->isi_berita, 30); 
                                           ?>
                                        </td>

                                        <td><?php echo $row->tanggal_berita; ?></td>
                                        <td>
                                            <a class="btn btn-outline-success" href="<?php echo site_url('Berita/editberitaform/'. $row->id_berita); ?>"> EDIT </a>
                                            <a class="btn btn-outline-danger" href="<?php
                                            echo site_url('Berita/deleteBerita/' . $row->id_berita);
                                            ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>   
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