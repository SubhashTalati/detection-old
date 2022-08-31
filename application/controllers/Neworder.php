<?php
class Neworder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('detection');
          $sss['parts']=$this->detection->order();
        $this->load->view('neworder',$sss);
    }
    public function status()
    {
        $id=$_GET['id'];
        $this->load->model('detection');
       $this->detection->status($id);
//       print_r($rrr);
//       exit;

    }
}
