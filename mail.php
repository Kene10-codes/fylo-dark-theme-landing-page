<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['email'])){
$email = $_POST['email'];

$mail = new PHPMailer();

// smtp settings
// $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'testsample189@gmail.com';
$mail->Password = 'KeneNwobodo2020';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';

// email settings
$mail->isHTML(true);
$mail->setFrom($email);
$mail->addAddress($email, 'Kenechukwu');
$mail->addReplyTo($email);
$mail->Subject = 'Confirmation Mail';
$mail->Body = 'Hello, you have successfully subscribed with your <b>email</b> at '.$email.'. <br/> 
              You are welcome to our <strong>email listings</strong> .. <br> We will keep you updated.';

$mail->send();

if($mail->send()) {
    $status = 'success';
    $response = "Email is sent successsfully.";
    $data = ['status' => $status, 'data' => $response];

    header('Content-type: application/json');
    echo json_encode($data);
} 
else 
{
    $status = 'failed';
    $response = 'Something went wrong:  <br>' . $mail->ErrorInfo;

}

}

?>