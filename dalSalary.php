<?php

class dalSalary extends DB {

    public $Id;
    public $Employeeid;
    public $Date;
    public $Basic;
    public $Designationid;

    public function save() {
        $this->Connect();
        $sql = "insert into salary(employeeid, date, basic, designationid) values(
            '" . $this->Escape($this->Employeeid) . "',
            '" . $this->Escape($this->Date) . "',
            '" . $this->Escape($this->Basic) . "',
            '" . $this->Escape($this->Designationid) . "',  
                
)";
        
        $data = $this->Con->query($sql);
        print_r($data);
        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select 
            employee.id, employee.name , designation.name dname,
            salary.id, salary.date, salary.basic
            from 
            employee, designation, salary 
            where 
            salary.employeeid=employee.id and
            salary.designationid=designation.id 
            order by salary.id asc";
        $sql = $this->Con->query($sql);

        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}


?>
