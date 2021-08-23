<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model {
    
    public function total_pegawai($filter=[]) {
        if (!empty($filter['bulan'])) {
            $this->db->where('month(tgl_mengajukan_kgb)', $filter['bulan']);
            $this->db->where('year(tgl_mengajukan_kgb)', $filter['tahun']);
        }

        if (!empty($filter['berkas_url'])) {
            $this->db->where('berkas_url <> ', '');
        }

        if (!empty($filter['status'])) {
            $this->db->where('status', $filter['status']);
        }

        return $this->db->count_all_results('pegawai');
    } 

}

?>