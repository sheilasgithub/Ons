<?php

  class Database {
  
    private $connection;
    
    private $debug = true;
    
    public function __construct() {
      
      $this->connect();
    }
    
    public function __destruct() {
    
      $this->disconnect();
      
      foreach($this as $property => $value) {
        $this->$property = null;
        unset($this->$property);
      }
      
      return;
    }
    
    private function connect() {
    
      $configuration = new Configuration;
      $connection    = new MySQLi;
      
      if($configuration->retrieve("ssl", "enabled") === true) {
        @$connection->ssl_set(
          $configuration->retrieve('ssl', 'key'),
          $configuration->retrieve('ssl', 'cert'),
          $configuration->retrieve('ssl', 'ca')
        );
      }
          
      if (!isset($this->connection) || empty($this->connection)) {
        @$connection->real_connect( 
          $configuration->retrieve("database", "hostname"),
          $configuration->retrieve("database", "username"),
          $configuration->retrieve("database", "password"),
          $configuration->retrieve("database", "database")
        );
        
        if (mysqli_connect_errno()) {
          if ($this->debug === true) {
            error_log(__CLASS__."->".__FUNCTION__.": Failed to connect to database, ".$connection->error);
          }   
          return false;    
        }    
        $this->connection = $connection; 
      }
      
      return true;
    }
    
      if ($this->connection instanceof MySQLi) {
        $this->connection->close();
        $this->connection = null;
      } else {
        if ($this->debug === true) {
          error_log(__CLASS__."->".__FUNCTION__.": Failed to close connection, no connection established");
        }
        return false;
      }      
      return true;
    }
    
    private function prepare($query, $parameters = array()) {
      
      if(!$this->connection instanceof MySQLi) {
        if ($this->debug === true) {
          error_log(__CLASS__."->".__FUNCTION__.": Failed to generate a prepared statement, no connection to database");
        }
        return false;
      }
      
      $statement = $this->connection->prepare($query);
      if(!$statement instanceof mysqli_stmt) {
        if ($this->debug === true) {
          error_log(__CLASS__."->".__FUNCTION__.": Failed to generate a prepared statement from defined query ".$query);
        }
        return false;
      }
      
      if(!empty($parameters)) {
        $binds = array(0=>null);
        foreach($parameters as &$parameter) {
          if (is_int($parameter)) {
            $binds[0] .= "i";
          } else if (is_float($parameter)) {
            $binds[0] .= "d";
          } else if (is_string($parameter)) {
            $binds[0] .= "s";
          } else {
            $binds[0] .= "b";
          }
          $binds[] = &$parameter;
        }

        if(!call_user_func_array(array($statement, 'bind_param'), $binds)) {
          if($this->debug === true) {
            error_log(__CLASS__."->".__FUNCTION__.": Failed to insert bind parameters into prepared statement");
          }
          return false;
        }
      }
      
      return $statement;
    }
    
    protected function execute($query, $parameters = array()) {
      
      // Prepare the statement
      $statement = $this->prepare($query, $parameters);
      if(empty($statement)) {
        if($this->debug === true) {
          error_log(__CLASS__.'->'.__FUNCTION__.': Failed to retrieve prepared statement');
        }
        return false;
      }
      
      if(!$statement->execute()) {
        if($this->debug === true) {
          error_log(__CLASS__."->".__FUNCTION__.": Failed to execute prepared statement");
        }
        return false;
      }
      
      if($statement->field_count >= 1) {
        $result = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
      }
      elseif($statement->affected_rows >= 1){
        $result = true;
      }
      else {
        if($this->debug === true) {
          error_log(__CLASS__."->".__FUNCTION__.": Failed retrieve results from executed statement");
        }
        $result = false;
      }
      
      $statement->close();
      
      return $result;
    }
    
  }
  
?>
