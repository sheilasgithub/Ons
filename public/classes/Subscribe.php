<?php

  class Subscribe {

     public $subscribeName;
     public $debug = true;

    public function __construct() {}
    
    public function __destruct() {
    
      foreach($this as $property => $value) {
        $this->$property = null;
        unset($this->$property);
      }
    
      return;
    }
  }
?>

