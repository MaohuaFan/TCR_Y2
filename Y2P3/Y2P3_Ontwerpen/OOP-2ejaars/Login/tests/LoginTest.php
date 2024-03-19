<?php
use \PHPUnit\Framework\TestCase;
use Login\classes\User;

// Filename moet gelijk zijn aan de classname LoginTest

class LoginTest extends TestCase
{
    protected $user;

    // Create object User for all tests
    protected function setUp(): void
    {
        $this->user = new User();
    }
}

?>