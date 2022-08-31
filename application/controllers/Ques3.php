<?php
class Ques3 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $ques3=$_SESSION['otp'];
        $this->load->model('detection');
        $ddd['rats']=$this->detection->ques3($ques3);
        $this->load->view('ques3',$ddd);

    }
    public function textthree()
    {
        $ques3=$_SESSION['otp'];
        $textthree=$_POST['ques3'];
//        print_r($textthree);
//        exit;
        $this->load->model('detection');
        $bbb=$this->detection->textthree($ques3,$textthree);
//        print_r($bbb);
//        exit;
        if($bbb[0]['ansthree']==$textthree)
        {
            $ques2=$_SESSION['otp'];
            echo '<script>alert("YOUR TRANSACTION IS SUCCESSFULLY ");window.location.replace("'.base_url().'productview")</script>';

        }
        else
        {
            $ques2=$_SESSION['otp'];
            echo '<script>alert("PLEASE VERIFIED YOUR ANSWER......!");window.location.replace("'.base_url().'ques2")</script>';
        }
    }
}