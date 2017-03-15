<?php

ini_set('memory_limit', '-1');
/**
 *
 */
class controllers
{

  private $data = [];

  function __construct()
  {
    # code...
  }

  protected function model($model)
  {
    require_once '../APP/models/'.$model.'.php';
    return new $model();
  }

  //pass values to twig on $data
  protected function view($view, $data = [])
  {
    require_once '../APP/views/'.$view.'.php';
  }

  public function setData($data = [])
  {
    $this->data = $data;
  }
}


 ?>
