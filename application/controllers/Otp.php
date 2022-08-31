<?php
class Otp extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('otp');
    }
    public function otp()
    {
       $otp=$_POST['otp'];
       $this->load->model('detection');
       $ttt=$this->detection->otp($otp);
       if($ttt[0]['pass_otp']==$otp)
       {
           $_SESSION['otp']=$ttt[0]['pass_otp'];
           echo '<script>alert("YOUR OTP IS SUCCESSFULLY VERIFIED.....!");window.location.replace("'.base_url().'ques1") </script>';
       }
       else
       {
           $_SESSION['otp']=$ttt[0]['pass_otp'];
           echo '<script>alert("YOUR OTP IS FAILED .....!")</script>';
       }
    }
}