<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">SEJARAH MASJID</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Sejarah</th>
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
                                        <td style="text-align: justify;><?php echo $row->sejarah; ?></td>
                                        <td>
                                            <a class="btn btn-outline-success" href="<?php echo site_url('Masjid/editlainform/' . $row->id_masjid); ?>"> EDIT </a>
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