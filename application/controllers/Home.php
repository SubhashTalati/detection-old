<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('home');
    }
    public function home()
    {
        $username=$_POST['user'];
        $password=$_POST['pass'];
//        $_SESSION['uid']=$uid;
        $this->load->model('detection');
        $mat= $this->detection->home($username,$password);

//        print_r($mat[0]['id']);
//        exit();
        if( sizeof($mat)==1)
        {
//            echo $mat[0]['id'];
            $sn=$mat[0]['id'];
//            echo $sn;
            $rs=$this->detection->check($sn);
//            echo $rs;
//            print_r($rs);
//            exit();
            if($rs==1)
            {
                $_SESSION['id']=$sn;
                            echo '<script>window.location.replace("'.base_url().'productview")</script>';

            }
            else if($rs==0)
            {
                $_SESSION['id']=$sn;
                echo '<script>window.location.replace("'.base_url().'carddetails")</script>';

            }
//            echo '<script>window.location.replace("'.base_url().'carddetails")</script>';

        }
        else
        {
            echo '<script>alert("password incorrect");window.location.replace("'.base_url().'home") </script>';
        }

    }



}