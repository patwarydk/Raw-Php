<?php

class DB {

    protected $Con;

    protected function Connect() {

        $this->Con = new mysqli("localhost", "root", "", "gctl");
    }

    protected function Escape($data) {
        return mysqli_real_escape_string($this->Con, $data);
    }
     
}
