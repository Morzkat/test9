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
      unset($_SESSION['user_info']);

      echo 1;
    }
  }

  public function logIn()
  {
    if ($_POST)
    {
      parse_str($_POST['data'], $data);

       $user = $this->model("userModel");
       $r = $user->select_User($data);

      if ($r === true)
      {

        // set the time of sesion
        ini_set('session.cookie_lifetime', time() + (60*60*24));

        // set the session of the user
        $_SESSION['user_id'] = $user->getUserId();

        // get the info of the uset
        $userInfo = $user->userInfo($user->getUserId());

        //save the info in a session
        $_SESSION['user_info'] = $userInfo;

        // response to a function
        echo 1;
      }

      else
      {
        echo '<div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>ERROR:</strong> Datos Incorrectos!!!.
              </div>';
      }
      $user->closeDB();
    }
  }

  public function signIn()
  {
    if ($_POST)
    {
      parse_str($_POST['data'], $data);
      $user = $this->model("userModel");

      if ($data['pass'] == $data['pass2'])
      {
        $r = $user->new_User($data);

        if ($r === true)
        {

          // get the last id
          $id = $user->getLastId();

          // set the session of the user
          $_SESSION['user_id'] = $id;

          // get the info of user
          $userInfo = $user->userInfo($id);

          //save the info in a session
          $_SESSION['user_info'] = $userInfo;

          // response to a functions
          echo 1;
        }

        else
        {
          echo $r;
        }
        }

      else
      {
        echo '<div class="alert alert-dismissible alert-danger">
         <p><strong>ERROR</strong> Contraseña diferente!!!!...</p>
         </div>';

      }

      $user->closeDB();
    }
  }
}


?>
