<?php

    class Database{

        private $user = "root";
        private $password = "";
        private $dbname = "name";
        private $hostname = "localhost";

        // Connect Database

        public function __construct(){
            try {
                $conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
                // Set the PDO Error Mode to Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_AS);
                //echo "Connected successfully";
                return $conn;
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
?>