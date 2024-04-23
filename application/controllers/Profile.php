<?php
class Profile extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-profile');
 }
 public function cetak()
 {
    $this->form_validation->set_rules('nim', 'Kode Nim',
    'required|min_length[3]', [
     'required' => 'Nim harus diisi',
     'min_lenght' => 'nim terlalu pendek'
     ]);

     $this->form_validation->set_rules('nama', 'Nama',
    'required|min_length[3]', [
     'required' => 'Nama harus diisi',
     'min_lenght' => 'nama terlalu pendek'
     ]);


     $this->form_validation->set_rules('tempatl', 'Tempat Lahir',
    'required|min_length[3]', [
     'required' => 'Tempat Lahir harus diisi',
     'min_lenght' => 'terlalu pendek'
     ]);
     $this->form_validation->set_rules('alamat', 'Alamat',
    'required|min_length[3]', [
     'required' => 'Alamat harus diisi',
     'min_lenght' => 'Alamat terlalu pendek'
     ]);
     
     if ($this->form_validation->run() != true) {
     $this->load->view('view-form-profile');
    } else {
        $data = [
        'nim' => $this->input->post('nim'),
        'nama' => $this->input->post('nama'),
        'tgll' => $this->input->post('tgll'),
        'tempatl' => $this->input->post('tempatl'),
        'alamat' => $this->input->post('alamat')
        ];
        $this->load->view('view-data-profile', $data);
        }
        }
       }    