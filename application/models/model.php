<?php
class model extends CI_Model
{
  public $nama_pembeli;
    public $no_hp;
    public $merk_sepatu;
    public $ukuran_sepatu;

    public function __construct($nama_pembeli, $no_hp, $merk_sepatu, $ukuran_sepatu) {
        $this->nama_pembeli = $nama_pembeli;
        $this->no_hp = $no_hp;
        $this->merk_sepatu = $merk_sepatu;
        $this->ukuran_sepatu = $ukuran_sepatu;
    }

    public function hitungTotalHarga() {
        switch ($this->merk_sepatu) {
            case 'Nike':
                return 375000;
            case 'Adidas':
                return 300000;
            case 'Kickers':
                return 250000;
            case 'Eiger':
                return 275000;
            case 'Bucherri':
                return 400000;
            default:
                return 0;
        }
    }
}
?>