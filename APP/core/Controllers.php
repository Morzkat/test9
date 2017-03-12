<?php


/**
 *
 */
class controllers
{

  function __construct()
  {
    # code...
  }

  protected function model($model)
  {
    require_once '../APP/models/'.$model.'.php';
    return new $model();
  }

  protected function view($view, $data = [])
  {
    require_once '../APP/views/'.$view.'.php';
  }
}


 ?>
