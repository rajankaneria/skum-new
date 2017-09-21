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
            $details = array('status' => "1", 'message' => "Success", 'role' => "$role");
        }
        else
        {
            $details = array('status' => "0", 'message' => "Invalid Username and Password");
        }
        return $details;
    }

    function classdiv(){
        $query = $this->db->query("select * from class");
        $result = $query->result_array();

        return $result;
    }

    function admin_attendence($class){
        $query = $this->db->query("select * from profile where class='$class'");
        $count = $query->num_rows();
        $result = $query->result_array();
        if($count!=0)
        {           
            $details = array('status' => "1", 'message' => "Success", 'Student' => $result);
        }
        else
        {
            $details = array('status' => "0", 'message' => "Student Not Found");
        }
        return $details;
    }

    function studentInsert($studentData){

        $query = $this->db->insert("profile",$studentData);
        $profileID = $this->db->insert_id();
        $details =  array('status' => "1", 'message' => "Success","profile_id" => $profileID);
        
        return $details;
    }

    function noticeBoardInsert($title,$description){

        $query = $this->db->query("insert into noticeboard(title,description) values('$title','$description')");
        
        $details =  array('status' => "1", 'message' => "Success");
        
        return $details;
    }

    function noticeBoardView(){
        $query = $this->db->query("select * from noticeboard");
        $result = $query->result_array();
        
        return $result;
    }

    function activityInsert($title,$description,$activity_date){

        $activity_date = date("Y-m-d", strtotime($activity_date));
        $query = $this->db->query("insert into activity(title,description,activity_date) values('$title','$description','$activity_date')");
        
        $details =  array('status' => "1", 'message' => "Success");
        
        return $details;
    }

}
?>