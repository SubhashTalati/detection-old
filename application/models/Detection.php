<?php
class Detection extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register($gowtham)
    {
        $ver = "select * from reg where email='" . $gowtham['email'] . "'";
        $query = $this->db->query($ver);
        $gms = $query->num_rows();
        if ($gms == 0)
        {

            $gm = $this->db->insert('reg', $gowtham);
            echo '<script>alert("register successfully!!");window.location.replace("'.base_url().'home")</script>';
        }

    else

        {
            echo '<script>alert("email is already exits");window.location.replace("'.base_url().'register")</script>';
        }
    }

    public function check($sn)
    {
        $gs="select * from carddetails where uid='$sn'";
       $rs= $this->db->query($gs);
       return $rs->num_rows();
    }

    public function home($username,$password)
    {
        $sql="select id from reg where username='$username' and password='$password'";
//        print_r($sql);
//        exit();
        $fun= $this->db->query($sql);
//        print_r($fun);
//      exit();
        return $fun->result_array();
    }

    public function carddetails($gow)
    {
//        print_r($gow);
//        exit();

        $var = "select * from carddetails where email='" . $gow['email'] . "'";

        $query = $this->db->query($var);
        $gma = $query->num_rows();
        if ($gma ==0)
        {
            $go=$this->db->insert('carddetails',$gow);
            echo '<script>alert("THANKYOU!your card details successfully inserted");window.location.replace("'.base_url().'home")</script>';

        }
         else
        {
         echo '<script>alert("Already Exists");window.location.replace("'.base_url().'carddetails")</script>';
        }

    }


    public function admin($adminname,$password)
    {
        $sss="select * from admin where adminname='$adminname' and password='$password'";
        $bbb= $this->db->query($sss);
        return $bbb->num_rows();

    }

    public function product($pro)
    {

        $var = "select * from addproduct where image='" . $pro['image'] . "'";

        $query = $this->db->query($var);
//        print_r($query);
//        exit();
        $gma = $query->num_rows();

//        print_r($gma);
//        exit();
        if ($gma ==0) {
             return $this->db->insert('addproduct', $pro);

        }
        else
        {
            echo'<script>alert("already exists");window.location.replace("'.base_url().'addproduct")</script>';
        }
    }

    public function productview()
    {
        $sql="select * from addproduct";
        $query=$this->db->query($sql);
        return $query->result_array();

    }
    public function cartdetail($uid,$pid)
    {
      $ddd=array(
          'pid'=>$_POST['datas'],
        'uid'=>$_SESSION['id']
      );

        $ver = "select * from cartdetail where pid='" . $ddd['pid'] . "' and uid='". $ddd['uid'] ."'";
        $query = $this->db->query($ver);
        $gms = $query->num_rows();
        if ($gms == 0)
        {
            $this->db->insert('cartdetail',$ddd);
            echo '<script>alert("Add To Cart Success!!");window.location.replace("'.base_url().'productview")</script>';

        }
        else
        {
            echo '<script>alert("already exists!!");window.location.replace("'.base_url().'productview")</script>';
        }

    }

    public function addcart()
    {
        $uid=$_SESSION['id'];
        $sql="select crt.pid,addi.* from cartdetail crt, addproduct addi where uid='$uid' and crt.pid=addi.id";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function dele($id)
    {
//        print_r($id);
//        exit();
        $sql="delete from cartdetail where pid=$id";
        return $this->db->query($sql);
    }


    public function payment($cardnumber)
    {
//        print_r($cardnumber);
//        exit();
        $sql="select *  from carddetails where cardnumber='$cardnumber'";
        $query=$this->db->query($sql);
        return $query->result_array();

    }
    public function bank($banklogin,$bankpassword)
    {
        $sss="select * from carddetails where banklogin='$banklogin' and bankpassword='$bankpassword'";
        $bbb= $this->db->query($sss);
        return $bbb->num_rows();
    }
    public function update($cardnumber,$otp)
    {
        $sql="update carddetails set pass_otp='".$otp."' where cardnumber='".$cardnumber."'";
        $rrr= $this->db->query($sql);
//        print_r($rrr);
//        exit;
       return $rrr;
    }
    public function getmail($uid){
//        print_r($uid);
//        exit();
        $ver = "select mobilenumber,pass_otp from carddetails where uid='$uid'";
//        print_r($ver);
//        exit;
       $fff=$this->db->query($ver);
     return $fff->result_array();

    }
    public function word($quan)
    {
        $this->db->insert('addproduct',$quan);
    }

    public function select()
    {
        $sql="select productname from addproduct";
        $zzz=$this->db->query($sql);
        return $zzz->result_array();

    }

    public function get($productname)
    {
        $sql="select quantity from addproduct where productname='$productname'";

        $fff= $this->db->query($sql);
        return $fff->result_array();
    }
    public function add($quantity,$productname)
    {
        $sql="update addproduct set quantity='$quantity' where productname='$productname'";
         $aaa=$this->db->query($sql);
        return $aaa;
    }
    public function mem()
    {
        $sql="select * from addproduct";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
public function upd($coss,$productname)
{
//    print_r($productname);
//    exit();

    $sql="update addproduct set cost='$coss' where productname='$productname'";
    $aaa=$this->db->query($sql);
//    print_r($aaa);
//    exit;
    return $aaa;
}

    public function delet($productname)
    {
//        print_r($productname);
//          exit();
        $sql="delete * from addproduct where productname='$productname'";
        return $this->db->query($sql);
    }
    public function otp($otp)
    {
      $sql="select * from carddetails where pass_otp='".$otp."'";
      $eee=$this->db->query($sql);
       return $eee->result_array();
    }
    public function ques1($ques1)
    {
        $sql="select textone from carddetails where pass_otp='".$ques1."'";
        $ppp=$this->db->query($sql);
        return $ppp->result_array();

    }

    public function textone($ques1,$textone)
    {
        $sql="select * from carddetails where pass_otp='".$ques1."' and ansone='".$textone."'";
        $ooo=$this->db->query($sql);
        return $ooo->result_array();


    }
    public function ques2($ques2)
    {
        $sql="select texttwo from carddetails where pass_otp='".$ques2."'";
        $ppp=$this->db->query($sql);
        return $ppp->result_array();

    }
    public function texttwo($ques2,$texttwo)
    {
        $sql="select * from carddetails where pass_otp='".$ques2."' and anstwo='".$texttwo."'";
        $ooo=$this->db->query($sql);
        return $ooo->result_array();


    }

    public function ques3($ques3)
    {
        $sql="select textthree from carddetails where pass_otp='".$ques3."'";
        $ppp=$this->db->query($sql);
        return $ppp->result_array();

    }
    public function textthree($ques3,$textthree)
    {
        $sql="select * from carddetails where pass_otp='".$ques3."' and ansthree='".$textthree."'";
        $ooo=$this->db->query($sql);
        return $ooo->result_array();


    }
    public function add1($kamaraj)
    {
//        print_r($kamaraj);
//        exit();
           $sql="select * from transaction where productname='".$kamaraj['productname']."' and quantity='".$kamaraj['quantity']."' and uid='".$kamaraj['uid']."'";
           $rrr=$this->db->query($sql);
           $sss=$rrr->num_rows();
//            print_r($sss);
//            exit();
         if($sss==0) {
             $eee = $this->db->insert('transaction', $kamaraj);
             return $eee;
         }
//         else{
//             echo 'already exits';
//
//
//}


//      echo '<script>alert("Products processed Successfully...!");window.location.replace("'.base_url().'banklogin")</script>';
    }
    public function trans($uid)
    {

        $sql="select * from transaction where uid='".$uid."'";
//        print_r($sql);
//        exit;
        $aaa=$this->db->query($sql);
        return  $aaa->result_array();

    }
    public function order()
    {
        $sql="select * from transaction where status='pending'";
        $aaa=$this->db->query($sql);
        return  $aaa->result_array();

    }
    public function status($id)
    {
        $sql="update transaction set status='process' where id='$id'";
         $sss=$this->db->query($sql);
        if($sss==1)
        {
            echo '<script>alert("Proceesed successfully");window.location.replace("'.base_url().'neworder")</script>';
        }
    }
    public function pre()
    {
        $sql="select * from transaction where status='process'";
//        print_r($sql);
//        exit;
        $aaa=$this->db->query($sql);
//        print_r($aaa);
        return $aaa->result_array();
//print_r($kkk);
//exit;
    }
    public function complete($id)
    {
//print_r($id);
//exit;
        $sql="update transaction set status='complete' where id='$id'";
//        print_r($sql);
//        exit();
        $sss=$this->db->query($sql);
        if($sss==1)
        {
            echo '<script>alert("Proceesed successfully");window.location.replace("'.base_url().'previousorder")</script>';
        }
    }



}






