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
        $query = $this->db->query("
            select r.name from login l
            join role r on l.role_id = r.id
            where  l.uname='$uname' and l.pass='$pass'");
        $count = $query->num_rows();
        $loginRow = $query->row_array();
        $role = $loginRow["name"];
        if($count!=0)
        {           
            $details = array('status' => "1", 'message' => "Success", 'Role' => "$role");
        }
        else
        {
            $details = array('status' => "0", 'message' => "Invalid Username and Password");
        }
        return $details;
    }

}
?>