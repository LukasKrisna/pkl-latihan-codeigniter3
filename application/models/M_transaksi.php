<?php 
class M_transaksi extends CI_Model 
{
    public function tampilData()
    {
        // return $this->db->get('transaksi');
        $this->db->select('transaksi.*,dinas.nama_dinas,master_aset.jenis_aset,ruangan.nama_ruangan');
        $this->db->from('transaksi');
        $this->db->join('dinas','transaksi.kode_dinas=dinas.kode_dinas','left');
        $this->db->join('ruangan','transaksi.kode_ruangan=ruangan.kode_ruangan','left');
        $this->db->join('master_aset','transaksi.kode_aset=master_aset.kode_aset','left');
        return $this->db->get();
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
        $this->db->or_like('kode_ruangan', $keyword);
        $this->db->or_like('kode_aset', $keyword);
        $this->db->or_like('merk_aset', $keyword);
        $this->db->or_like('jumlah_aset', $keyword);
        $this->db->or_like('tgl_pembelian', $keyword);
        $this->db->or_like('kondisi_aset', $keyword);

        return $this->db->get()->result();
    }

    public function tambilDataDinas()
    {
        return $this->db->get('dinas');
    }

    public function keyRuangan()
    {
        return $this->db->get('ruangan');
    }

    public function keyAset()
    {
        return $this->db->get('master_aset');
    }
}


?>