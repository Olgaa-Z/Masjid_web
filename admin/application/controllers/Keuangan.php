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

    public function laporan(){
        $this->load->view('keuangan/laporan_dashboard');
    }

    public function saldomonth(){
        $this->load->view('keuangan/laporan_saldo_m');
    }

    public function saldoyear(){
        $this->load->view('keuangan/laporan_saldo_y');
    }

    public function saldorange(){
        $this->load->view('keuangan/laporan_saldo_range');
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
        redirect('Keuangan/pemasukan');
    }
    function deletePengeluaran($id_keuangan){
        $this->Keuangan_m->delete_pemasukan($id_keuangan);
        redirect('Keuangan/pengeluaran');
    }

    //EDIT PEMASUKAN

    function editpemasukanform($id) {

        $data['tb_keuangan'] = $this->Keuangan_m->data_editkeuangan($id);
        $this->load->view('keuangan/edit_pemasukan', $data);
    }
    
    function editPemasukan(){
        $id = $this->input->post('id');

            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'pemasukan' => $this->input->post('pemasukan'),
                'deskripsi' => $this->input->post('deskripsi')
               
            );  
        $this->Keuangan_m->edit_keuangan($id, $data);
        redirect('Keuangan/pemasukan');
    }

     //EDIT PENGELUARAN

     function editpengeluaranform($id) {

        $data['tb_keuangan'] = $this->Keuangan_m->data_editkeuangan($id);
        $this->load->view('keuangan/edit_pengeluaran', $data);
    }
    
    function editPengeluaran(){
        $id_keuangan = $this->input->post('id_keuangan');

            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'deskripsi' => $this->input->post('deskripsi')
               
            );  
        $this->Keuangan_m->edit_keuangan($id_keuangan, $data);
        redirect('Keuangan/pengeluaran');
    }







}

?>