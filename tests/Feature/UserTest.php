<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_users_password_goes_directly_go_in_database(): void
    {
        $password = 'hallo123';
        $user = User::factory()->create();
        $this->assertEquals($password, $user->password);
    }

    public function test_if_user_can_login_with_password(): void
    {
        $user = User::factory()->create();
        $login = $this->post('/login' , [
            'email' => $user->email,
            'password' => 'hallo123'
        ]);
        $login->assertRedirect('/dashboard');
    }
}
