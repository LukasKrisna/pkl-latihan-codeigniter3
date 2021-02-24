<?php 
class M_transaksi extends CI_Model 
{
    public function tampilData()
    {
        return $this->db->get('transaksi');
    }
}


?>