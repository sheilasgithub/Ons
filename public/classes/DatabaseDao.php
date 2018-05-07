<?php

require_once("Configuration.php");
require_once("Subscribe.php");

class SubscribeDao {

    function add($email) {

       $configuration = new Configuration("onsystemlogic.ini");
       $mysqli = new mysqli($configuration->retrieve("database", "hostname"),
                            $configuration->retrieve("database", "username"),
                            $configuration->retrieve("database", "password"),
                            $configuration->retrieve("database", "database"));

       if ($mysqli->connect_errno) {
           error_log("Database connection failed with" . $mysqli->connect_error);
           exit();
       }

       try {

           $query = "INSERT INTO subscribe (subscribe_email) VALUES (?)";

           $stmt = $mysqli->prepare($query);
           $stmt->bind_param('s',$email);
           $stmt->execute();

       } catch(Exception $exception) {
           error_log("An unexpected error occurred " . $exception);
	   throw $exception;
       } finally {
           $mysqli->close(); // close the connection regardless of an error
       }
    }

     function read(){

        $subscribes = " ";

        //Connect to database
        $configuration = new Configuration("onsystemlogic.ini");
        $mysqli = new mysqli($configuration->retrieve("database", "hostname"),
                             $configuration->retrieve("database", "username"),
                             $configuration->retrieve("database", "password"),
                             $configuration->retrieve("database", "database"));

        if ($mysqli->connect_errno) {
           error_log("Database connection failed with" . $mysqli->connect_error);
           exit();
        }

        try {
            $subscribeQuery = "SELECT subscribe_email"
                       . " FROM subscribe";

            $stmt = $mysqli->prepare($subscribeQuery);
            $stmt->execute();

            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()) {
                $subscribe = new Subscribe();
                $subscribe->subscribeName = $row["subscribe_email"];
                $subscribes = $subscribes . '<br>' . $subscribe->subscribeName;
            }
        } catch(Exception $exception){
            $mysqli->rollback();
            error_log("Unexpected Error: {$exception}");
        } finally {
            $mysqli->close();
        }
      return $subscribes;
      }
  }


?>
