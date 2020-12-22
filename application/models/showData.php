<?php 
class ShowData extends CI_Model
{
    public function get_data() {
        return $this->db->get('barang')->result_array();
    }
}

?>