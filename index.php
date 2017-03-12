<?php

require 'APP/core.php';

if (isset($_GET["view"]))
{
  if (file_exists("APP/controllers/".strtolower($_GET["view"])."Controller.php"))
  {
      include 'APP/controllers/'.strtolower($_GET["view"]).'Controller.php';
  }

  else
  {
    include 'APP/controllers/errorController.php';
  }
}

else
{
  include 'APP/controllers/indexController.php';
}

?>
