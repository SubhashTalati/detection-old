<?php
class Ques2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $ques2=$_SESSION['otp'];
        $this->load->model('detection');
        $ddd['carts']=$this->detection->ques2($ques2);
        $this->load->view('ques2',$ddd);

    }
    public function texttwo()
    {
        $ques2=$_SESSION['otp'];
        $texttwo=$_POST['ques2'];
//        print_r($ques2);
//        exit;
        $this->load->model('detection');
        $bbb=$this->detection->texttwo($ques2,$texttwo);
//        print_r($bbb);
//        exit;
        if($bbb[0]['anstwo']==$texttwo)
        {
            $ques2=$_SESSION['otp'];
            echo '<script>alert("AUTHENTICATION QUESTION 2 VERIFIED......!");window.location.replace("'.base_url().'ques3")</script>';

        }
        else
        {
            $ques2=$_SESSION['otp'];
            echo '<script>alert("PLEASE VERIFIED YOUR ANSWER......!");window.location.replace("'.base_url().'ques2")</script>';
        }
    }
}