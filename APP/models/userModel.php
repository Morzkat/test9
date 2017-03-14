<?php

/**
 *
 */
//build a conexion and do things
class userModel extends conexion
{
  private $user_Id;

  function __construct()
  {
    parent::__construct();
  }

  function select_User($data)
{
   $have_User = false;

   if (!empty($data['user']) AND !empty($data['pass']) )
   {
     $user = $this->real_escape_string($data["user"]);
     $pass = $data["pass"];

    $query = $this->query("SELECT * FROM users WHERE (user = '$user' OR email = '$user') AND pass = '$pass' LIMIT 1");

    if ($this->rows($query) > 0)
    {
      $have_User = true;
      $this->user_Id = $this->fetch_A($query)[0];
    }

    else
    {
      $have_User = false;
    }

    $this->free_R($query);
    $this->close();

   }


   return $have_User;
 }

 public function new_User($user, $email, $pass)
 {

  //  $query = $conexion->query("INSERT INTO users (user, pass, email) VALUES ('$user','$pass','$email')");
 }

 public function getUserId()
 {
   return intval($this->user_Id);
 }
}

?>
