<?php 
class M_transaksi extends CI_Model 
{
    public function tampilData()
    {
        return $this->db->get('transaksi');
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
    public function detailData($kode_transaksi = NULL)
    {
        $query = $this->db->get_where('transaksi', array('kode_transaksi' => $kode_transaksi))->row();
        return $query;
    }
    public function searchData($keyword)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->like('kode_transaksi', $keyword);
        $this->db->or_like('kode_dinas', $keyword);
        $this->db->or_like('kode_barang', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('tempat_pembelian', $keyword);
        $this->db->or_like('tanggal_pembelian', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('tahun_pembuatan', $keyword);

        return $this->db->get()->result();
    }
}


?>