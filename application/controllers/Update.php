<?php
class Update extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('detection');
        $fff['carts']= $this->detection->select();
        $this->load->view('update',$fff);
    }
    public function get()
    {
        $productname=$_POST['s'];
//
        $this->load->model('detection');
       $kkk=$this->detection->get($productname);
       $rrr=$kkk['0']['quantity'];
       echo $rrr;
//        exit();

    }
    public function add()
    {
        $quantity=$_POST['c'];
        $productname=$_POST['productname'];
//        print_r($productname);
//        exit();
//
        $this->load->model('detection');
        $this->detection->add($quantity,$productname);
    }

}
