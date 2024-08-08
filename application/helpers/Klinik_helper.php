<?php
class Klinik_helper{
    
    public function read_klinik(){
        $poliklinik=get_instance();
        $poliklinik->load->database();
        $query = $poliklinik->db->query("select * from poli");
        return $query->result();
    }

    public function read_dokter(){
        $poliklinik=&get_instance();
        $poliklinik->load->database('dokter');
        $query = $poliklinik->db->query("SELECT * FROM dokter a join poli b on a.kode_poliklinik = b.kode_poliklinik");
        return $query->result();    
    }
}
