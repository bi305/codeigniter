<?php
class Authentication  extends CI_Controller
{

                

    public  function index()
    {
        $this->load->view('sign_in_view' );
    }
    
    public  function login()
    {
       $email=$this->input->post('email');
       $password=$this->input->post('password');
     
       $qry = "SELECT    * FROM `users` WHERE  email ='$email'and password='$password';";
       
       $result = $this->db->query($qry)->row();


       


       if($result){

            $this->session->logged_in_user = $result;

            

            redirect('home');
            
       }
       else{

            $this->session->set_flashdata('login_error', 'Wrong email or password');
            redirect('authentication');
       }
    }
    public  function logout()
    {


        $this->session->sess_destroy();
        redirect(base_url().'home');
        
    }
}
?>