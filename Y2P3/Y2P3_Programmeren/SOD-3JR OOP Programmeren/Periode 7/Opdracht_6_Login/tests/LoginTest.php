<?php
// Functie: PHPUnitTest
// Auteur: Maohua Fan

use \PHPUnit\Framework\TestCase;
use Opdracht6Login\classes\User;

class LoginTest extends TestCase
{
    protected $user;

    protected function setUp(): void
    {
        $this->user = new User();
    }

    /**
     * @covers User::SetPassword
     * @covers User::GetPassword
     */
    public function testSetandGetPassword()
    {
        $password = "password123";
        $this->user->SetPassword($password);
        $this->assertEquals($password, $this->user->GetPassword());
    }


    /**
     * @covers User::ValidateUser
     */
    public function testValidateUserWithEmptyUsername()
    {
        $this->user->SetPassword("password123");
        $errors = $this->user->ValidateUser();
        $this->assertContains("Invalid username", $errors);
    }

    /**
     * @covers User::ValidateUser
     */
    public function testValidateUserWithEmptyPassword()
    {
        $this->user->username = "john_doe";
        $errors = $this->user->ValidateUser();
        $this->assertContains("Invalid password", $errors);
    }


    /**
     * @covers User::ValidateUser
     */
    public function testValidateUserWithShortName()
    {
        $this->user->username = "jo"; // Short username
        $errors = $this->user->ValidateUser();
        $this->assertContains('Username moet > 3 en < 50 tekens zijn.', $errors);



        // Debugging statement to inspect the errors array
        // var_dump($errors);
    
        /*$found = false;
        foreach ($errors as $error) {
            if (strpos($error, 'Username moet > 3 en < 50 tekens zijn.') !== false) {
                $found = true;
                break;
            }
        }
    
        $this->assertTrue($found, "The error message for short username length was not found in the errors array.");
        */
    }
    
    
    



    /**
     * @covers User::IsLoggedin
     */
    public function testIsLoggedIn_notset()
    {
        $this->user->Logout();
        $this->assertFalse($this->user->IsLoggedin());
    }

    /**
     * @covers User::Logout
     */
    public function testLogout()
    {
        session_start();
        $this->user->Logout();
        $isDeleted = (session_status() == PHP_SESSION_NONE || empty(session_status()));
        $this->assertTrue($isDeleted);
    }
}

?>