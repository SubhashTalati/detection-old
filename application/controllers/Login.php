<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $adminname=$_POST['adminname'];
        $password=$_POST['password'];
        $this->load->model('detection');
        $es=$this->detection->admin($adminname,$password);
//        print_r($es);
//        exit();
        if($es==1)
        {
            echo '<script>alert("login successfully");window.location.replace("'.base_url().'addproduct")</script>';
        }
        else
        {
            echo '<script>alert(" access authorised person only");window.location.replace("'.base_url().'login")</script>';
        }

    }

}