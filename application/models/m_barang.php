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
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where); 
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($kode_barang = NULL)
    {
        $query = $this->db->get_where('barang', array('kode_barang' => $kode_barang))->row();
        return $query;
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('kode_barang', $keyword);
        $this->db->or_like('foto_barang', $keyword);
        $this->db->or_like('merk', $keyword);
        $this->db->or_like('no_seri_pabrik', $keyword);
        $this->db->or_like('ukuran', $keyword);
        $this->db->or_like('bahan', $keyword);
        $this->db->or_like('tahun_pembuatan', $keyword);
        $this->db->or_like('jumlah_barang', $keyword);
        $this->db->or_like('harga_beli', $keyword);
        $this->db->or_like('keadaan_barang', $keyword);
        $this->db->or_like('keterangan', $keyword);

        return $this->db->get()->result();
    }
}
