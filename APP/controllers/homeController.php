<?php

/**
 *
 */
class home extends controllers
{

  function __construct()
  {

  }

  //twig values
  public function index($name = '')
  {

      $user = $this->model("userModel");

      $this->view("home/index",['name' => $_SESSION]);
  }
}



 ?>
