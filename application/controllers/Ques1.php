<?php
class Ques1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $ques1=$_SESSION['otp'];
        $this->load->model('detection');
         $ddd['parts']=$this->detection->ques1($ques1);
         $this->load->view('ques1',$ddd);
    }
    public function textone()
    {
        $ques1=$_SESSION['otp'];
        $textone=$_POST['ques1'];
        $this->load->model('detection');
       $bbb=$this->detection->textone($ques1,$textone);
      if($bbb[0]['ansone']==$textone)
      {
          $ques1=$_SESSION['otp'];
          echo '<script>alert("AUTHENTICATION QUESTION 1 VERIFIED......!");window.location.replace("'.base_url().'ques2")</script>';

      }
      else
      {
          $ques1=$_SESSION['otp'];
          echo '<script>alert("PLEASE VERIFIED YOUR ANSWER......!");window.location.replace("'.base_url().'ques1")</script>';
      }
    }
}