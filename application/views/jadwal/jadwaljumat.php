<?php $this->load->view('header'); ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">JADWAL JUMAT</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                <li class="active">Jadwal Jumat</li>
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
                <h2>JADWAL SHOLAT JUMAT  <?php echo $row->nama_masjid; ?> </h2>
              </div>
              <?php } ?>
          </div>

                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Imam</th>
                    <th scope="col">Khatib</th>
                    <th scope="col">muazin</th>
                    <th scope="col">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                $jumat = $this->Jadwal_m->selectDataJumat();
                                $no = 1;
                                foreach ($jumat as $row){                         
                    ?>
                    <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $row->imam; ?></td>
                    <td><?php echo $row->khatib; ?></td>
                    <td><?php echo $row->muazin; ?></td>
                    <td><?php echo $this->Etc->tgl($row->tanggal); ?></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
                </table>
     
         <!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h4>GET IN TOUCH</h4>
              <p>Our goal is to provide the best customer service and to answer all of your questions in a timely manner.</p>
              <div class="form_section">
                <form class="form_contant" action="index.html">
                  <fieldset>
                  <div class="row">
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Websire URL" type="text" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Your name" type="text" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Email adress" type="email" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Phone number" type="text" required />
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea class="field_custom" placeholder="Messager" required ></textarea>
                    </div>
                    <div class="center"><a class="btn main_bt" href="#">SUBMIT NOW</a></div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div> -->
          </div>
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