<?php
class Sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-sepatu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'sepatu',
            'Sepatu',
            'required|min_length[3]',
            [
                'required' => 'Kode NIM Harus diisi'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-sepatu');
        } else {
            $this->load->model('ModelSepatu');
            $total = $this->ModelSepatu->total();
            $data = [
                'sepatu' => $this->input->post('sepatu'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $total
            ];
            $this->load->view('view-data-sepatu', $data);
        }
    }
}