<?php
class Cartdetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $this->load->model('detection');
        $pandi['carts']=$this->detection->addcart();
        $this->load->view('cartdetail',$pandi);
    }
    public function cartdetail()
    {
      $pid=$_POST['datas'];
      $uid=$_SESSION['id'];
//      echo $uid;
//      exit();
        $this->load->model('detection');
        $this->detection->cartdetail($uid,$pid);
    }
    public function dele()
    {
        $id=$_POST['id'];
//        print_r($id);
//        exit();
        $this->load->model('detection');
        $this->detection->dele($id);

    }
    public function add()
    {
        $kamaraj=array(
            'uid'=>$_SESSION['id'],
            'productname'=>$_POST['productname'],
            'quantity'=>$_POST['quantity'],
            'cost'=>$_POST['cost'],
            'total'=>$_POST['total'],
            'status'=>'pending'
        );
//        print_r($kamaraj);
//        exit;
        $this->load->model('detection');
       $eee= $this->detection->add1($kamaraj);
//       print_r($eee);
//       exit;
       if($eee==1)
        {
            echo "product processes successfully";
        }
        else
        {
            echo "product processes failed";

        }

    }
}
