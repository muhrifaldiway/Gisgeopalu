<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata_model extends CI_Model{

    public function create(){
        $data = array('nama' => $this->input->post('nama'),
        'keterangan'=>$this->input->post('keterangan'));
        $query = $this->db->insert('wisata', $data);
        return $query;
    }
    public function getAll(){
        $query = $this->db->get('wisata');
        return $query;
    }
    public function read($id){
        $this->db->where('id_wisata', $id);
        $query = $this->db->get('wisata');
        return $query;
    }
    public function delete($id){
        $this->db->where('id_wisata', $id);
        $query = $this->db->delete('wisata');
        return $query;
    }
    public function update($id){
        $data = array('nama' => $this->input->post('nama'),
        'keterangan'=>$this->input->post('keterangan'));
        $this->db->where('id_wisata', $id);
        $query = $this->db->update('wisata', $data);
        return $query;
    }

}
