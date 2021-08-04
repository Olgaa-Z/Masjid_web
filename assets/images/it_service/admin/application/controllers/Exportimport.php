<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Exportimport extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Import_model');
    }



    public function index()
    {
        $data['title'] = 'Export Import';
        $data['semuabarang'] = $this->Import_model->getDataBarang();
        $this->load->view('jamaah/import_jamaah', $data);
    }

    public function uploaddata()
    {
        // $path = './test';
    //    var_dump(is_dir($path));
            // mkdir($path, 777, true);
        // }
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();

        $this->upload->initialize($config);

        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $databarang = array(
                            'nama'  => $row->getCellAtIndex(1),
                            'umur'  => $row->getCellAtIndex(2),
                            'jk'       => $row->getCellAtIndex(3),
                            'alamat' => $row->getCellAtIndex(4),
                        );
                        $this->Import_model->import_data($databarang);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'Import Data dari Excell Berhasil');
                redirect('Exportimport');
            }
        } else {
            // echo "Error :" . ;
            print_r($this->upload->display_errors("Belum memilih file ! <br>"));
        };
    }
}
