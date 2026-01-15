<?php
namespace Bib\Class;
class  Book{
    private string $name;
    private string $description;
    private string $release_date;
    // private 
    public function __construct($name,$description,$release_date)
    {
        $this->name = $name;
        $this->description = $description;
        $this->release_date = $release_date;
    }
    public function SetName($name){
        $this->name = $name;
    }
    public function SetDescription($description){
        $this->name = $description;
    }
    public function SetReleaseDate($date){
        $this->name = $date;
    }
    public function GetName(){
        return $this->name;
    }
    public function GetDescription(){
        return $this->description;
    }
    public function GetReleaseDate(){
        return $this->name;
    }
}