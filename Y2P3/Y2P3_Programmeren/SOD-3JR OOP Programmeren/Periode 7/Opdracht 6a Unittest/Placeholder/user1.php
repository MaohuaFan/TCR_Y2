<?php
    require_once "Database.php";

    class User extends Database{
        public $username;
        private $password;
        private $role;

        public function RegisterUser($username, $pwd, $role){
            echo "Register user<br>";
            $this->username = $username;
            $this->password = $pwd;
            $this->role = $role;

            // Sla de data op in de database.

            

        }
    }
?>