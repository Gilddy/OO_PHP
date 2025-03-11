<?php

class Signup extends Dbh
{
   private $username;
   private $pwd;

   public function __construct($username, $pwd)
   {
      $this->username = $username;
      $this->pwd = $pwd;
   }

   //$this->connecct() and parent::connect can be used but parent::connect is used if there is another method/function having the same name
   private function insertUser()
   {
      $query = "INSERT INTO  userd ('username', 'pwd') VALUES (:username, :pwd);";
      $stmt = parent::connect()->prepare($query);
      $stmt->bindParam(":username", $username);
      $stmt->bindParam(":pwd", $pwd);
      $stmt->execute();
   }

   public function isEmptySubmit()
   {
      if(isset($this->username) && isset($this->pwd))
      {
         return true;
      }else{
         return false;
      }
   }
   // private function isEmptySubmit()
   // {
   //    // Check if both username and pwd are set and are not empty
   //    if (!empty($this->username) && !empty($this->pwd)) {
   //       return false;  // Both are not empty
   //    } else {
   //       return true;   // One or both are empty
   //    }
   // }
   public function signupUser() 
   {
      //Error handlers
      if($this->isEmptySubmit())
      {
         header("Location: " . $_SERVER["DOCUMENT_ROOT"] . '/index.php');
         die();
      }

      ini_set('memory_limit', '1G');  // Increases memory limit to 1GB
      //if no errors, signup user
      $this->signupUser();
   }
}