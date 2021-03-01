<?php 
class M_dinas extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('dinas');
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
    public function search($keyword)
    {
        $this->db->select('*');
        $this->db->from('dinas');
        $this->db->like('kode_dinas', $keyword);
        $this->db->or_like('nama_dinas', $keyword);
        $this->db->or_like('alamat', $keyword);

        return $this->db->get()->result();

    }
}
?>