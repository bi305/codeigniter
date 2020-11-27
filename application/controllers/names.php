<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Names extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$result = $this->db->query("SELECT * FROM `names` WHERE `gender`=  'female' AND `name` like  's%' ")->result();

		$d["all_names"] = $result;


		$this->load->view('header');
		$this->load->view('names_view', $d);
		$this->load->view('footer');

	 
	}

	public function letter($gender, $alphabet)
	{

		$alphabet =  urldecode($alphabet);
		$qry = "";

		if ($gender == "all") {
			// $qry="SELECT n.name, n.id, n.name_arabic,  GROUP_CONCAT(DISTINCT(m.meaning) SEPARATOR ', ') as meaning_english ,	GROUP_CONCAT(DISTINCT(m.meaning_arabic) SEPARATOR ', ') as meaning_arabic, count(v.name_id) as total_views FROM `names` n 
			// LEFT JOIN name_meanings nm on nm.name_id =n.id
			// LEFT JOIN meanings m ON nm.meaning_id = m.id 
			// left join views v on v.name_id = n.id
			// WHERE (`name` like  '$alphabet%' OR `name_arabic` like  '$alphabet%' )
			// GROUP BY n.id";
			$qry = " SELECT n.*,count(name_id) as total_views FROM `names` n left join views v on v.name_id = n.id 
		    WHERE (`name` like  '$alphabet%' OR `name_arabic` like  '$alphabet%' ) group by n.id;";
		} else {

			 
			$qry = " SELECT n.*,count(name_id) as total_views FROM `names` n left join views v on v.name_id = n.id 
			 WHERE `gender`=  '$gender' AND (`name` like  '$alphabet%' OR `name_arabic` like  '$alphabet%' ) group by n.id;";
		}

		
		$result = $this->db->query($qry)->result();

		

		$d["all_names"] = $result;
		$d["gender"] = $gender;
		$d["alphabet"] = $alphabet;
	  
		$this->load->view('header');
		$this->load->view('names_view', $d);	
		$this->load->view('footer');
	}

	public function name_details($name_id)
	{
		// for names data 
		$qry1 = " SELECT * FROM `names` WHERE  `id`= $name_id LIMIT 1";
		$result = $this->db->query($qry1)->row();
		$d['all_name_data'] = $result;

		// for  meanings
		$qry2 = " SELECT * FROM `name_meanings` INNER  JOIN meanings ON name_meanings.meaning_id = meanings.id WHERE `name_id`= $name_id";
		$result1 = $this->db->query($qry2)->result();
		$d['meaning_data'] = $result1;

		// for  name views
		$qry3 = "INSERT INTO `views`(  `name_id` ) VALUES ($name_id )";
		$result2 = $this->db->query($qry3);
		$d['views'] = $result2;

		//for  related names
		$gender = $result->gender;
		$first = $result->name[0];

		$qry4 = "SELECT * FROM `names` WHERE `gender`= '$gender' and  name like '$first%' and id <> $name_id";
		$result4 = $this->db->query($qry4)->result();
		$d['related_names'] = $result4;

		// for  famous  people   related to  the  name 

		 $qry5=" SELECT famous_people.* FROM famous_people INNER  JOIN famous_people_names ON  famous_people_names.famous_people_id = famous_people.id WHERE `name_id`=$name_id";
		 $result5=$this->db->query($qry5)->result();
		$d['famous_people_names'] =$result5;
	 


		$this->load->view('header');
		$this->load->view('single_name_view', $d);
		$this->load->view('footer');
	}

	 

	

}

?>