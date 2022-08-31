<?php
class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $this->load->model('detection');
        $query['quans']=$this->detection->mem();
//        print_r( $query);
//        exit();
        $this->load->view('upload',$query);
    }
//    public function edit()
//    {
//
//        $cost=$_POST['cost'];
//        echo $cost;
//    }

    public function upd()
       {
           $coss=$_POST['coss'];
           $productname=$_POST['productname'];
//           print_r($productname);
//           exit();
           $this->load->model('detection');
           $this->detection->upd($coss,$productname);

       }
    public function delet()
    {
        $productname=$_POST['productname'];
//        print_r($productname);
//        exit();
        $this->load->model('detection');
        $this->detection->delet($productname);


    }
}