<?php

/**
 *
 */
class user extends controllers
{

  function __construct()
  {
    # code...
  }

  public function index($name = '')
  {

      $this->view("home/index",[]);
  }

  public function userName($value='')
  {
    // $user_model = $this->model('User');
  }

  public function logOut()
  {
    if ($_POST)
    {
      session_destroy();
      unset($_SESSION['user_id']);

      echo 1;
    }
  }

  public function logIn()
  {
    if ($_POST)
    {
      $user_Id = 5;
      parse_str($_POST['data'], $data);

       $user = $this->model("userModel");
       $r = $user->select_User($data);

      if ($r == true)
      {
        echo 1;
        // ini_set('session.cookie_lifetime', time() + (60*60*24));
         $_SESSION['user_id'] = $user->getUserId();
        var_dump($_SESSION);
      }

      else
      {
        echo '<div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>ERROR:</strong> Datos Incorrectos!!!.
              </div>';
      }

    }

  }
}


?>
