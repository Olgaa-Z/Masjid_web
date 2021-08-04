<?php $this->load->view('header'); ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">FASILITAS</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                <li class="active">Fasilitas</li>
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
<div class="section padding_layout_1">
  <div class="container">
   

    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>FASILITAS MASJID</h2>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
    <?php
            $fasilitas = $this->Home_m->selectFasilitas();
            foreach ($fasilitas as $row){                         
        ?>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
        <div class="product_list">
          <div class="product_img"> <img src="<?php echo base_url(); ?>admin/assets/fasilitas/<?php echo $row->gambar_fasilitas; ?>"/> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="#"><?php echo $row->nama_fasilitas; ?></a></h4>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

   
  </div>
</div>
<!-- end section -->

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