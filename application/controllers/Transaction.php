<?php
class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function index()
    {   $uid=$_SESSION['id'];
        $this->load->model('detection');
        $rrr['rots']= $this->detection->trans($uid);
        $this->load->view('transaction',$rrr);
    }

}