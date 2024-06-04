<?php
class Siswa extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-siswa');
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

     $this->form_validation->set_rules('kelas', 'Kelas',
    'required|min_length[3]', [
     ]);


     $this->form_validation->set_rules('tgll', 'Tanggal Lahir',
    'required|min_length[3]', [
     ]);

     $this->form_validation->set_rules('tempatl', 'Tempat Lahir',
    'required|min_length[3]', [
     'required' => 'Tempat Lahir harus diisi',
     'min_lenght' => 'terlalu pendek'
     ]);

     $this->form_validation->set_rules('kelamin', 'Jenis Kelamin',
    'required|min_length[3]', [
     ]);

     $this->form_validation->set_rules('alamat', 'Alamat',
    'required|min_length[3]', [
     'required' => 'Alamat harus diisi',
     'min_lenght' => 'Alamat terlalu pendek'
     ]);

     $this->form_validation->set_rules('agama', 'Agama',
    'required|min_length[3]', [
     ]);
     
     if ($this->form_validation->run() != true) {
     $this->load->view('view-form-siswa');
    } else {
        $data = [
        'nim' => $this->input->post('nim'),
        'nama' => $this->input->post('nama'),
        'kelas' => $this->input->post('kelas'),
        'kelamin' => $this->input->post('kelamin'),
        'tgll' => $this->input->post('tgll'),
        'tempatl' => $this->input->post('tempatl'),
        'alamat' => $this->input->post('alamat'),
        'agama' => $this->input->post('agama')
        ];
        $this->load->view('view-data-siswa', $data);
        }
        }
       }    