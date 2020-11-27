<?php
class Authenicate extends CI_Model
{
    public function getdata()
    {
        $this->load->database();
        $q = $this->db->query('SELECT name FROM `names` WHERE id=1');
        return       $re = $q->result();
    }
}


?>