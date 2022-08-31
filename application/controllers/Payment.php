<?php
class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('payment');
    }
    public function payment()
    {
        $cardnumber=$_POST['cardnum'];
//        print_r($cardnumber);
//        exit;
        $this->load->model('detection');
        $ttt=  $this->detection->payment($cardnumber);
//      print_r($ttt);
//      exit;
      $ggg=$ttt[0]['uid'];
//      print_r($ggg);
//      exit();
      if($ggg>0)
      {
          $otp=rand(1000,9999);
          $this->load->model('detection');
          $rrr= $this->detection->update($cardnumber,$otp);
//          $this->detection->getmail($ggg);
//          $this->detection->mail();
//          print_r($rrr);
//          exit();
       if($rrr==1)
       {
           $this->sendMail($cardnumber,$otp);
       }
       else
       {
           echo 'OTP failed';
       }
      }
      else
      {
          echo 'Card number is not available';
      }

    }

    public  function sendMail($cardnumber,$otp)
    {
//        print_r($cardnumber);
//        exit;
       $uid=$_SESSION['id'];
//       print_r($uid);
//       exit;
      $fff= $this->detection->getmail($uid);
//      print_r($fff);
//      exit;
        $mobile=$fff['0']['mobilenumber'];
//        print_r($mobile);
//        exit();
        $otp=$fff['0']['pass_otp'];
//      print_r($mobile);
//      exit();


        if ($fff) {
            $username = "indnaren";

            $password = "technologies123";

            $message = "Your OTP number is $otp";

            $sender = "fabsys";

            $mobile_number = $mobile;

            $url = "user=" . urlencode($username) . "&password=" . urlencode($password) . "
&mobile=" . urlencode($mobile_number) . "&message=" . urlencode($message) . "&sender=" . urlencode($sender) . "&type=" . urlencode('3');
//print_r($url);
            $ch = curl_init('login.bulksmsgateway.in/sendmessage.php?');


            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);


            curl_close($ch);
            echo '<script>alert("OTP sent SUCCESSFULLY");window.location.replace("'.base_url().'otp")</script>';


        }

    }








}
