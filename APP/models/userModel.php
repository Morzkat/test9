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
 // um??
 public function getLastId()
 {
   return $this->insert_id;
 }

 // get the comments with answers
 public function getComments()
 {
   $sql = "SELECT comments.id_comment,comments.user_name,comments.comment,comments.date FROM `comments`
     INNER JOIN users on comments.user_id = users.id_user;";

     $sql2 = "SELECT answers.id_comment, answers.id_user, answers.user_name, answers.answer, answers.date  FROM `answers`
     INNER JOIN comments on answers.id_comment = comments.id_comment;";

   $query = $this->query($sql);

   if ($this->rows($query) > 0)
   {
      while ($row_comment = $this->fetch_A($query))
      {
        echo '
          <div class="comment-main-level">
            <!-- Avatar -->

            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>

            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                  <span>hace 20 minutos</span>
                    <i class="fa fa-reply"></i>
                      <i class="fa fa-heart"></i>
            </div>
            
            <div class="comment-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
            </div>
          </div>
        </div>';

          $query2 = $this->query($sql2);

          if ($this->rows($query2) > 0)
          {
            while ($row_answer = $this->fetch_A($query2))
            {
              echo '                <!-- start answer comment -->
                              <!-- answer comments -->
                              <ul class="comments-list reply-list">
                                <li>
                                  <!-- Avatar -->
                                  <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                                  <!-- comment content -->
                                  <div class="comment-box">
                                    <div class="comment-head">
                                      <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                      <span>hace 10 minutos</span>
                                      <i class="fa fa-reply"></i>
                                      <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                    </div>
                                  </div>
                                </li>
                                <!-- end answer commment -->';
            }
          }
      }
   }

   else
   {
     echo "no???s";
   }
 }

// close the conection of the BD for query injections
 public function closeDB()
 {
   $this->close();
 }
}

?>
