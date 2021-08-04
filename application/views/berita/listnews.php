<?php $this->load->view('header'); ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">BERITA</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                <li class="active">Berita</li>
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
          <div class="main_heading text_align_left">
            <h2>BERITA TERBARU</h2>
          </div>
        </div>
      </div>
    </div>


  
        
    <div class="row">
        <?php
            $string = "Here is a nice text string consisting of eleven words.";
       
            $news = $this->Berita_m->selectData();
            foreach ($news as $row){                         
        ?>
     

      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img">  <img src="<?php echo base_url(); ?>admin/assets/upload/<?php echo $row->gambar_berita; ?>" style="width:300px"> </div> 
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> <?php echo $this->Etc->tgl($row->tanggal_berita); ?></p>
          </div>
          <div class="blog_feature_head">
            <h4 style="text-align: justify;"><?php echo character_limiter($row->judul_berita,25); ?></h4>
            <p style="text-align: justify; margin-right: 70px;"> <?php echo word_limiter($row->isi_berita,20); ?></p>

          </div>
          <div class="blog_feature_cont">
            
            <p><a class="btn main_bt" href="<?php echo site_url('Berita/select_by/'.$row->id_berita); ?>">Selengkapnya...</a></p>
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