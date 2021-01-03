<?php 
class M_barang extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('barang');
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
