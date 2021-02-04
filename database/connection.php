<?php
session_start();
class Database
{
    public $conn;

    public function __construct()
    {   
        require_once("constants.php");
        $this->conn = new Mysqli(HOST,USER,PASS,DB,PORT);
        if($this->conn)
        {
            date_default_timezone_set("Asia/Singapore");
            return $this->conn;
        }else{
            return "CANT CONNECT TO DATABASE".$this->error;
        }
    }
}
?>