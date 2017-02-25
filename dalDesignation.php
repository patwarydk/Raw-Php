<?php

class dalDesignation extends DB {


    public $Id;
    public $Name;

    public function insert() {
        $this->Connect();
        $sql = "insert into designation (name) values('" . $this->Escape($this->Name) . "')";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select * from designation order by name asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}

?>
