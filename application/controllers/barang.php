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
        $foto_barang      = $_FILES['foto_barang'];
        $merk             = $this->input->post('merk');
        $no_seri_pabrik   = $this->input->post('no_seri_pabrik');
        $ukuran           = $this->input->post('ukuran');
        $bahan            = $this->input->post('bahan');
        $tahun_pembuatan  = $this->input->post('tahun_pembuatan');
        $jumlah_barang    = $this->input->post('jumlah_barang');
        $harga_beli       = $this->input->post('harga_beli');
        $keadaan_barang   = $this->input->post('keadaan_barang');
        $keterangan       = $this->input->post('keterangan');
        if ($foto_barang='') {
          # code...
        }else{
          $config['upload_path']      = './assets/foto_barang';
          $config['allowed_types']    = 'jpg|png|gif';

          $this->load->library('upload', $config);
          
          if (!$this->upload->do_upload('foto_barang')) {
            echo "Upload Gagal";
            die();
          }else {
            $foto_barang = $this->upload->data('file_name');
          }
        }

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
    public function edit($kode_barang)
    {
      $where = array(
        'kode_barang' => $kode_barang 
      );
      $data['barang'] = $this->m_barang->edit_data($where, 'barang')->result();

    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
    }
    public function update()
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
        'kode_barang'     => $kode_barang, 
        'nama_barang'     => $nama_barang,
        'foto_barang'     => $foto_barang, 
        'merk'            => $merk, 
        'no_seri_pabrik'  => $no_seri_pabrik, 
        'ukuran'          => $ukuran, 
        'bahan'           => $bahan, 
        'tahun_pembuatan' => $tahun_pembuatan, 
        'jumlah_barang'   => $jumlah_barang, 
        'harga_beli'      => $harga_beli, 
        'keadaan_barang'  => $keadaan_barang, 
        'keterangan'      => $keterangan
         
      
      );
      $where = array('kode_barang' => $kode_barang, );
      $this->m_barang->update_data($where, $data, 'barang');
      redirect('barang/index');
    }
    public function detail($kode_barang)
    {
      $this->load->model('m_barang');
      $detail = $this->m_barang->detail_data($kode_barang);
      $data['detail'] = $detail;

    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
    }
    public function print()
    {
      $data['barang'] = $this->m_barang->tampilData('barang')->result();
      $this->load->view('print_barang', $data);
    }
    public function pdf()
    {
      $this->load->library('dompdf_gen');

      $data['barang'] = $this->m_barang->tampilData('barang')->result();

      $this->load->view('laporan_pdf', $data);

      $paper_size = 'A4';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream('laporan_barang.pdf', array('Attachment' => 0));


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