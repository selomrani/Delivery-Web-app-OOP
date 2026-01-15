<?php
class Author{
    private $firstname;
    private $lastname;
    public function __construct($firstname,$lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    public function SetFirstname($firstname){
        $this->lastname = $firstname;
    }
    public function SetLastname($lastname){
        $this->lastname = $lastname;
    }
    public function GetFirstname(){
        return $this->firstname;
    }
    public function GetLastname(){
        return $this->lastname;
    }
}