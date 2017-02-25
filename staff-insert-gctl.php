<?php

if(isset($_POST['sub'])){
  $staff = new dalStaff();
  $staff->Name = $_POST['name'];
  $staff->Desingationid = $_POST['deg'];
  $staff->Joining = $_POST['date'];
  $staff->Basic = $_POST['salary'];
  
  if($staff->save()){
      Redirect("index.php?v=salary&msg=Save Successful");
      
  }
  else{
      Redirect("index.php?v=salary&msg=Not Save");
  }
}
else{
    Redirect("index.php?o=salary");
}

