<?php 
class User_model extends CI_Model{

    function getProfile($profileID){
        $query = $this->db->query("select * from profile where id='$profileID'");
        if($query->num_rows() > 0){
            return $query->row_array();
        }else{
            return [];
        }
    }

    function login($uname,$pass){
        $query = $this->db->query("select * from login where uname='$uname' and pass='$pass'");
        $count = $query->num_rows();
        if($count!=0)
        {           
            $details = array('status' => "1", 'message' => "Success");
        }
        else
        {
            $details = array('status' => "0", 'message' => "Invalid Username and Password");
        }
        return $details;
    }

}
?>