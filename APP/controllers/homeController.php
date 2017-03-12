<?php

/**
 *
 */
class home extends controllers
{

  function __construct()
  {

  }

  public function p($name)
  {

  }

  public function index($name = '')
  {

      $user = $this->model("User");
      $user->name = $name;

      $this->view("home/index",['name' => $user->name]);
  }
}



 ?>
