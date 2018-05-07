<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
  <title>List Subscribers - Onsystem Logic</title>
  <?php include "includes/head.php"; ?>
</head>
  <body style="">
  <?php
    require_once("classes/Subscribe.php");
    require_once("classes/SubscribeDao.php");
    require 'bat/phpmailer/PHPMailerAutoload.php';
    $subscribe = new SubscribeDao;
    $outputmessage = $subscribe->read();
    try {
      $mail = new PHPMailer;
      $configuration = new Configuration('onsystemlogic.ini'); //initialization file
      $address = $configuration->retrieve('mailer','transport');//Get SMTP info from onsystemlogic.ini if set
      if ($address ==='smtp'){;
        $mail->isSMTP();  // Set mailer to use SMTP
        $address = $configuration->retrieve('mailer','hostname');
        $mail->Host = $address;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $address = $configuration->retrieve('mailer','username');
        $mail->Username = $address;                 // SMTP username
        $address = $configuration->retrieve('mailer','password');
        $mail->Password = $address;                           // SMTP password
        $address = $configuration->retrieve('mailer','encryption');
        $mail->SMTPSecure = $address;                            // Enable TLS encryption, `ssl` also accepted
        $address = $configuration->retrieve('mailer','port');
        $mail->Port = $address;// TCP port to connect to
      }  
      $address = $configuration->retrieve('email','info_email'); //Get information email From address
      $mail->setFrom($address, 'Website Development');
      $address = $configuration->retrieve('email','lsub_email'); //Get Subscriber List email To address
      $mail->addAddress($address);     // Add a recipient
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Onsystem Logic Subscriber List';
      $newoutputmessage="Your Subscriber  List is below: <br>" . $outputmessage;//add information header to email body with subscriber list
      $mail->Body    = $newoutputmessage;
      $mail->AltBody = $newoutputmessage;

      if(!$mail->send()) {
        error_log("Email Subscriber List failure -send " . $mail->ErrorInfo);
      } else {
      }    
    } catch(Exception $error) {
      error_log("Email Subscriber List failure " . $error);
    }   

?>
  </body>
</html>
