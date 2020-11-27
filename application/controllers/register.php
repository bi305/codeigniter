<?php
class Register extends CI_Controller{

 public function index(){
     $this->load->view('register_view');
 }
 public function users_registeration()
 {
    $name= $this->input->post('name');
    $email= $this->input->post('email');
    $password= $this->input->post('password');

    $qry = "SELECT   `name`, `email`, `password` FROM `users` WHERE  email='$email'";
    $result = $this->db->query($qry)->row();
    if ($result) {
         echo  'ap  pahly  sy  hi  majod ho  yaha  data  base  ';
         
         $this->session->set_flashdata('register_error', 'Wrong email or password');
       redirect('register');
    } else {
        $qry = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$password' )";
        $this->db->query($qry);
         redirect('authentication');
    }



 }

}
?>