<?php

class Home extends CI_Controller{

    function index(){
        $this->load->view('index');
    }
    function sejarah(){
        $this->load->view('masjid/profilmasjid');
    }

    function visimisi(){
        $this->load->view('masjid/visimisi');
    }

    function berita(){
        $this->load->view('berita/listnews');
    }

    function takmir(){
        $this->load->view('masjid/takmir');
    }

    function kontak(){
        $this->load->view('kontak/kontak');
    }

    function galeri(){
        $this->load->view('galeri/galeri');
    }
    
    function select_galeri($id_galeri) {

        $data['layanan'] = $this->Layanan_m->select_id($id_galeri);
        $this->load->view('layanan_form_edit_v', $data);
    }

    public function jadwalsholat(){
        $this->load->view('jadwal/jadwalsholat');
    }

    function jadwalkajian(){
        $this->load->view('jadwal/jadwalkajian');
    }

    function jadwaljumat(){
        $this->load->view('jadwal/jadwaljumat');
    }

    function jadwaltpa(){
        $this->load->view('jadwal/jadwaltpa');
    }

    function jadwallainnya(){
        $this->load->view('jadwal/jadwallainnya');
    }


    function pemasukan(){
        $this->load->view('keuangan/pemasukan');
    }

    function pengeluaran(){
        $this->load->view('keuangan/pengeluaran');
    }

    function kas(){
        $this->load->view('keuangan/kasmasjid');
    }

     function kastahunini(){
        $this->load->view('keuangan/kasmasjidtahunini');
    }

    function fasilitas(){
        $this->load->view('masjid/fasilitasmasjid');
    }


    
}