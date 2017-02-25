<?php

class dalStaff extends DB {

    public $Id;
    public $Name;
    public $Desingationid;
    public $Joining;
    public $Basic;

    public function save() {
        $this->Connect();
        $sql = "insert into employee(name, desingationid, joining, basic) values(
            '" . $this->Escape($this->Name) . "',
            '" . $this->Escape($this->Desingationid) . "',
            '" . $this->Escape($this->Joining) . "',
             '" . $this->Escape($this->Basic) . "'
)";
        echo "$sql";
        $data = $this->Con->query($sql);
        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function view(){
    $arr = array();
    $this->Connect();
    $sql = "select * from employee order by name asc";
    $sql = $this->Con->query($sql);
    while ($d = mysqli_fetch_object($sql)){
       $arr[] = $d; 
    }
    return $arr;
}
}
?>
