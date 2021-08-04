<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>SIMASJID</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="<?php echo base_url();?>images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="<?php echo base_url();?>css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="<?php echo base_url();?>css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="<?php echo base_url();?>css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>revolution/css/navigation.css" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->


    <!--table-->
    <link href="<?php echo base_url()?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    
  <!--table-->
    <link href="<?php echo base_url()?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

   
  
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="<?php echo base_url();  ?>assets/images/loaders/pp.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
              <?php
                 $email = $this->Home_m->selectData();
                 foreach ($email as $row) {
                ?>
                
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"><?php echo $row->alamat_masjid; ?></span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:<?php echo $row->email_masjid; ?>"><?php echo $row->email_masjid; ?></a></span> </li>
                <?php } ?>
                
              </ul>
            </div>
          </div>
        </div>

         <?php
              $socmed= $this->Etc->selectDataSocmed();
              foreach ($socmed as $row) {
         ?>

        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="<?php echo site_url('Etc/editSocmedForm/' . $row->id); ?>" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com/lauwba_techno" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <?php
          }
        ?>

      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> 
            <?php
                 $logo = $this->Home_m->selectData();
                 foreach ($logo as $row) {
            ?>
            <!-- <a href="it_home.html"><img src="assets/images/logos/logo.png" alt="logo" /></a>  -->
            <a ><img src="<?php echo base_url(); ?>admin/assets/logo/<?php echo $row->logo; ?>"></a> 
            <?php } ?>
          </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
              <li><a class="active"  href="<?php echo site_url('Home'); ?>">HOME</a></li>
                <li> <a href="#">TENTANG KAMI</a>
                  <ul>
                    <li><a href="<?php echo site_url('Home/sejarah'); ?>">SEJARAH</a></li>
                    <li><a href="<?php echo site_url('Home/visimisi'); ?>">VISI & MISI</a></li>
                    <li><a href="<?php echo site_url('Home/takmir'); ?>">PENGURUS TAKMIR</a></li>
                     <li><a href="<?php echo site_url('Home/fasilitas'); ?>">FASILITAS MASJID</a></li>
                  </ul>
                </li>
                <li> <a href="#">JADWAL</a>
                  <ul>
                    <li><a href="<?php echo site_url('Home/jadwalsholat');  ?>">JADWAL SHOLAT</a></li>
                    <li><a href="<?php echo site_url('Home/jadwalkajian');  ?>">JADWAL KAJIAN</a></li>
                    <li><a href="<?php echo site_url('Home/jadwaljumat');  ?>">JADWAL IMAM & KHATIB (JUMAT)</a></li>
                    <li><a href="<?php echo site_url('Home/jadwaltpa');  ?>">JADWAL TPA</a></li>
                    <li><a href="<?php echo site_url('Home/jadwallainnya');  ?>">KEGIATAN LAINNYA</a></li>
                  </ul>
                </li>
                <!-- <li> <a href="it_blog.html">JAMAAH</a> -->
                </li>
                <li> <a href="<?php echo site_url('Home/galeri'); ?> ">GALLERY</a>
                </li>
                <li> <a href="<?php echo site_url('Home/berita'); ?>">BERITA</a>
                </li>
                <li> <a href="#">KEUANGAN</a>
                  <ul>
                    <li><a href="<?php echo site_url('Home/pemasukan');  ?>">Pemasukan Masjid</a></li>
                    <li><a href="<?php echo site_url('Home/pengeluaran');  ?>">Pengeluaran Masjid</a></li>
                    <li><a href="<?php echo site_url('Home/kas');  ?>">Kas Masjid Bulan Ini</a></li>
                    <li><a href="<?php echo site_url('Home/kastahunini');  ?>">Kas Masjid Tahun Ini</a></li>
                  </ul>
                </li>
                <li> <a href="<?php echo site_url('Home/kontak'); ?>">KONTAK</a>
                </li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->