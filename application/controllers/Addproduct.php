<?php
class Addproduct extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('addproduct');
    }
    public function add()
    {
        $file_name=$_FILES['pics']['name'];
        $tmp_name=$_FILES['pics']['tmp_name'];

        $pro=array(
            'productname'=>$_POST['productname'],
            'category'=>$_POST['category'],
            'subcategory'=>$_POST['subcategory'],
            'cost'=>$_POST['cost'],
            'description'=>$_POST['description'],
            'quantity'=>$_POST['quantity'],
            'image'=>$file_name
        );

        $this->load->model('detection');
        $a=$this->detection->product($pro);
//        print_r($a);
//        exit();
        if($a)
        {
            move_uploaded_file($tmp_name,'images/image/'.$file_name);
            echo '<script>alert("product successfully added!!");window.location.replace("' . base_url() .'addproduct")</script>';
        }
        else{
            echo '<script>alert("product not added!!");window.location.replace("' . base_url() .'addproduct")</script>';
        }


    }

}
