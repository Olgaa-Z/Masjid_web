<?php $this->load->view('header'); ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">PEMASUKAN MASJID</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                <li class="active">Pemasukan</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->



<!-- section -->
    <div class="row" style="margin-bottom: 50px;">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                            $masjid = $this->Home_m->selectData();
                            foreach ($masjid as $row){                         
                ?>
              <div class="main_heading text_align_center" style="margin-top: 30px;">
                <h2>PEMASUKAN MASJID  <?php echo $row->nama_masjid; ?> </h2>
              </div>
              <?php } ?>
            </div>

                 <div class="table-responsive" style="margin-right: 35px; margin-left : 35px;"> 
                  <h4 style="text-align:center;  margin: 0 auto">BULAN INI</h4><br>
                        <table class="table" id="dataTable">
                            <thead >
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah Pemasukan</th>
                                <th scope="col">Keterangan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                $uang= $this->Keuangan_m->selectDataMonth();
                                $omsettrans= $this->Keuangan_m->total_pemasukan_month();
                                $no = 1;
                                foreach ($uang as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $this->Etc->tgl( $row->tanggal); ?></td>
                                        <td> <?php echo $this->Etc->rps($row->pemasukan); ?></td>
                                        <td><?php echo character_limiter( $row->deskripsi,25); ?></td>
                                        
                                    </tr>

                                <?php } ?>
                            </tbody>

                              
                        </table>
                        </div>
                        <div  style="margin-top: 30px; margin-left: 30px;">
                                <h3>Total Pemasukan : </h3>
                                <h2 class="count_omset" style=" padding-bottom:20px;" >0.0</h2>
                          </div>

                     

            
     
         
           
          
          </div>
        </div>
      </div>
    </div>


<!-- End of section -->



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').DataTable();
      
    });
    $('.count_omset').html('<?php echo $this->Etc->rps($omsettrans->count_omset)?>');
</script>



<?php $this->load->view('footer'); ?>