<?php
class Students {
    private $Alex,$Pavel, $Karina;
pritected function __construct($name, $lastname, $surname, $age)
{
    $this->fullName = $name;
    $this->fullName = $lastname;
    $this->fullName = $surname;
    $this->fullName = $age;
}
    public function getName(){
        return $this->Name;
    }

    public function getLastname(){
        return $this->Lastname;
    }

    public function getSurname(){
    return $this->Surname;
    }

    public function getAge(){
        return $this->Age;
    }

    public function setName($name){
        if (gettype($name) === 'string') {
            $this->fullName = $name;
        }
    }

    public function setLastname(array $lastname){
        if (gettype($lastname) === 'string') {
        $this->Lastname = $lastname;
        }
    }

    public function setSurname($surname){
        if (gettype($surname) === 'string'){
            $this->Surname=$surname;
        }

    }

    public function setAge(array $age)
    {
        $this->accessRights = $age;
    }

}