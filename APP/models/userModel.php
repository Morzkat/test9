<?php

/**
 *
 */
//build a conexion and do things
class userModel extends conexion
{
  private $user_Id;

  //method construct??
  function __construct()
  {
    parent::__construct();
  }

  // select the user from the BD
  function select_User($data)
{
   $have_User = false;
  //  check if the values are empty did this before i don't what is doing this here but i left it
   if (!empty($data['user']) AND !empty($data['pass']) )
   {
     $user = $this->real_escape_string($data["user"]);
     $pass = $data["pass"];

    //  query
    $query = $this->query("SELECT * FROM users WHERE (user = '$user' OR email = '$user') AND pass = '$pass' LIMIT 1");

    // check the query
    if ($this->rows($query) > 0)
    {
      //user exist
      $have_User = true;
      $this->user_Id = $this->fetch_A($query)[0];
    }

    else
    {
      //Don't exist user
      $have_User = false;
    }

    // free result php function
    $this->free_R($query);

   }

   return $have_User;
 }

 public function new_User($data)
 {
   $OK = false;
   $user = $this->real_escape_string($data['user']);
   $email = $this->real_escape_string($data['email']);
   $pass = $data['pass'];

    $query = $this->query("SELECT * FROM users WHERE (user = '$user' OR email = '$email') LIMIT 1");

    if ($this->rows($query) > 0)
    {
      echo '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>ERROR:</strong> Usuario Existe!!!.
            </div>';

      return $OK = false;
    }

    else
    {
      $query2 = $this->query("INSERT INTO users (user, email, pass) VALUES ('$user', '$email', '$pass') ;");
      return $OK = true;
    }
 }

 public function getUserId()
 {
  //  get the int value
   return intval($this->user_Id);
 }

// get the info of the user form the BD
 public function userInfo($id)
 {
   $query = $this->query("SELECT * FROM users");

   if ($this->rows($query) > 0)
   {
    //  storage the info of the user
     while ($u = $this->fetch_A($query))
     {
       $userInfo[$u['id_user']] = array(
         'id' => $u['id_user'],
         'user' => $u['user'],
         'pass' => $u['pass'],
         'email' => $u['email']
       );
     }
   }

   else
   {
    $userInfo = false;
   }
    return $userInfo;
 }

 public function getLastId()
 {
   return $this->insert_id;
 }

// close the conection of the BD for query injections
 public function closeDB()
 {
   $this->close();
 }
}

?>
