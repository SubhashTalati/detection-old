<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $this->load->view('register');
    }
  public function register()
  {

      $gowtham=array(
          'username'=>$_POST['username'],
          'email'=>$_POST['email'],
          'password'=>$_POST['password'],
          'cpassword'=>$_POST['cpassword']
      );
//      print_r($gowtham);
//      exit();
      $this->load->model('detection');
      $this->detection->register($gowtham);
  }

}