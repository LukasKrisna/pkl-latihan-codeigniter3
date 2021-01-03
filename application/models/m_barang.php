<?php 
class M_barang extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('barang');
    }
}
