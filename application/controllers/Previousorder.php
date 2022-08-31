<?php
class Previousorder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('detection');
        $ttt['gats']=$this->detection->pre();
        $this->load->view('previousorder',$ttt);
    }
    public function complete()
    {
        $id=$_GET['id'];
//        print_r($id);
//        exit;
        $this->load->model('detection');
        $this->detection->complete($id);
    }
}
