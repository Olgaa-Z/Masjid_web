<?php

class Keuangan extends Ci_Controller{


    public function pemasukan(){
        $this->load->view('keuangan/pemasukan_v');
    }

    function listpemasukan(){
        $this->load->view('keuangan/list_pemasukan');
    }

    function listpengeluaran(){
        $this->load->view('keuangan/list_pengeluaran');
    }

    public function pengeluaran(){
        $this->load->view('keuangan/pengeluaran');
    }


    function insertPemasukan(){

            
                $data = array(
                    'tanggal' => $this->input->post('tanggal'),
                    'pemasukan' => $this->input->post('pemasukan'),
                    'deskripsi' => $this->input->post('deskripsi')
                );
                $this->Keuangan_m->insert_pemasukan($data);
               
         
                $error = array(
                    'error' => $this->upload->display_errors()
                );
                echo json_encode($error);
    
            redirect('Keuangan/pemasukan');
        
    }

    function insertPengeluaran(){ 
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'pengeluaran' => $this->input->post('pengeluaran'),
            'deskripsi' => $this->input->post('deskripsi')
        );
        $this->Keuangan_m->insert_pemasukan($data);
       
 
        $error = array(
            'error' => $this->upload->display_errors()
        );
        echo json_encode($error);

    redirect('Keuangan/pengeluaran');

}

    function deletePemasukan($id_keuangan){
        $this->Keuangan_m->delete_pemasukan($id_keuangan);
        redirect('Keuangan/listpemasukan');
    }
    function deletePengeluaran($id_keuangan){
        $this->Keuangan_m->delete_pemasukan($id_keuangan);
        redirect('Keuangan/listpengeluaran');
    }
}

?>