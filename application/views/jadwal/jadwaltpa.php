<?php $this->load->view('header'); ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">JADWAL TPA</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                <li class="active">Jadwal Tpa</li>
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
    <div class="row" style="margin-bottom: 200px;">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row" style="margin-top: 100px;">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                            $masjid = $this->Home_m->selectData();
                            foreach ($masjid as $row){                         
                ?>
              <div class="main_heading text_align_center">
                <h2>JADWAL TPA  <?php echo $row->nama_masjid; ?> </h2>
              </div>
              <?php } ?>
            </div>

                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                $tpa = $this->Jadwal_m->selectDataTpa();
                                $no = 1;
                                foreach ($tpa as $row){                         
                    ?>
                    <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $this->Etc->tgl($row->tanggal); ?></td>
                    <td><?php echo $row->keterangan; ?></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
                </table>
     
         
           
          
          </div>
        </div>
      </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<?php $this->load->view('footer'); ?>