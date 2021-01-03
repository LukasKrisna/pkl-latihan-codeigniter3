<?php 
class Barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->m_barang->tampilData()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('barang', $data);
		$this->load->view('templates/footer');
    }
    public function tambahAksi()
    {
        $kode_barang      = $this->input->post('kode_barang');
        $nama_barang      = $this->input->post('nama_barang');
        $foto_barang      = $this->input->post('foto_barang');
        $merk             = $this->input->post('merk');
        $no_seri_pabrik   = $this->input->post('no_seri_pabrik');
        $ukuran           = $this->input->post('ukuran');
        $bahan            = $this->input->post('bahan');
        $tahun_pembuatan  = $this->input->post('tahun_pembuatan');
        $jumlah_barang    = $this->input->post('jumlah_barang');
        $harga_beli       = $this->input->post('harga_beli');
        $keadaan_barang   = $this->input->post('keadaan_barang');
        $keterangan       = $this->input->post('keterangan');

        $data = array(
          'kode_barang'         => $kode_barang,
          'nama_barang'         => $nama_barang,
          'foto_barang'         => $foto_barang,
          'merk'                => $merk,
          'no_seri_pabrik'      => $no_seri_pabrik,
          'ukuran'              => $ukuran,
          'bahan'               => $bahan,
          'tahun_pembuatan'     => $tahun_pembuatan,
          'jumlah_barang'       => $jumlah_barang,
          'harga_beli'          => $harga_beli,
          'keadaan_barang'      => $keadaan_barang,
          'keterangan'          => $keterangan
        );

        $this->m_barang->input_data($data, 'barang');
        redirect('barang/index');
    }
    public function hapus($kode_barang)
    {
      $where = array(
        'kode_barang' => $kode_barang  
      );
      $this->m_barang->hapus_data($where, 'barang');
      redirect('barang/index'); 
    }
}
// kode_barang
// nama_barang
// foto_barang
// merk
// no_seri_pabrik
// ukuran
// bahan
// tahun_pembuatan
// jumlah_barang
// harga_beli
// keadaan_barang
// keterangan