<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['send_request'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $message = $_POST['message'];



  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'marlinoshqiponja0@gmail.com';
    $mail->Password = 'draixlucuubevkow'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';
    $mail->setFrom('marlinoshqiponja0@gmail.com'); 
    $mail->addAddress('marlinoshqiponja0@gmail.com'); 

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact3 Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>date : $date</h3> Time : $time <br> Message : $message <br>";

    $mail->send();
   
  } catch (Exception $e) {
    $alert = '<div class="alert-error">
               <span>'.$e->getMessage().'</span>
             </div>';
  }
}
?>
      