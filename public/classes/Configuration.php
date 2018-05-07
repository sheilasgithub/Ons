<?php

  class Configuration {
    
    private $filename;
    private $hostname;
    private $webroot;
    private $directory;
    private $properties;
    
    private $debug = true;
    
    public function __construct($filename = "onsystemlogic.ini", $directory = "config/", $hostname = null) {
  
      $this->filename  = $filename;  
      $this->directory = $directory;
      $this->webroot   = $this->getWebroot();
      
      if($hostname === null) {
        $this->hostname = $this->getHostname();
      } else {
        $this->hostname = $hostname;
      }
      
      $this->properties = $this->load();
      
      return;
    }
    
    public function __destruct() {
      
      foreach($this as $property => $value) {
        $this->$property = null;
        unset($this->$property);
      }
      
      return;
    }
    
    private function load() {
      
      $default  = $this->webroot . $this->directory . $this->filename;
      $specific = $this->webroot . $this->directory . $this->hostname . "." . $this->filename;
      
      if(file_exists($default)) {
        $configuration = parse_ini_file($default, true, INI_SCANNER_TYPED);
      } else {
        throw new Exception("Error getting configuration file from '" . $default . "'");
      }
      
      if(file_exists($specific)) {
        $configuration = array_replace_recursive($configuration, parse_ini_file($specific, true, INI_SCANNER_TYPED));
      }
      
      return $configuration;  
    }
    
    public function retrieve($group, $property = null, $result = null) {
      
      if($property === null) {
        if(isset($this->properties[$group])) {
          $result = $this->properties[$group];
        }
      }
      
      if(isset($this->properties[$group][$property])) {
        $result = $this->properties[$group][$property];
      }
      
      return $result;
    }
    
    private function getWebroot() {
      
      $reflector = new ReflectionClass(get_class($this));
      
      if(empty($webroot = substr($reflector->getFileName(), 0 , strpos($reflector->getFileName(), 'classes')))) {
        throw new Exception("Error getting webroot path");
      }
    
      return $webroot;
    }
    
    private function getHostname() {
      
      $hostname = getHostname();
      if(empty($hostname) || $hostname === false) {
        throw new Exception("Error getting server hostname");
      }
    
      return $hostname;
    }
    
  }

?>
