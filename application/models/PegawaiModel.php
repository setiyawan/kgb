<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PegawaiModel extends CI_Model {
    
    public function get_pegawai($filter=[]) {
        if (!empty($filter['id_pegawai'])) {
            $this->db->where('id_pegawai', $filter['id_pegawai']);
        }

        $this->db->select('p.*, u.full_name');
        $this->db->join('user u', 'u.user_id = p.verify_by', 'left');

        return  $this->db->get('pegawai p')->result_array();
        // print_r($this->db->last_query());  
        // die;
    }

    // POST TRANSACTION
    public function add_data_pegawai($data) {
        return $this->db->insert('pegawai', $data);
    }

    public function update_data_pegawai($data, $id_pegawai){
        $this->db->set($data);
        $this->db->where('id_pegawai', $id_pegawai);
        return $this->db->update('pegawai');
    }

}

?>