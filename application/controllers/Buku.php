<?php
class Buku extends CI_Controller
{
    public function kategori()
    {
        $data['judul'] = 'Kategori Buku';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required',
            [
                'required' => 'Judul Buku harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('buku/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori')
            ];
            $this->ModelBuku->simpanKategori($data);
            redirect('buku/kategori');
        }
    }
    public function hapusKategori()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelBuku->hapusKategori($where);
        redirect('buku/kategori');
    }

    public function ubahKategori()
    {
        $data['judul'] = 'Ubah Data Kategori';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelBuku->kategoriWhere(['id' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required|min_length[3]', [
            'required' => 'Nama Kategori harus diisi',
            'min_length' => 'Nama Kategori terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('buku/ubah_kategori', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'kategori' => $this->input->post('kategori', true)
            ];

            $this->ModelBuku->updateKategori(['id' => $this->input->post('id')], $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Kategori Berhasil diupdate </div>');
            redirect('buku/kategori');
        }
    }
}