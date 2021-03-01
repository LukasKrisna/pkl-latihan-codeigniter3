<?php 
class M_Master_aset extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('master_aset');
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
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where); 
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('master_aset');
        $this->db->like('kode_aset', $keyword);
        $this->db->or_like('jenis_aset', $keyword);

        return $this->db->get()->result();
    }
}
