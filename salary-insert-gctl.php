<?php

if (isset($_POST['sub'])) {
    $sal = new dalSalary();
    $sal->Employeeid = $_POST['name'];
    $sal->Date = $_POST['date'];
    $sal->Basic = $_POST['salary'];
    $sal->Designationid = $_POST['deg'];

    if ($sal->save()) {
        Redirect("index.php?v=salary&msg=Save Successful");
    } else {
        Redirect("index.php?v=salary&msg=Not Save");
    }
} else {
    Redirect("index.php?o=salary");
}

