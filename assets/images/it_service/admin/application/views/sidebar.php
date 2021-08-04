<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard Masjid
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url() ?>/assets/demo/demo.css" rel="stylesheet" />

  <!-- get Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/dataTables.bootstrap.min.css" /> 
  <link rel="stylesheet" href="<?php echo base_url();?>asset/summernote/summernote.css" />

  <link href="<?php echo base_url() ?>/assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          SI MASJID
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">

          <li>
            <a href="<?php echo site_url('Dashboard'); ?> ">
            <i class="now-ui-icons shopping_shop"></i>
              <p>DASHBOARD</p>
            </a>
          </li>

          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-la" aria-expanded="false" aria-controls="ui-basic">
              <i class="now-ui-icons travel_istanbul"></i>
                <span class="menu-title">MASJID</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-la">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Masjid');?>">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Masjid/fasilitas');?>">Fasilitas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Masjid/takmir');?>">Takmir</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Masjid/lainlain');?>">Sejarah </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Masjid/visimisi');?>">Visi Misi</a>
                  </li>
                </ul>
              </div>
            </li>


          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="now-ui-icons design_bullet-list-67"></i>
                <span class="menu-title">JADWAL</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Jadwal Sholat</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Jadwal/jadwaljumat');  ?>">Jadwal Imam & Khatib</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Jadwal/jadwalkajian');  ?>">Jadwal Kajian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Jadwal/jadwaltpa');  ?>">Jadwal TPA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Jadwal/jadwallainnya'); ?>">Jadwal Kegiatan Lainnya</a>
                  </li>
                </ul>
              </div>
            </li>

            <li>
          <!-- <li class="active "> -->
            <a href="<?php echo site_url('Galeri/index'); ?>">
            <i class="now-ui-icons media-1_album"></i>
              <!-- <i class="now-ui-icons location_map-big"></i> -->
              <p>GALERY</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('Jamaah'); ?>">
            <i class="now-ui-icons business_badge"></i>
              <p>DATA JAMAAH</p>
            </a>
          </li>
          <li>
          <a href="<?php echo site_url('Berita/index'); ?> ">
            <i class="now-ui-icons education_paper"></i>
              <p>BERITA</p>
            </a>
          </li>
      

          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#keuangan" aria-expanded="false" aria-controls="ui-basic">
              <i class="now-ui-icons business_chart-bar-32"></i>
                <span class="menu-title">KEUANGAN</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="keuangan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Keuangan/pemasukan');  ?>">Pemasukan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Keuangan/pengeluaran');  ?> ">Pengeluaran</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url(); ?>">Laporan Keuangan</a>
                  </li>
                </ul>
              </div>
            </li>
         
        </ul>
      </div>
    </div>
