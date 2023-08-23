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

  $email = $_POST['email'];
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


    $mail->send();
   
  } catch (Exception $e) {
    $alert = '<div class="alert-error">
               <span>'.$e->getMessage().'</span>
             </div>';
  }
}
?>
      