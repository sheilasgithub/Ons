<?php

  require_once("classes/SubscribeDao.php");
  
  $message = null;
  $email = ($_POST["email"]);

  if (!empty($email)) {

     try {
         $subscribeDao = new SubscribeDao();
         $subscribeDao->add($email);
     } catch(Exception $exception) {
        $message = "Please contact the site administrator there has been a website failure for accepting emails for get involved. We apologize for any inconvenience.";
        error_log("Datbase Failure " . $exception->getMessage() . ' for email ' . $email);     
     }
     
  } else {
    $message = "Please enter a valid email address.";
    error_log("Failed attempt for get involved email. Invalid characters present in submitted email address: " . $email);
  }

  if (empty($message)) {
      header("Location: " . $_POST["origin"]);
  } else {
      header("Location: " . $_POST["origin"] . "?message=" . $message);
  }

?>
