<?php
require_once("hotro.php");
class member{
    private $fullname;
    private $email;
    private $idmember;

    public function __construct($fullname, $email){
        $this ->fullname = $fullname;
        $this -> email = $email;
        $this -> idmember = idcontinue();
    }

    public function __destruct(){
        $this -> fullname = null;
        $this -> idmember = null;
        $this -> email = null;
    }
    public function get_fullname(){
        return $this ->fullname;
    }
    public function get_email(){
        return $this -> email;
    }
    public function get_id(){
        return $this -> idmember;
    }
}