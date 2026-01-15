<?php
namespace Bib\Class;
class User{
    private $fname;
    private $lname;
    private $join_date;
    private $role ;
      public function __construct($fname,$lname,$email,$password,$role)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->role = $role;
    }
    public function SetFname($fname){
        $this->fname = $fname;
    }
    public function SetLname($Lname){
        $this->fname = $Lname;
    }
    public function SetRole($role){
        $this->role = $role;
    }
    public function GetFname(){
        return $this->fname;
    }
    public function GetLname(){
        return $this->lname;
    }
    public function GetRole(){
        return $this->role;
    }
}
