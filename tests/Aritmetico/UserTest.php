<?php

namespace CodeExperts\Aritmetico;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    public function testUser()
    {
        $user = new User();
        $user->firstName = "Diogo";
        $user->lastName  = "Henrique";

        $this->assertEquals(
            array(
                "fullName" => $user->firstName." ".$user->lastName
            ),
            $user->returnFullName());
    }
}