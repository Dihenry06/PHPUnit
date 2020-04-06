<?php

namespace CodeExperts\Aritmetico;

class User{

    public $firstName;
    public $lastName;
    public $age;

    public function returnFullName()
    {
        return array(
            "fullName" => $this->firstName. " " .$this->lastName." "
        );
    }

}