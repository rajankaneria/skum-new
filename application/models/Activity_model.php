<?php 
class Activity_model extends CI_Model{

    function getMonthActivity($month)
    {
        $date = "01-$month-".date('Y');
        $time=strtotime($date);
        $month=date("n",$time);
        $year=date("Y",$time);
        $query = $this->db->query("SELECT * FROM activity WHERE YEAR(activity_date) = $year AND MONTH(activity_date) = $month");
        $result = $query->result_array();
        foreach ($result as $key => $row) {
            $time=strtotime($row["activity_date"]);
            $day=date("d",$time);
            $result[$key]["activity_day"] = $day;
        }
        $output["status"] = 1;
        if(sizeof($result) == 0){
            $output["status"] = 0;
        }
        $output["activity_list"] = $result;
        
        return $output;
    }

}
?>