<?php
 
	function get_english_alphabets(){

        $result = "";
        foreach(range('A','Z') as $obj){
             $result = $result  .  '<li><a href="'.base_url().'names/letter/all/'.$obj.'">'.$obj.'</a></li>';
    
        }

        return $result;
        
       
    }
  
    function  insert_name_views($name_id){
        $qry="INSERT INTO `views`( name_id  ) VALUES (' $name_id');";
        $ci = & get_instance();
         $result=$ci->db->query($qry);
        
        return $result;
    }

      

     function name_meaning($id)

    {
        $ci = &get_instance();
        
         $qry=" SELECT meanings.id ,GROUP_CONCAT(meanings.meaning  SEPARATOR ', ') as english_meaning ,GROUP_CONCAT(meanings.meaning_arabic  SEPARATOR ', ') as meaning_arabic  from name_meanings  
         left JOIN names
         on  
         names.id= name_meanings.name_id
         left JOIN meanings
         on  
         meanings.id =name_meanings.meaning_id
         WHERE  name_id= 4
         GROUP by names.id";

         $result= $ci->db->query($qry)->result();

         return $result;
    }
    function trending_names()
    {
        $ci = &get_instance();
		$date = new DateTime();
        $date = $date->modify("-1 days")->format('Y-m-d');

        $qry =" SELECT  n.*, count(v.id) as total FROM names n
        INNER JOIN  views v 
        on  v.name_id= n.id
        WHERE  DATE(v.created_at) = '$date' group by n.id order by total desc limit 5";
        $result= $ci->db->query($qry)->result();
        return $result;
        // echo "<pre>";
        // print_r($result);
    }

    function get_meanings($name_id){
        $ci = &get_instance();

       $qry="SELECT   GROUP_CONCAT( meanings.meaning SEPARATOR' ,')  as name_meanings FROM `names`
       join  name_meanings 
       on  names.id = name_meanings.name_id
       join  meanings 
       on meanings.id = name_meanings.meaning_id 
       WHERE names.id = $name_id";
       $result= $ci->db->query($qry)->row();
       return  $result->name_meanings;
            
    }

?>
 