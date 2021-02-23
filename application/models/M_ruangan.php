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
    public function detailData($kode_ruangan = NULL)
    {
        $query = $this->db->get_where('ruangan', array('kode_ruangan' => $kode_ruangan))->row();
        return $query;
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('ruangan');
        $this->db->like('kode_ruangan', $keyword);
        $this->db->or_like('kode_dinas', $keyword);
        $this->db->or_like('nama_ruangan', $keyword);
        $this->db->or_like('luas_ruangan', $keyword);
        $this->db->or_like('jumlah_barang', $keyword);
        $this->db->or_like('aset_ruangan', $keyword);
        $this->db->or_like('keterangan', $keyword);

        return $this->db->get()->result();
    }
}


?>