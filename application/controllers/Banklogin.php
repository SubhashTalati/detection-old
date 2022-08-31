<?php
class Banklogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('banklogin');
    }
    public function banklogin()
    {
        $banklogin=$_POST['banklogin'];
        $bankpassword=$_POST['bankpassword'];
        $this->load->model('detection');
       $bbb= $this->detection->bank($banklogin,$bankpassword);
//
        if($bbb==1)
        {
            echo '<script>alert("login successfully");window.location.replace("'.base_url().'payment")</script>';
        }
        else
        {
            echo '<script>alert(" access authorised person only");window.location.replace("'.base_url().'banklogin")</script>';
        }
    }
}
