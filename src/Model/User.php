<?php
class User {
    private $fname;
    private $lname;
    private $phone;
    private $email;
    private $password;
    private $role;
    public function __construct($fname,$lname,$phone,$email,$password,$role)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        
    }
}
