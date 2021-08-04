<?php   

class Berita extends CI_Controller{

    function selectData(){
        return $this->db->query("Select * FROM tb_berita")->result();
    }

    function select_by($id) {

        $data['tb_berita'] = $this->Berita_m->selectid($id);
        $this->load->view('berita/detailnews', $data);
    }

    function select_by_get_berita($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->detailnews($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul_berita;
                $response['isi'] = $value->isi_berita;
                $response['gambar'] = $value->gambar_berita;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }

        $this->load->view('berita/detailnews', $data);
    }

    
}