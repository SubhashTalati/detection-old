<?php
class Productview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('detection');
        $data['products']=$this->detection->productview();
        $this->load->view('productview',$data);
    }

}
