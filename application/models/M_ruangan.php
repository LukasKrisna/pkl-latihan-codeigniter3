<?php 
class M_ruangan extends CI_Model 
{
    public function tampilData()
    {
        return $this->db->get('ruangan');
    }
    public function inputData($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapusData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function editData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}


?>