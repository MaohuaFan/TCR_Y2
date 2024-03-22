<?php
    // Functie: Connection Database
    // Auteur: Maohua Fan

    namespace Opdracht6Login\classes;

    use \PDO;
    use \PDOException;

    class Database{

        private $username = "root";
        private $password = "";
        private $dbname = "login";
        private $hostname = "localhost";
        private $conn; // This will hold the database connection

        // Constructor to establish database connection

        public function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
                // Set the PDO Error Mode to Exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                // echo "Connected successfully <br><br><br>";
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

        // Function to get data from a table
        public function GetData($sql, $params = array()){
            $result = [];

            try {
                // Ensure connection is established
                if(!$this->conn) {
                    $this->__construct();
                }

                // Select data from the database
                $query = $this->conn->prepare($sql);
                $query->execute($params);
                $result = $query->fetchAll();
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            return $result;
        }
    }



    // $db = new Database();
    // var_dump($db);
?>