<?php
class ModelSepatu extends CI_Model
{
    public function total()
    {
        if ($this->input->post('sepatu') == 'Nike') {
            $data = 375000;
            return $data;
        }
        if ($this->input->post('sepatu') == 'Adidas') {
            $data = 300000;
            return $data;
        }
        if ($this->input->post('sepatu') == 'Kickers') {
            $data = 2500000;
            return $data;
        }
        if ($this->input->post('sepatu') == 'Eiger') {
            $data = 275000;
            return $data;
        }
        if ($this->input->post('sepatu') == 'Bucherri') {
            $data = 400000;
            return $data;
        }
    }
}