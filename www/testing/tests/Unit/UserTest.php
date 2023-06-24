<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
   
    public function test_that_password_is_same_as_encrypted_password(): void
    {
        $password = 'password';
        $cryptedPassword = bcrypt($password);
        $this->assertEquals($cryptedPassword, $password);
    }

    public function test_if_password_is_strong_enough(): void
    {
        $password = 'password';
        $this->assertTrue(strlen($password) >= 8);
    }
}