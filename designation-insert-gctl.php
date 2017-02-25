<?php

if(isset($_POST['sub'])){
  $sc = new dalDesignation();
  $sc->Name = $_POST['deg'];
  if($sc->insert()){
      Redirect("index.php?v=designation&msg=Save Successful");
      
  }
  else{
      Redirect("index.php?v=designation&msg=Not Save");
  }
}
else{
    Redirect("index.php?v=designation");
}
