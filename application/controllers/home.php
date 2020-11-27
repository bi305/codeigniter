<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

		
		$result = $this->db->query('SELECT * FROM `names` WHERE `gender` = "male" limit 1 ')->row();
		// $result = $this->db->query('SELECT names.name ,names.id FROM `names`join  name_meanings on  names.id =name_meanings.name_id join  meanings on meanings.id =name_meanings.meaning_id WHERE `gender` = "male"  limit 1 ')->row();

		$result1 = $this->db->query('SELECT * FROM `names` WHERE `gender` = "female"  ORDER BY name limit 1 ;')->row();

		// $d = array();
		$d["name_of_the_day_male"] = $result;
		$d["name_of_the_day_female"] = $result1;
		
		$this->load->view('header');
 		$this->load->view('home_view', $d);
		$this->load->view('footer');
	}


	 
}
