<?php


class matkul_helper 
{
	
	public function read_matkul ()
	
	{
        $ci=get_instance();
        $ci->load->database();
        $query = $ci->db->query("SELECT * FROM matkul");
        return $query->result();
    }
    
    


}